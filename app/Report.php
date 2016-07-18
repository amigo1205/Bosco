<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date', 'description', 'status', 'reward', 'code_qr',
    ];

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function pet()
    {
        return $this->belongsTo('App\Pet');
    }

    public static function getDataReports($status = FALSE, $userId = FALSE, $paginate = FALSE, $numPerItem = 10, $path = 'mascotas/perdidos')
    {
        $data = [];
        
        $result = Report::with(
            [
                'location'=>function($queryLocation){
                    $queryLocation->select('id', 'address');
                },
                'pet'=>function($queryPet) use ($userId){
                    $queryPet->with(
                        [
                            'photos'=>function($queryPhoto){
                                $queryPhoto->select('url', 'pet_id');
                            }, 
                            'user'=>function($queryUser) use ($userId){
                                if (isset($userId)) $queryUser->where('id', '=', $userId);
                                $queryUser->select('id', 'name');
                            }
                        ]
                    )->select('id', 'owner_id', 'name', 'description');
                }
            ]
        )->select('pet_id', 'last_location_id', 'status', 'date');
        
        if ($status) $result->where('status', '=', $status);
        if ($paginate) {
            $result = $result->paginate($numPerItem);
            $result->setPath($path);
            $paginate = $result->render();
        }
        else {
            $result = $result->get();
        }

        if (!empty($result)) {
            foreach ($result as $row) {
                $location = Location::where('id','=',$row->last_location_id)->select('address')->get();
                $data[] = [
                    'id' => $row->pet->id, 
                    'name' => $row->pet->name, 
                    'date' => date('d m Y', strtotime($row->date)), 
                    //'address' => $row->location->address, 
                    'address' => $location[0]->address, 
                    'description' => $row->pet->description, 
                    'image' => $row->pet->photos[0]->url
                ];
            }
        }

        return ['data' => $data, 'paginate' => $paginate];
    }
}

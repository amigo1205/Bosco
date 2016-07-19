<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'race', 'gender', 'description',
    ];

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

    public function historyLocated()
    {
        return $this->hasMany('App\HistoryLocated');
    }

    public function reports()
    {
        return $this->hasMany('App\Report');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public static function getDataPet($id, $status)
    {
        $data = [];
        
        $result = Pet::where('id','=',$id)
        ->whereHas('reports',function($query) use ($status){
            $query->where('status','=',$status);
        })
        ->with(
            [
                'photos'=>function($queryPhoto){
                    $queryPhoto->select('url', 'pet_id');
                }, 
                'user'=>function($queryUser){
                    $queryUser->select('id', 'name', 'last_name', 'phone', 'email');
                }, 
                'reports'=>function($queryReport) use ($status){
                    $queryReport->with(
                        [
                            'location'=>function($queryLocation){
                                $queryLocation->select('id', 'address', 'latitude', 'longitude');
                            }
                        ]
                    );
                    $queryReport->select('date', 'description', 'last_location_id', 'pet_id', 'reward', 'status');
                }
            ]
        )
        ->select('id', 'name', 'race', 'gender', 'description', 'owner_id')
        ->get();
        
        if (!empty($result)) {
            $row = $result[0];
            $location = Location::where('id','=',$row->reports[0]->last_location_id)->select('address', 'latitude', 'longitude')->get();
            $user = User::where('id','=',$row->owner_id)->select('id', 'name', 'last_name', 'phone', 'email')->get();
            $data = [
                'owner_name' => $user[0]->name . ' ' . $user[0]->last_name, 
                'owner_phone' => $user[0]->phone, 
                'owner_email' => $user[0]->email, 
                'owner_phone' => $user[0]->phone, 
                'owner_reward' => $row->reports[0]->reward, 
                'pet_name' => $row->name, 
                'pet_race' => $row->race, 
                'pet_gender' => $row->gender, 
                'pet_image' => $row->photos[0]->url, 
                'pet_description' => $row->description, 
                'location_address' => $location[0]->address, 
                'location_latitude' => $location[0]->latitude, 
                'location_longitude' => $location[0]->longitude, 
                'report_date' => date('d m Y', strtotime($row->reports[0]->date)), 
                'report_hour' => date('H:m A', strtotime($row->reports[0]->date)), 
                'report_description' => $row->reports[0]->description
            ];
        }

        return $data;
    }
}

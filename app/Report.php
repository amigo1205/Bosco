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
}

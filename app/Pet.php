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
        return $this->hasMany('App\Reportr');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

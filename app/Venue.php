<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $fillable = [
    	'name',
    	'latitude',
    	'longitude'
    ];

    public function training()
    {
    	return $this->hasOne('App\Training');
    }
}

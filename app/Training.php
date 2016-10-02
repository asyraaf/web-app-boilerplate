<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
	protected $fillable = [
		'creator_id',
		'trainer_id',
		'venue_id',
		'date_start',
		'date_end',
		'time_start',
		'time_end'
	];

	public function creator()
	{
		return $this->belongsTo('App\User','creator_id');
	}

	public function trainer()
	{
		return $this->belongsTo('App\User','trainer_id');
	}

    public function venue()
    {
    	return $this->belongsTo('App\Venue');
    }

    public function facilitators()
    {
    	return $this->belongsToMany('App\User','training_facilitator');
    }

    public function participants()
    {
    	return $this->belongsToMany('App\User','training_participant');
    }
}

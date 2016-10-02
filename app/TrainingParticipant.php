<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingParticipant extends Model
{
    protected $table = 'training_participant';
    protected $fillable = [
    	'user_id',
    	'training_id',
    	'absence',
    	'status',
    	'feedback',
    	'testimonial'
    ];
    public $timestamps = false;
}

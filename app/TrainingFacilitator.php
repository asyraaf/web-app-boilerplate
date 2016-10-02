<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingFacilitator extends Model
{
    protected $table = 'training_facilitator';
    protected $fillable = [
    	'user_id',
    	'training_id'
    ];
    public $timestamps = false;
}

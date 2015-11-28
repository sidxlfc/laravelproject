<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	//$event->observations()
	protected $table = 'events';

	
    protected $fillable = [
    	'event_name'
    ];

    //get the observations to which the event belongs to
    public function observations()
    {
    	return $this->belongsToMany('App\Observation', 'event_observation', 'event_name', 'observation_id')->withTimeStamps();//, 'event_observation', 'event_name', 'obs_id')->withTimeStamps();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
	//$observation->events()
    protected $table = 'observations';


    protected $fillable = [
    	'cloud_coverage',
    	'temperature'
    ];

    public function events()
    {
    	return $this->belongsToMany('App\Event', 'event_observation', 'observation_id', 'event_name')->withTimeStamps();
    }

    //public function city
}
?>
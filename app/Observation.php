<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
	//$observation->events()
    protected $table = 'observations';

    protected $fillable = [
    	'obs_id',
    	'cloud_coverage',
    	'temperature'
    ];

    public function events()
    {
    	return $this->belongsToMany('App\Event', 'event_observation', 'obs_id', 'event_name')->withTimeStamps();
    }

    //public function city
}
?>
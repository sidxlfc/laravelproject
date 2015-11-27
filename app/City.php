<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
    	'city_name'
    ];

    protected $table = 'cities';

    public function MS()
    {
    	return $this->hasMany('App\MS', 'MS_city', 'city_name');
    }
}

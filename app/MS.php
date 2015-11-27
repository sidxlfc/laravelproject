<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MS extends Model
{
    protected $fillable = [
    	'msn',
    	'city',
    	'type'
    ];

    protected $table = 'ms';

    public function city()
    {
    	return $this->belongsTo('App\City', 'MS_city', 'city_name');
    }
}

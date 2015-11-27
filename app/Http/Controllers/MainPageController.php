<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Observation;
use App\Http\Requests\ObservationRequest;

class MainPageController extends Controller
{
    public function main()
    {
    	//return 'Main Pagee';
    	$obs = Observation::all();  
    	return view('main', compact('obs'));
    }

    public function submitObservation()
    {
    	return view('submit_observation', ['submit_observation']);
    }

    public function store(ObservationRequest $request)
    {
    	//$temp[$request['cloud_coverage'], $request['temperature']];
		
    	$obs = new Observation(/*$request->all()*/);
        
        $obs->obs_id = $request->input('obs_id');
        $obs->cloud_coverage = $request->input('cloud_coverage');
        $obs->temperature = $request->input('temperature');
    	$events = $request->input('events');

        save($obs);
        $obs->events()->attach([$events[0], $obs->obs_id]);
        

        //$obs = $request->input('obs_id');
        


        //$city = $request->input('city');
        
        //dd($city);

        //$obs_city = new 	
    	return redirect('main');
    }
}

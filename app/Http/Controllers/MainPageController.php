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
		
    	$obs = new Observation($request->all());
    	$obs->save();

    	//$obs_event = new 
    	return redirect('main');
    }
}

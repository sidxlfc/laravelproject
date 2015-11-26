@extends('master')

@section('content')	
	
	<h1>Submit Observation</h1>
	<br/>
	<br/>
	<br/>

	{!! Form::open(['url' => 'main']) !!}
	
	<div class="form-group">
		{!! Form::label('obs_id', 'Observation ID:') !!}
		{!! Form::text('obs_id', null, $attributes=['class' => 'form-control', 'id'=>'precipitation_amount_text']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('precipitation_type', 'Precipitation type:') !!}
		{!! Form::select('size', array('R' => 'Rain', 'S' => 'Snow'), $attributes=['id'=>'precipitation_type_select']); !!}
		<br/>
		{!! Form::label('precipitation_amount', 'Precipitation Amount:') !!}
		{!! Form::text('precipitation_amount', null, $attributes=['class' => 'form-control', 'id'=>'precipitation_amount_text']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('Event', 'Event:') !!}
		{!! Form::select('event', array('R' => 'Rain', 'F' => 'Freezing Rain', 'S' => 'Snow', 'H' => 'Hail', 'T' => 'Thunderstorm'), $attributes=['id'=>'event_select']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('cloud_coverage', 'Cloud Coverage:') !!}
		{!! Form::selectRange('cloud_coverage', 0, 6, $attributes=['id'=>'cloud_coverage_select']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('temperature', 'Temperature:') !!}
		{!! Form::text('temperature', null, $attributes=['class' => 'form-control', 'id'=>'temperature_text']) !!}
	</div>
	

	<div class="form-group">
		{!! Form::submit('Submit', $attributes=['id'=>'submit', 'class'=>'btn btn-primary form-control']) !!}	
	</div>

	{!! Form::close() !!}		
	
	@if ($errors->any())
		<ul class="alert alert-danger">
			
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach

		</ul>
	@endif
	

@stop
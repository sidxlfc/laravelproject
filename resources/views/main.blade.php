@extends('master')

@section('content')
	
	<h1>Main Page</h1>
	<br/>
	<br/>
	<div class="body"> 

		<table class = "table table-striped table-bordered table-condensed table-hover">
			<tr>
    			<th>obs_id</th>
    			<th>cloud_coverage</th> 
    			<th>temperature</th>
  			</tr>
			@foreach($obs as $observation)
				<tr>
			    	<td>{{ $observation->obs_id }}</td>
    				<td>{{ $observation->cloud_coverage }}</td> 
			    	<td>{{ $observation->temperature }}</td>
  				</tr>
			@endforeach
		</table>

	</div>

	<a href = "/submit_observation">Add a weather observation</a>
@stop
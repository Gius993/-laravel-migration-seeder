
@extends('layouts.app')

@section('main_content')
	<h1>Citta di viaggio</h1>

	<div>
		<ul>
			@foreach ($trips as $trip)
				<li>{{ $trip->locality }}</li><span>{{ $trip->description }}</span>
			@endforeach
		</ul>
	</div>
@endsection
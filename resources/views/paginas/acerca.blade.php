@extends('master')


@section('contenido')


@if(count($apoyo))

	<h1>personas</h1>

	<ul>
		@foreach ($apoyo  as $persona)
				<li>{{ $persona }}</li>
		@endforeach
	</ul>

@stop

@endif
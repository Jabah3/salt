@extends('layoutLogin')

@section('content')
	<div>
		{{ Form::open(['url' => 'login']) }}
			@if(Session::has('error_message'))
				{{ Session::get('error_message') }}
			@endif

			{{ Form::label('usuario', 'Usuario') }}
			{{ Form::text('usuario') }}
			{{ Form::label('contrasena','Contraseña') }}
			{{ Form::text('contrasena') }}	
			{{ Form::submit('Iniciar Sesion', ['class' => 'button']) }}
		
		{{ Form::close() }}
	</div>
@stop
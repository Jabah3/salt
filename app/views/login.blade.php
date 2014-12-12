<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<div>
		{{ Form::open(['url' => 'login']) }}
			@if(Session::has('error_message'))
				{{ Session::get('error_message') }}
			@endif

			<h2>Log In</h2>

			{{ Form::label('usuario'), 'Usuario' }}
			{{ Form::text('usuario') }}

			{{ Form::label('contrasena','Contraseña') }}
			{{ Form::text('contrasena') }}

			<label for="">
				{{ Form::checkbox('remember', true) }} Recordar
			</label>

			{{ Form::submit('Log in', ['class' => 'btn']) }}

		{{ Form::close() }}
	</div>
</body>
</html>
<?php
	Class AuthController extends BaseController
	{
		public function showLogin()
		{
			//Verificamos si hay una sesión activa
			if(Auth::check())
			{
				// Si tenemos sesión activa mostrará la página de inicio
				return Redirect::to('/');
			}
			//Si no hay sesión activa mostramos el formulario
			return View::make('login');
		}

		public function postLogin()
		{
			// Obtenemos los datos del formulario
			$data = [
				'usuario' => Input::get('usuario'),
				'contrasena' => Input::get('contrasena')
			];

			// Verificamos los datos
			if(Auth::attempt($data, Input::get('remember'))) // Como segundo parámetro pasámos el checkbox para saber si queremos recordar la contaseña
			{
				//Si nuestros datos son los correctos mostramos la pagina de inicio
				return Redirect::intented('/');
			}
			// Si los datos no son los correctos volvemos al login y mostramos un error
			return Redirect::back()->with('error_message','Invalid data')->withInput();
		}

		public function logOut()
		{
			// Cerramos la sesion
			Auth::logout();
			// Volvemos al login y mostramos un mensaje indicando que se cerro la sesión
			return Redirect::to('login')->with('error_message','Logged out correctly');
		}
	}
 ?>
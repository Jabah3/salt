<!doctype html>
<html class="no-js" lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema de administracion de comercios en la nube</title>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="css/ionicons.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/app.css" />
     <link rel="stylesheet" href="css/rev.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>


  </head>

  <body>



		<section class="row">


			<input type="submit" data-reveal-id="ModalAgrega" class="button" value="Agregar">


			<section id="contenido">
				@include('roles.contenido')
			</section>

		</section>



		<div id="respuesta"></div>




		<?php $uri = Request::path(); ?> 
		@include('roles.agregaformato')






		<!-- Paginacion con Ajax -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	    <script src="bower_components/jquery/dist/jquery.min.js"></script>
	    <script src="bower_components/foundation/js/foundation.min.js"></script>
	    <script src="js/app.js"></script>
	    <!--Contiene acciones como guardar,editar,eliminar-->
		<script src="js/acciones.js"></script>







  </body>
</html>
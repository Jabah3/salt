    
@extends('layout')

@section('content')

<section class="row">
<?php //$uri = Request::path(); ?>   

	<input type="submit" data-reveal-id="ModalAgrega" class="button" value="Agregar">


	<section id="contenido">
		@include('unidadmedidas.contenido')
	</section>

</section>



<div id="respuesta"></div>



<?php $uri = Request::path(); ?> 
@include('unidadmedidas.agregaformato')










<!-- Paginacion con Ajax -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
    <!--Contiene acciones como guardar,editar,eliminar-->
	<script src="js/acciones.js"></script>


@stop



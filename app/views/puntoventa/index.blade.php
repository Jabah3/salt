
@extends('layout')





@section('content')



		<section class="row">
			<section id="contenido">
			@include('puntoventa.contenido')
			</section>
		</section>



		<div id="respuesta"></div>




		<?php $uri = Request::path(); ?> 
		{{-- @include('punto_venta.agregaformato') --}}






		<!-- Paginacion con Ajax -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	    <script src="bower_components/jquery/dist/jquery.min.js"></script>
	    <script src="bower_components/foundation/js/foundation.min.js"></script>
	    <script src="js/app.js"></script>
	    <!--Contiene acciones como guardar,editar,eliminar-->
		<script src="js/acciones.js"></script>

<script type="text/javascript">
$("#codigo").focus();

$(document).ready(function(){
	$("#cajabusqueda").on('keyup', function(){
		var valor = $(this).val();
		var formData = {'valor' : valor };
			$.ajax({
		        type : "POST",
		        url  : "punto_venta/busqueda",
		        data : formData,
		        success:function(data, textStatus, jqXHR) 
			    {	
			    	$("#display").css({"display":"block"});   
			        $("#display").html(data);   
			    },
			    error: function(jqXHR, textStatus, errorThrown) 
			    {
			        alert("Ocurrio un Error al Buscar");     
			    }		        
			});
			event.preventDefault(); //STOP default action
		    //event.unbind(); //unbind. to stop multiple form submit.
	});		
});

</script>

@stop
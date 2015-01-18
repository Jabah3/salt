    
@extends('layout')

@section('content')
	<section class="row">
			<div class="large-12 columns">
				<h2>Unidades de Medida</h2>
				<section class="row">
					<div class="large-12 columns text-right">
						<a href="#" data-reveal-id="ModalAgrega" class="button small"><i class="icon ion-plus"></i> Nuevo</a>
					</div>
				</section>
				<!-- <input type="submit" data-reveal-id="ModalAgrega" class="button small" value="Agregar"> -->
				<section id="contenido">
					@include('unidadmedidas.contenido')
				</section>
			</div>

	</section>



	<div id="respuesta"></div>


<?php $uri = Request::path(); ?> 
@include('unidadmedidas.agregaformato')





    <!--Contiene acciones como guardar,editar,eliminar-->
	<script src="js/acciones.js"></script>


@stop



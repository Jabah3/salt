@extends('layout')

@section('content')

<section class="row">
  <section class="row">
    <div class="large-12 columns">
      <h2>Usuarios</h2>
      <section class="row">
        <div class="large-12 columns text-right">
        <a href="#" data-reveal-id="ModalAgrega" class="button small"><i class="icon ion-plus"></i> Nuevo</a>
        </div>
      </section>
    	<section id="contenido">
    		@include('usuarios.contenido')
    	</section>
    </div>
  </section>
  <div id="respuesta"></div>
  @include('usuarios.agregaformato')

  <!--Contiene acciones como guardar,editar,eliminar-->
	<script src="js/acciones.js"></script>


@stop
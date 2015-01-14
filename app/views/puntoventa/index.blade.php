    
@extends('layoutPuntoVenta')

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


  //comprobamos si se pulsa una tecla
        $("#codigo").keyup(function(e){
                                     
              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#codigo").val();
                                                                           
              //hace la búsqueda
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "punto_venta/busqueda",
                    data: "b="+consulta,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#display").html("<p align='center'><img src='ajax-loader.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#display").empty();
                          //$("#display").append(data);
                          //$("#codigo").append(data);
                          //$("#display").prepend(data);      
                          $("#display").after(data);                                                      
                    }
              });
                                                                                  
                                                                           
        });

</script>





@stop
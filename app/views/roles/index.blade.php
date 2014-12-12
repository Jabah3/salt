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








<input type="submit" data-reveal-id="ModalAgregaRol" class="button" value="Agregar">






<table>
  <thead>
    <tr>
      <th width="200">Nombre</th>
      <th width="150">Descripción</th>
      <th width="150">Acciones</th>
    </tr>
  </thead>

  <tbody>
	@if($roles)
		
		@foreach($roles as $rol)
		<tr>
			<input type="hidden" name="id" id="id" value="{{$rol->id}}" />
			<td >{{$rol->nombre}}</td>
			<td>{{$rol->descripcion}}</td>
			<td> <a href="#" id="eliminar" onclick="eliminarol({{$rol->id}});">E</a> <a  href="#" onclick="editarol({{$rol->id}});" id="">A</a>
    		</td>
    	</tr>	
		@endforeach
		
	@endif
  </tbody>
</table>



</section>







<div id="ModalAgregaRol" class="reveal-modal" data-reveal>
  <h2>Agregar Rol</h2>
	<form action="roles/guardarol" method="post" name="FormularioAgregaRol" id="FormularioAgregaRol" >

        <div class="row">
          <div class="large-12 columns">
            <label>Nombre
              <input type="text" id="nombre" name="nombre" placeholder="Escribe el nombre del Rol" required>
            </label>
          </div>
        </div>

        <div class="row">
          <div class="large-12 columns">
            <label>Descripción
              <textarea name="descripcion" id="descripcion" placeholder="Escribre una Descripcion del rol"></textarea>
            </label>
          </div>
        </div>

		<div class="row">
          <div class="large-4 columns">
          </div>

          <div class="large-4 columns">
          </div>

          <div class="large-4 columns">
         	<input type="submit" value="Guardar" class="button succes expand">
          </div>
        </div>
    </form>
    <a class="close-reveal-modal">&#215;</a>
</div>


<aside id="respuesta"></aside>




    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>


<script type="text/javascript">

		function eliminarol(id){
			if(confirm("¿Desea Eliminar el Rol?")){
				var formData = {'id' : id };
				$.ajax({
		            type : "POST",
		            url  : "roles/eliminarol",
		            data : formData,
		            success:function(data, textStatus, jqXHR) 
			        {
			            $("#respuesta").text(data);
			           alert("Se elemino correctamente");
			        },
			        error: function(jqXHR, textStatus, errorThrown) 
			        {
			            alert("Ocurrio un Error al Eliminar");     
			        }		        
				});
			}
		}


		function editarol(id){
			var formData = {'id' : id };
			$.ajax({
	            type : "POST",
	            url  : "roles/editarol",
	            data : formData,
	            success:function(data, textStatus, jqXHR) 
		        {
		            $("#respuesta").html(data);
		           //alert("Se elemino correctamente");
		           $('#ModalEditaRol').foundation('reveal', 'open');
		        },
		        error: function(jqXHR, textStatus, errorThrown) 
		        {
		            alert("Ocurrio un Error al Eliminar");     
		        }		        
			});
		}


	$(document).ready(function(){


		$('#FormularioAgregaRol').submit(function(event) {
			$.ajax({
	            type : $(this).attr("method"),
	            url  : $(this).attr("action"),
	            data : $(this).serializeArray(),
	            success:function(data, textStatus, jqXHR) 
		        {
		            //$("#respuesta").text(data);
		            $('#ModalAgregaRol').foundation('reveal', 'close');
		           
		        },
		        error: function(jqXHR, textStatus, errorThrown) 
		        {
		            alert("Ocurrio un Error al Guardar");     
		        }		        
			});
			event.preventDefault(); //STOP default action
	    	//event.unbind(); //unbind. to stop multiple form submit.
		});	

	});
</script>


  </body>
</html>
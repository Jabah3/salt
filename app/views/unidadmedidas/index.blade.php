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
		@include('unidadmedidas.contenido')
	</section>

</section>



<div id="respuesta"></div>










<div id="ModalAgrega" class="reveal-modal" data-reveal>
  <h2>Agregar Unidad Medida</h2>
	<form action="unidad_medida/guardaunidadmedida" method="post" name="FormularioAgregaUnidadmedida" id="FormularioAgregaUnidadmedida" >

        <div class="row">
          <div class="large-12 columns">
            <label>Tipo Unidad
              <input type="text" id="tipo_unidad" name="tipo_unidad" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>
        </div>

        <div class="row">
          <div class="large-12 columns">
            <label>Unidad Medida
              <input type="text" name="unidad_medida" id="unidad_medida" placeholder="Escribre Unidad de medida" required />
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













<!-- Paginacion con Ajax -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
 <script>

    $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            } else {
                getPosts(page);
            }
        }
    });

    $(document).ready(function() {
        $(document).on('click', '.pagination a', function (e) {
            getPosts($(this).attr('href').split('page=')[1]);
            e.preventDefault();
        });
    });

    function getPosts(page) {
        $.ajax({
            url : '?page=' + page,
            dataType: 'json',
        }).done(function (data) {
            $('#contenido').html(data);
            location.hash = page;
        }).fail(function () {
            alert('Posts could not be loaded.');
        });
    }
    </script>















    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>

<script type="text/javascript">

		function eliminarol(id){
			if(confirm("¿Desea Eliminar la Unidad de Medida?")){
				var formData = {'id' : id };
				$.ajax({
		            type : "POST",
		            url  : "roles/eliminarol",
		            data : formData,
		            success:function(data, textStatus, jqXHR) 
			        {
			            $("#respuesta").text(data);
			           alert("Se elemino correctamente");

			           var pagina_Actual=obtiene_activo();
		            	getPosts(pagina_Actual);
			        },
			        error: function(jqXHR, textStatus, errorThrown) 
			        {
			            alert("Ocurrio un Error al Eliminar");     
			        }		        
				});
			}
		}



		function obtiene_activo(){			
			//valor=$('.active a').html();
			valor=$('.pagination .active').val();
			//console.log("Valor= "+valor);			
			return valor;
		}



		function formatoeditarol(id){
			obtiene_activo();
			var formData = {'id' : id };
			$.ajax({
	            type : "POST",
	            url  : "roles/formatoeditarol",
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


		$('#FormularioAgregaUnidadmedida').submit(function(event) {
			$.ajax({
	            type : $(this).attr("method"),
	            url  : $(this).attr("action"),
	            data : $(this).serializeArray(),
	            success:function(data, textStatus, jqXHR) 
		        {
		            //$("#respuesta").text(data);
		            //refresh_registros();	
		            $('#ModalAgrega').foundation('reveal', 'close');		            		            
		            $('#FormularioAgregaUnidadmedida').trigger("reset");	 
		            var pagina_Actual=obtiene_activo();
		            getPosts(pagina_Actual);    		           

		        },
		        error: function(jqXHR, textStatus, errorThrown) 
		        {
		            alert("Ocurrio un Error al Guardar");     
		        }		        
			});
			event.preventDefault(); //STOP default action
	    	//event.unbind(); //unbind. to stop multiple form submit.
		});	


		$('body').on('submit','#FormularioGuardaEdicionRol',function(event) {
			$.ajax({
	            type : $(this).attr("method"),
	            url  : $(this).attr("action"),
	            data : $(this).serializeArray(),
	            success:function(data, textStatus, jqXHR) 
		        {
		            //$("#respuesta").text(data);
		            $('#ModalEditaRol').foundation('reveal','close');
		            //refresh_registros();	
		            var pagina_Actual=obtiene_activo();
		            getPosts(pagina_Actual);	           
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
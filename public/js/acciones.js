		
/**************** ELIMINA *******************/
function elimina(id,uri){
	if(confirm("¿Desea Eliminar el Registro?")){
		var formData = {'id' : id };				
		$.ajax({
            type : "POST",
            url  : uri+"/elimina",
            data : formData,
            success:function(data, textStatus, jqXHR) 
	        {
	            $("#respuesta").text(data);
	           alert("Se Elemino Correctamente");
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




		function formatoedita(id,uri){
			obtiene_activo();
			var formData = {'id' : id, 'uri': uri};
			$.ajax({
	            type : "POST",
	            url  : uri+"/formatoedita",
	            data : formData,
	            success:function(data, textStatus, jqXHR) 
		        {
		            $("#respuesta").html(data);
		           //alert("Se elemino correctamente");
		           $('#ModalEdita').foundation('reveal', 'open');

		        },
		        error: function(jqXHR, textStatus, errorThrown) 
		        {
		            alert("Ocurrio un Error al Editar");     
		        }		        
			});
		}


//Editaa y Agrega
$(document).ready(function(){

		$('#FormularioAgrega').submit(function(event) {
			$.ajax({
	            type : $(this).attr("method"),
	            url  : $(this).attr("action"),
	            data : $(this).serializeArray(),
	            success:function(data, textStatus, jqXHR) 
		        {
		            //$("#respuesta").text(data);
		            //refresh_registros();	
		            $('#ModalAgrega').foundation('reveal', 'close');		            		            
		            $('#FormularioAgrega').trigger("reset");	 
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


		$('body').on('submit','#FormularioGuardaEdicion',function(event) {
			$.ajax({
	            type : $(this).attr("method"),
	            url  : $(this).attr("action"),
	            data : $(this).serializeArray(),
	            success:function(data, textStatus, jqXHR) 
		        {
		            //$("#respuesta").text(data);
		            $('#ModalEdita').foundation('reveal','close');
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

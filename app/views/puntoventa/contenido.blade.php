<?php $uri = Request::path(); ?> 



<style>
  #display{
    /*width: 100px;*/
   /* height: 51px;*/
    /*background: #cac;*/
    margin-top: -15px !important;
    position: fixed;
    z-index: 1000;
    margin-left: -16px !important;
  }
</style>


<div class="large-8 columns"> 
  Codigo del Producto: <input type="search" class="buscar" id="cajabusqueda" placeholder="Introduzca el codigo" autofocus/>
  <div id="display" style="display:none;"></div>
</div>








<div class="large-4 columns"> 
  <h1> 
    <input type="submit" value="Total: $ 45.00" />
  </h1>
</div>














<div class="large-5 columns"> 

  <table id="tabla_productos">

  <thead>
      <tr>
        <th colspan="6"> Ticket No.1</th>
      </tr>

      <tr>
        <th>Cantidad</th>
        <th>Producto</th>
        <th>Precio</th>
        <th>Importe</th>
        <th></th>
      </tr>
    </thead>

    <tbody id="tabla_body_productos">
      <!--
      <tr id="prod_1">
          <td>2</td>
          <td>Hamburquesa chica</td>      
          <td>$ 10</td>
          <td>$ 20</td>
          <td>20</td> 
          <td> <input type="submit" value="Eliminar" onclick="elimina_pod(1);" /> </td> 
      </tr-->
    </tbody>

  </table>


</div>








<div class="large-7 columns"> 
  {{--@include('puntoventa.slider')--}}
</div>






<section id="resultados"></section>



<script>
function myFunction(id,nombre,precio){
    var rowCount = $('#tabla_body_productos tr').length;
    if(rowCount == 0){
      $("#tabla_body_productos").append("<tr><td>1</td> <td>"+nombre+"</td>  <td>$ "+precio+"</td><td>$ "+precio+"</td><td class='eliminar'><a>E</a></td></tr>");   
    }

    if (rowCount >= 1){
      var siguiente=parseFloat(rowCount)+1;
      $("#tabla_body_productos tr:last").after("<tr><td>1</td> <td>"+nombre+"</td>  <td>$ "+precio+"</td><td>$ "+precio+"</td><td class='eliminar'><a>E</a></td></tr>");   
    }
    $("#display").css({"display":"none"}); 
}

$(document).on("click",".eliminar",function(){
    var parent = $(this).parents().get(0);
    $(parent).remove();
});


$("#cajabusqueda").keypress(function(e) {
   var keycode = (event.keyCode ? event.keyCode : event.which);

    if(keycode == '13'){      
      consulta = $("#cajabusqueda").val();
      alert("s");
     $.ajax({
            type: "POST",
            url: "punto_venta/busqueda",
            data: "valor="+consulta,
            dataType: "html",
            beforeSend: function(){
                  //imagen de carga
                  //$("#display").html("<p align='center'><img src='ajax-loader.gif' /></p>");
            },
            error: function(){
                  alert("error petición ajax");
            },
            success: function(data){                                                    
                 // $("#display").empty();
                  //$("#display").append(data);
                  //$("#codigo").append(data);
                  //$("#display").prepend(data);      
                $("#display").html(data);                                                      
            }
      });
    }
});
</script>

<?php $uri = Request::path(); ?> 

<!-- CArrusell Loop -->
<link rel="stylesheet" href="js/plugin/swiper-master/dist/idangerous.swiper.css">





  <style>
.swiper-container {
  width: 220px;
  height: 220px;
  color: #fff;
  text-align: center;
}
.red-slide {
  background: #ca4040;
}
.blue-slide {
  background: #4390ee;
}
.orange-slide {
  background: #ff8604;
}
.green-slide {
  background: #49a430;
}
.pink-slide {
  background: #973e76;
}

.swiper-slide .title {
  font-style: italic;
  /*font-size: 42px;*/
  /*margin-top: 80px;*/
  margin-bottom: 0;
  line-height: 45px;
}

.swiper-slide p {
  font-style: italic;
  font-size: 25px;
}
.pagination {
  position: absolute;
  z-index: 20;
  left: 10px;
  top: 10px;
}
.swiper-pagination-switch {
  display: block;
  width: 8px;
  height: 8px;
  border-radius: 8px;
  background: #555;
  margin: 0 0px 5px;
  opacity: 0.8;
  border: 1px solid #fff;
  cursor: pointer;
}
.swiper-active-switch {
  background: #fff;
}




.fila-base{ display: none; } /* fila base oculta */
  </style>




<div class="large-8 columns"> 
  Codigo del Producto: <input type="search" name="codigo" id="codigo" placeholder="Introduzca el codigo" autofocus/>
</div>
<br/>

<div id="display"></div>




<div class="large-4 columns"> 
  <h1> 
    <input type="submit" value="Total: $ 45.00" />
  </h1>
</div>














<div class="large-8 columns"> 

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












<div class="large-4 columns"> 


  <div class="swiper-container">
    <div class="swiper-wrapper">


  @if($productos)   
    @foreach($productos as $producto)
      <div class="swiper-slide" style="background:{{$producto->color}};">

          <img {{--width="400" height="307"--}} ondblclick="myFunction({{$producto->id}},'{{$producto->nombre}}','{{$producto->precio_venta}}')" src="{{ 'imagenes/'.$producto->imagen }}" title="{{$producto->nombre}}" alt="{{$producto->nombre}}" />  
          <div class="title">{{$producto->nombre}}</div>     
          
      </div>
    @endforeach
  @endif


    </div>
    <div class="pagination"></div>
  </div>



</div>











<section id="resultados"></section>











  <script src="js/plugin/swiper-master/jquery-1.10.1.min.js"></script>
  <script src="js/plugin/swiper-master/dist/idangerous.swiper.min.js"></script>

<script>

function myFunction(id,nombre,precio){
    var rowCount = $('#tabla_body_productos tr').length;

    if(rowCount == 0){
      $("#tabla_body_productos").append("<tr><td>1</td> <td>"+nombre+"</td>  <td>$ "+precio+"</td><td>$ "+precio+"</td><td class='eliminar'><input type='submit' value='Eliminar'/></td></tr>");   
    }

    if (rowCount >= 1){
      var siguiente=parseFloat(rowCount)+1;
      $("#tabla_body_productos tr:last").after("<tr><td>1</td> <td>"+nombre+"</td>  <td>$ "+precio+"</td><td>$ "+precio+"</td><td class='eliminar'><input type='submit' value='Eliminar'/></td></tr>");   
    }

}

  $(document).on("click",".eliminar",function(){
    var parent = $(this).parents().get(0);
    $(parent).remove();
  });


$("#codigo").keypress(function(e) {
    consulta = $("#codigo").val();
     $.ajax({
            type: "POST",
            url: "punto_venta/busqueda",
            data: "b="+consulta,
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
                  $("#resultados").html(data);                                                      
            }
      });

});


</script>


  <script>
  var mySwiper = new Swiper('.swiper-container',{
    pagination: '.pagination',
    paginationClickable: true,
    mode: 'vertical',
    //slidesPerView: 2,
    loop: true
  })
  </script>
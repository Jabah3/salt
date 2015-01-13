<?php $uri = Request::path(); ?> 

<!-- CArrusell Loop -->
<link rel="stylesheet" href="js/plugin/swiper-master/dist/idangerous.swiper.css">



<style>
  /* Demo Styles */
  /*
  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 13px;
    line-height: 1.5;
  }
*/
  .swiper-container {
    width: 880px;
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
  /*
  .swiper-slide .title {
    font-style: italic;
    font-size: 42px;
    margin-top: 80px;
    margin-bottom: 0;
    line-height: 45px;
  }*/
  /*
  .swiper-slide img{
    cursor: pointer;
  }*/


  .pagination {
    position: absolute;
    z-index: 20;
    left: 10px;
    bottom: 10px;
  }
  .swiper-pagination-switch {
    display: inline-block;
    width: 8px;
    height: 8px;
    border-radius: 8px;
    background: #222;
    margin-right: 5px;
    opacity: 0.8;
    border: 1px solid #fff;
    cursor: pointer;
  }
  .swiper-visible-switch {
    background: #aaa;
  }
  .swiper-active-switch {
    background: #fff;
  }



/*
.device {
  width: 640px;
  height: 300px;
  padding: 30px 40px;
  border-radius: 20px;
  background: #111;
  border: 3px solid white;
  margin: 5px auto;
  position: relative;
  box-shadow: 0px 0px 5px #000;
}
.device .arrow-left {
  background: url(img/arrows.png) no-repeat left top;
  position: absolute;
  left: 10px;
  top: 50%;
  margin-top: -15px;
  width: 17px;
  height: 30px;
}
.device .arrow-right {
  background: url(img/arrows.png) no-repeat left bottom;
  position: absolute;
  right: 10px;
  top: 50%;
  margin-top: -15px;
  width: 17px;
  height: 30px;
}
*/

</style>


<!--
<table>
  <thead>
    <tr>
      <th width="200">Nombre</th>
      <th width="150">Descripción</th>
      <th width="150">Acciones</th>
    </tr>
  </thead>

  <tbody id="contenido_rol" class="">
	@if($productos)		
		@foreach($productos as $producto)
		<tr>
			<input type="hidden" name="id" id="id" value="{{$producto->id}}" />
			<td >{{$producto->id}}</td>
			<td>{{$producto->nombre}}</td>
      <td ><img src="{{ 'imagenes/'.$producto->imagen }}" title="{{$producto->nombre}}"></td>    		
    </tr>	
		@endforeach
	@endif
  </tbody>

  <tr>
  	<td colspan="3">

  	</td>
  </tr>
</table>
-->

  <div class="swiper-container">
    <div class="swiper-wrapper">
  @if($productos)   
    @foreach($productos as $producto)
      <div class="swiper-slide" style="background:{{$producto->color}};">
        <div class="title">

          <img {{-- width="400" height="307"--}} ondblclick="myFunction({{$producto->id}})" src="{{ 'imagenes/'.$producto->imagen }}" title="{{$producto->nombre}}" alt="{{$producto->nombre}}" >  
          <!--<input type="image" src="{{'imagenes/'.$producto->imagen}}" title="{{$producto->nombre}}" alt="Submit" width="400" height="307">-->
          {{$producto->nombre}}      

        </div>
      </div>
    @endforeach
  @endif
    </div>
      <div class="pagination"></div>
  </div>











  <script src="js/plugin/swiper-master/jquery-1.10.1.min.js"></script>
  <script src="js/plugin/swiper-master/dist/idangerous.swiper.min.js"></script>
  <script>
  var mySwiper = new Swiper('.swiper-container',{
    pagination: '.pagination',
    paginationClickable: true,
    slidesPerView: 4,
    grabCursor: true,
    loop: true
  })

function myFunction(id){
  alert(id);
}

  </script>


<br/>







<table>
  <tr>
    <td> Ticket No.1</td>
  </tr>

  <tr>
    <th>Codigo de barra</th>
    <th>Descripcion de producto</th>
    <th>Precio de venta</tH>
    <th>Cantidad</th>
    <th>Importe</th>
    <th>Existencia</th>
  </tr>

  <tr>
      <td>54654654654</td>
      <td>Hamburquesa chica</td>
      <td>$ 10</td>
      <td>1</td>
      <td>$ 10</td>
      <td>20</td> 
      <td><a href="">Eliminar</a></td> 
  </tr>

  <tr>
      <td>54654654654</td>
      <td>Hamburguesa Mediana</td>
      <td>$ 15 </td>
      <td>2</td>
      <td>$ 30</td>
      <td>20</td> 
      <td><a href="">Eliminar</a></td> 
  </tr>  

</table>
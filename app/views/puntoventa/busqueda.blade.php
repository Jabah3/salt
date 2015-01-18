<style type="text/css">
ul{
	list-style: none;
}	
.articulo{
	background: #cac;
}	
.articulo:hover{
	background: #caa;
	cursor: pointer;
	padding: 2px;
}
</style>

<ul class="lista_prod">
@if($productos)   
    @foreach($productos as $prod)
    <li class="articulo" onclick="myFunction({{$prod->id}},'{{$prod->nombre}}','{{$prod->precio_venta}}')">
		<img src="{{'imagenes/'.$prod->imagen}}" style="width:25px; float:left; margin-right:6px" />
		{{$prod->nombre}}
	</li>
    @endforeach
</ul>      
@endif



 

<?php $uri = Request::path(); ?> 
<table  style="width:100%;">
  <thead>
    <tr>
      <th width="200">Empresa</th>
      <th width="150">Nombre</th>
      <th width="150">RFC</th>
      <th width="150">Acciones</th>
    </tr>
  </thead>

  <tbody id="contenido_rol" class="">
	@if($proveedores)		
		@foreach($proveedores as $proveedor)
		<tr>
			<input type="hidden" name="id" id="id" value="{{$proveedor->id}}" />
			<td >{{$proveedor->empresa}}</td>
			<td>{{$proveedor->nombre}}</td>
      <td>{{$proveedor->rfc}}</td>
			<td> 
        <ul class="button-group">
          <li>
            <a href="#" class="button tiny secondary" onclick="formatoedita({{$proveedor->id}},'{{$uri}}');" id=""><i class="icon ion-edit"></i> Editar</a>
          </li>
          <li>
            <a href="#" id="eliminar" class="button tiny alert" onclick="elimina({{$proveedor->id}},'{{$uri}}');"><i class="icon ion-close"></i> Eliminar</a>
          </li>         
        </ul>


    	</td>
    	</tr>	
		@endforeach
	@endif
  </tbody>

  <tr>
  	<td colspan="3">


  	</td>
  </tr>

</table>

  	{{ $proveedores->links() }}
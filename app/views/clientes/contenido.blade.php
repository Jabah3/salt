<?php $uri = Request::path(); ?> 
<table style="width:100%;">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Telefono</th>
      <th>Email</th>
      <th>Descripción</th>

      <th width="200">Acciones</th>
    </tr>
  </thead>

  <tbody id="contenido_rol">
	@if($clientes)		
		@foreach($clientes as $cliente)
		<tr>
			<input type="hidden" name="id" id="id" value="{{$cliente->id}}" />
			<td >{{$cliente->nombres}}</td>
      <td >{{$cliente->apellidos}}</td>
      <td>{{$cliente->telefono}}</td>
      <td>{{$cliente->email}}</td>
      <td>{{$cliente->descripcion}}</td>      

			<td> 
        <ul class="button-group">
          <li>
            <a href="#" class="button tiny secondary" onclick="formatoedita({{$cliente->id}},'{{$uri}}');" id=""><i class="icon ion-edit"></i> Editar</a>
          </li>
          <li>
            <a href="#" id="eliminar" class="button tiny alert" onclick="elimina({{$cliente->id}},'{{$uri}}');"><i class="icon ion-close"></i> Eliminar</a>
          </li>         
        </ul>
    	</td>
    	</tr>	
		@endforeach
	@endif
  </tbody>
</table>

  		{{ $clientes->links() }}
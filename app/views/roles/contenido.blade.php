<?php $uri = Request::path(); ?> 
<table>
  <thead>
    <tr>
      <th width="200">Nombre</th>
      <th width="150">Descripción</th>
      <th width="150">Acciones</th>
    </tr>
  </thead>

  <tbody id="contenido_rol" class="">
	@if($roles)		
		@foreach($roles as $rol)
		<tr>
			<input type="hidden" name="id" id="id" value="{{$rol->id}}" />
			<td >{{$rol->nombre}}</td>
			<td>{{$rol->descripcion}}</td>
			<td> <a href="#" id="eliminar" onclick="elimina({{$rol->id}},'{{$uri}}');">ELIM</a> <a  href="#" onclick="formatoedita({{$rol->id}},'{{$uri}}');" id="">EDIT</a>
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

  		{{ $roles->links() }}
<?php $uri = Request::path(); ?> 
<table style="width:100%;">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Descripción</th>
      <th width="200">Acciones</th>
    </tr>
  </thead>

  <tbody id="contenido_rol">
	@if($roles)		
		@foreach($roles as $rol)
		<tr>
			<input type="hidden" name="id" id="id" value="{{$rol->id}}" />
			<td >{{$rol->nombre}}</td>
			<td>{{$rol->descripcion}}</td>
			<td> 
        <ul class="button-group">
          <li>
            <a href="#" class="button tiny secondary" onclick="formatoedita({{$rol->id}},'{{$uri}}');" id=""><i class="icon ion-edit"></i> Editar</a>
          </li>
          <li>
            <a href="#" id="eliminar" class="button tiny alert" onclick="elimina({{$rol->id}},'{{$uri}}');"><i class="icon ion-close"></i> Eliminar</a>
          </li>         
        </ul>
    	</td>
    	</tr>	
		@endforeach
	@endif
  </tbody>
</table>

  		{{ $roles->links() }}
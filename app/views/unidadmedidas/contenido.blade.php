<?php $uri = Request::path(); ?> 
<table>
  <thead>
    <tr>
      <th width="200">Tipo Unidad</th>
      <th width="150">Unidad Medida</th>
      <th width="150">Descripción</th>
      <th width="150">Acciones</th>
    </tr>
  </thead>

  <tbody id="contenido_rol" class="">
	@if($unidadmedida)		
		@foreach($unidadmedida as $um)
		<tr>
			<input type="hidden" name="id" id="id" value="{{$um->id}}" />
			<td >{{$um->tipo_unidad}}</td>
			<td>{{$um->unidad_medida}}</td>
      <td>{{$um->descripcion}}</td>
			<td> <a href="#" id="eliminar" onclick="elimina({{$um->id}},'{{$uri}}');">ELIM</a> <a  href="#" onclick="formatoedita({{$um->id}},'{{$uri}}');" id="">EDIT</a>
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

  	{{ $unidadmedida->links() }}
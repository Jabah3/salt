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
	@if($grupos)		
		@foreach($grupos as $grupo)
		<tr>
			<input type="hidden" name="id" id="id" value="{{$grupo->id}}" />
			<td >{{$grupo->nombre}}</td>
			<td>{{$grupo->descripcion}}</td>
			<td> <a href="#" id="eliminar" onclick="elimina({{$grupo->id}},'{{$uri}}');">ELIM</a> <a  href="#" onclick="formatoedita({{$grupo->id}},'{{$uri}}');" id="">EDIT</a>
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

  	{{ $grupos->links() }}
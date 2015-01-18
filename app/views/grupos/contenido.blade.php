<?php $uri = Request::path(); ?> 
<table  style="width:100%;">
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
			<td> 
        <ul class="button-group">
          <li>
            <a href="#" class="button tiny secondary" onclick="formatoedita({{$grupo->id}},'{{$uri}}');" id=""><i class="icon ion-edit"></i> Editar</a>
          </li>
          <li>
            <a href="#" id="eliminar" class="button tiny alert" onclick="elimina({{$grupo->id}},'{{$uri}}');"><i class="icon ion-close"></i> Eliminar</a>
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

  	{{ $grupos->links() }}
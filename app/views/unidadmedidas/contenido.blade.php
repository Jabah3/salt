<?php $uri = Request::path(); ?> 
<table  style="width:100%;">
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
			<td> 


        <ul class="button-group">
          <li>
            <a href="#" class="button tiny secondary"  onclick="formatoedita({{$um->id}},'{{$uri}}');" id=""><i class="icon ion-edit"></i> Editar</a>
          </li>
          <li>
            <a href="#" id="eliminar" class="button tiny alert" onclick="elimina({{$um->id}},'{{$uri}}');"><i class="icon ion-close"></i> Eliminar</a>
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

  	{{ $unidadmedida->links() }}
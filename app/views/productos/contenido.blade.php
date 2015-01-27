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
  @if($productos)    
    @foreach($productos as $producto)
    <tr>
      <input type="hidden" name="id" id="id" value="{{$producto->id}}" />
      <td>{{$producto->nombre}}</td>
      <td>{{$producto->descripcion}}</td>
      <td> 

        <ul class="button-group">
          <li>
            <a href="#" class="button tiny secondary" onclick="formatoedita({{$producto->id}},'{{$uri}}');" id=""><i class="icon ion-edit"></i> Editar</a>
          </li>
          <li>
            <a href="#" id="eliminar" class="button tiny alert" onclick="elimina({{$producto->id}},'{{$uri}}');"><i class="icon ion-close"></i> Eliminar</a>
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

    {{ $productos->links() }}
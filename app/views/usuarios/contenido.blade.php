<?php $uri = Request::path(); $ur=Request::url(); ?> 
<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>apellidos</th>
      <th>rol</th>
      <th>sucursal</th>
      <th>grupo</th>
      <th>Estado</th>
      <th>Descripción</th>
      <th width="200">Acciones</th>
    </tr>
  </thead>

  <tbody id="contenido" class="">
  @if($usuarios)    
    @foreach($usuarios as $usuario)
    <tr>
      <input type="hidden" name="id" id="id" value="{{$usuario->id}}" />
      <td >{{$usuario->nombre}}</td>
      <td >{{$usuario->apellido}}</td>
      <td >{{$usuario->rol->nombre}}</td>
      <td >{{$usuario->sucursal->nombre}}</td>
      <td >{{$usuario->grupo->nombre}}</td>
      <td >
        @if($usuario->activo)
          Activo
        @else
          Inactivo
        @endif      
      </td>
      <td >{{$usuario->descripcion}}</td>
      <td> 
        <ul class="button-group">
          <li>
            <a href="#" class="button tiny secondary" onclick="formatoedita({{$usuario->id}},'{{$uri}}');" id=""><i class="icon ion-edit"></i> Editar</a>
          </li>
          <li>
            <a href="#" id="eliminar" class="button tiny alert" onclick="elimina({{$usuario->id}},'{{$uri}}');"><i class="icon ion-close"></i> Eliminar</a>
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

    {{ $usuarios->links() }}


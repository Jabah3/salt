<?php $uri = Request::path(); ?> 
<table>
  <thead>
    <tr>
      <th width="200">Nombre</th>
      <th width="150">apellidos</th>
      <th width="150">rol_id</th>
      <th width="150">sucursal_id</th>
      <th width="150">telefono</th>
      <th width="150">email</th>
      <th width="150">grupos_id</th>
      <th width="150">ciudad</th>
      <th width="150">estado</th>
      <th width="150">activo</th>
      <th width="150">sexo</th>
      <th width="150">foto</th>
      <th width="150">Descripción</th>
      <th width="150">Acciones</th>
    </tr>
  </thead>

  <tbody id="contenido" class="">
  @if($usuarios)    
    @foreach($usuarios as $usuario)
    <tr>
      <input type="hidden" name="id" id="id" value="{{$usuario->id}}" />
      <td >{{$usuario->nombres}}</td>
      <td >{{$usuario->apellidos}}</td>
      <td >{{$usuario->rol_id}}</td>
      <td >{{$usuario->sucursal_id}}</td>
      <td >{{$usuario->telefono}}</td>
      <td >{{$usuario->email}}</td>
      <td >{{$usuario->grupos_id}}</td>
      <td >{{$usuario->ciudad}}</td>
      <td >{{$usuario->estado}}</td>
      <td >{{$usuario->activo}}</td>
      <td >{{$usuario->sexo}}</td>
      <td >{{$usuario->foto}}</td>
      <td >{{$usuario->descripcion}}</td>



      <td> <a href="#" id="eliminar" onclick="elimina({{$usuario->id}},'{{$uri}}');">ELIM</a> <a  href="#" onclick="formatoedita({{$usuario->id}},'{{$uri}}');" id="">EDIT</a>
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
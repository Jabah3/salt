<?php $uri = Request::path(); ?> 
<table>
  <thead>
    <tr>
      <th width="200">Nombre</th>
      <th width="150">ciudad</th>
      <th width="150">calle</th>
      <th width="150">colonia</th>
      <th width="150">giro</th>
      <th width="150">rfc</th>
      <th width="150">mensaje_sucursal</th>
      <th width="150">pagina_web</th>
      <th width="150">Descripción</th>


      <th width="150">Acciones</th>
    </tr>
  </thead>

  <tbody id="contenido_rol" class="">
  @if($sucursales)    
    @foreach($sucursales as $sucursal)
    <tr>
      <input type="hidden" name="id" id="id" value="{{$sucursal->id}}" />
      <td >{{$sucursal->nombre}}</td>
      <td>{{$sucursal->ciudad}}</td>
      <td>{{$sucursal->calle}}</td>
      <td>{{$sucursal->colonia}}</td>
      <td>{{$sucursal->giro}}</td>
      <td>{{$sucursal->rfc}}</td>
      <td>{{$sucursal->mensaje_sucursal}}</td>
      <td>{{$sucursal->pagina_web}}</td>
      <td>{{$sucursal->descripcion}}</td>
      <td> <a href="#" id="eliminar" onclick="elimina({{$sucursal->id}},'{{$uri}}');">ELIM</a> <a  href="#" onclick="formatoedita({{$sucursal->id}},'{{$uri}}');" id="">EDIT</a>
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

    {{ $sucursales->links() }}
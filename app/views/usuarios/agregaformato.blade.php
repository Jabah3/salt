
<?php $uri = Request::path(); ?> 


<div id="ModalAgrega" class="reveal-modal" data-reveal>
  <h2>Agregar Usuario</h2>
  <form action="{{$uri}}/guarda" method="post" name="FormularioAgrega" id="FormularioAgrega" >


        <div class="row">
          <div class="large-12 columns">
            <label>Usuario
              <input type="text" id="usuario" name="usuario" placeholder="Escriba su usuario" required />
            </label>
          </div>
        </div>



        <div class="row">
          <div class="large-12 columns">
            <label>Contraseña
              <input type="password" id="contrasena" name="contrasena" placeholder="Escriba su contraseña" required />
            </label>
          </div>
        </div>

        <div class="row">
          <div class="large-12 columns">
            <label>Nombre
              <input type="text" id="nombre" name="nombre" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>
        </div>

        <div class="row">
          <div class="large-12 columns">
            <label>Apellidos
              <input type="text" id="apellido" name="apellido" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>
        </div>


        <div class="row">
          <div class="large-12 columns">
            <label>Rol
            @if($roles)
              <select id="rol_id" name="rol_id" required>
                <option></option>
                @foreach($roles as $rol)
                <option value="{{$rol->id}}">{{$rol->nombre}}</option>                
                @endforeach
              </select> 
            @endif
            </label>
          </div>
        </div>


        <div class="row">
          <div class="large-12 columns">
            <label>Sucursal
            @if($sucursales)
              <select id="sucursal_id" name="sucursal_id" required>
                <option></option>
                @foreach($sucursales as $sucursal)
                <option value="{{$sucursal->id}}">{{$sucursal->nombre}}</option>                
                @endforeach
              </select> 
            @endif
            </label>
          </div>
        </div>

        <div class="row">
          <div class="large-12 columns">
            <label>Ciudad
              <input type="text" id="ciudad" name="ciudad" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>
        </div>

        <div class="row">
          <div class="large-12 columns">
            <label>Telefono
              <input type="text" id="telefono" name="telefono" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>
        </div>


        <div class="row">
          <div class="large-12 columns">
            <label>Email
              <input type="text" id="email" name="email" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>
        </div>

        <div class="row">
          <div class="large-12 columns">
            <label>Grupo
            @if($grupos)
              <select id="grupo_id" name="grupo_id"  required>
                <option></option>
                @foreach($grupos as $grupo)
                <option value="{{$grupo->id}}">{{$grupo->nombre}}</option>                
                @endforeach
              </select> 
            @endif
            </label>
          </div>
        </div>

        <div class="row">
          <div class="large-12 columns">
            <label>Estado
              <input type="text" id="estado" name="estado" placeholder="Escribe Tipo estado" required />
            </label>
          </div>
        </div>

<!--
        <div class="row">
          <div class="large-12 columns">
            <label>calle
              <input type="text" id="calle" name="calle" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>
        </div>


        <div class="row">
          <div class="large-12 columns">
            <label>colonia
              <input type="text" id="colonia" name="colonia" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>
        </div>


        <div class="row">
          <div class="large-12 columns">
            <label>giro
              <input type="text" id="giro" name="giro" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>
        </div>



        <div class="row">
          <div class="large-12 columns">
            <label>rfc
              <input type="text" id="rfc" name="rfc" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>
        </div>


        <div class="row">
          <div class="large-12 columns">
            <label>mensaje_sucursal
              <input type="text" id="mensaje_sucursal" name="mensaje_sucursal" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>
        </div>


        <div class="row">
          <div class="large-12 columns">
            <label>pagina_web
              <input type="text" id="pagina_web" name="pagina_web" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>
        </div>
-->
        <div class="row">
          <div class="large-12 columns">
            <label>Sexo
              <input type="text" id="sexo" name="sexo" placeholder="Escribe Tipo Sexo" required />
            </label>
          </div>
        </div>


        <div class="row">
          <div class="large-12 columns">
            <label>Foto
              <textarea name="foto" id="foto" placeholder="Escribre una Descripcion del rol"></textarea>
            </label>
          </div>
        </div>


        <div class="row">
          <div class="large-12 columns">
            <label>Descripción
              <textarea name="descripcion" id="descripcion" placeholder="Escribre una Descripcion del rol"></textarea>
            </label>
          </div>
        </div>


    <div class="row">
          <div class="large-4 columns">
          </div>

          <div class="large-4 columns">
          </div>

          <div class="large-4 columns">
          <input type="submit" value="Guardar" class="button succes expand">
          </div>
        </div>
    </form>
    <a class="close-reveal-modal">&#215;</a>
</div>

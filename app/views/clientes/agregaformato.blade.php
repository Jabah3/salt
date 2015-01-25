<?php //$uri = Request::path(); ?> 

<div id="ModalAgrega" class="reveal-modal" data-reveal>
  <h2>Agregar Cliente</h2>
  <form action="{{$uri}}/guarda" method="post" name="FormularioAgrega" id="FormularioAgrega" >

        <div class="row">
          <div class="large-12 columns">
            <label>Nombres
              <input type="text" id="nombres" name="nombres" placeholder="Escribe el nombre" required>
            </label>
          </div>
        </div>

        <div class="row">
          <div class="large-12 columns">
            <label>Apellidos
              <input type="text" id="apellidos" name="apellidos" placeholder="Escribe el apellido" required>
            </label>
          </div>
        </div>

        <div class="row">
          <div class="large-12 columns">
            <label>Telefono
              <textarea name="telefono" id="telefono" placeholder="Escribre una Descripcion del rol"></textarea>
            </label>
          </div>
        </div>

        <div class="row">
          <div class="large-12 columns">
            <label>Email
              <textarea name="email" id="email" placeholder="Escribre una email"></textarea>
            </label>
          </div>
        </div>

        <div class="row">
          <div class="large-12 columns">
            <label>Calle
              <textarea name="calle" id="calle" placeholder="Escribre una email"></textarea>
            </label>
          </div>
        </div>

        <div class="row">
          <div class="large-12 columns">
            <label>Ciudad
              <textarea name="ciudad" id="ciudad" placeholder="Escribre la Ciudad"></textarea>
            </label>
          </div>
        </div>

        <div class="row">
          <div class="large-12 columns">
            <label>Estado
              <textarea name="estado" id="estado" placeholder="Escribre el Estado"></textarea>
            </label>
          </div>
        </div>

        <div class="row">
          <div class="large-12 columns">
            <label>Sexo
              <select id="sexo" name="sexo" required>
                <option></option>
                <option value="M">Masculino</option>    
                <option value="F">Femenino</option>             
              </select> 
            </label>
          </div>
        </div>

        <div class="row">
          <div class="large-12 columns">
            <label>Foto
              <textarea name="foto" id="foto" placeholder="Escribre la foto"></textarea>
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
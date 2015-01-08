
<?php $uri = Request::path(); ?> 


<div id="ModalAgrega" class="reveal-modal" data-reveal>
  <h2>Agregar Sucursal</h2>
  <form action="{{$uri}}/guarda" method="post" name="FormularioAgrega" id="FormularioAgrega" >

        <div class="row">
          <div class="large-12 columns">
            <label>Nombre
              <input type="text" id="nombre" name="nombre" placeholder="Escribe Tipo Unidad" required />
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


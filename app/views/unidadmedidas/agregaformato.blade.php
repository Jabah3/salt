
<?php //$uri = Request::path(); ?> 


<div id="ModalAgrega" class="reveal-modal" data-reveal>
  <h2>Agregar Unidad Medida</h2>
  <form action="{{$uri}}/guarda" method="post" name="FormularioAgrega" id="FormularioAgrega" >

        <div class="row">
          <div class="large-12 columns">
            <label>Tipo Unidad
              <input type="text" id="tipo_unidad" name="tipo_unidad" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>
        </div>

        <div class="row">
          <div class="large-12 columns">
            <label>Unidad Medida
              <input type="text" name="unidad_medida" id="unidad_medida" placeholder="Escribre Unidad de medida" required />
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


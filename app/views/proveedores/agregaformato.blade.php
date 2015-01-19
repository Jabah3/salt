
<?php //$uri = Request::path(); ?> 


<div id="ModalAgrega" class="reveal-modal" data-reveal>
  <h2>Agregar Proveedor</h2>
  <form action="{{$uri}}/guarda" method="post" name="FormularioAgrega" id="FormularioAgrega" >

        <div class="row">
          <div class="large-12 columns">
            <label>Nombre
              <input type="text" id="empresa" name="empresa" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>
           <div class="large-12 columns">
            <label>Nombre
              <input type="text" id="nombre" name="nombre" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>
           <div class="large-12 columns">
            <label>Nombre
              <input type="text" id="rfc" name="rfc" placeholder="Escribe Tipo Unidad" required />
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
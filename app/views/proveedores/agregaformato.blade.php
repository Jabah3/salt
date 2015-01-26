
<?php //$uri = Request::path(); ?> 


<div id="ModalAgrega" class="reveal-modal" data-reveal>
  <h2>Agregar Proveedor</h2>
  <form action="{{$uri}}/guarda" method="post" name="FormularioAgrega" id="FormularioAgrega" >

        <div class="row">
          <div class="large-12 columns">
            <label>Nombre de la empresa
              <input type="text" id="empresa" name="empresa" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>
           <div class="large-12 columns">
            <label>Nombre del representante
              <input type="text" id="nombre" name="nombre" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>
           <div class="large-12 columns">
            <label>RFC
              <input type="text" id="rfc" name="rfc" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>

          <div class="large-12 columns">
            <label>Pais
              <input type="text" id="pais" name="pais" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>

          <div class="large-12 columns">
            <label>Estado
              <input type="text" id="estado" name="estado" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>


          <div class="large-12 columns">
            <label>Ciudad
              <input type="text" id="ciudad" name="ciudad" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>


          <div class="large-12 columns">
            <label>CP
              <input type="text" id="codigo_postal" name="codigo_postal" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>

          <div class="large-12 columns">
            <label>Colonia
              <input type="text" id="colonia" name="colonia" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>

          <div class="large-12 columns">
            <label>Calle
              <input type="text" id="calle" name="calle" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>
          <div class="large-12 columns">
            <label>telefono
              <input type="text" id="telefono" name="telefono" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>

          <div class="large-12 columns">
            <label>email
              <input type="text" id="email" name="email" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>
          
          <div class="large-12 columns">
            <label>Activo
              <input type="text" id="activo" name="activo" placeholder="Escribe Tipo Unidad" required />
            </label>
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
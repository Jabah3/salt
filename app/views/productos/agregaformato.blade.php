
<?php $uri = Request::path(); ?> 


<div id="ModalAgrega" class="reveal-modal" data-reveal>
  <h2>Agregar Sucursal</h2>
  <form action="{{$uri}}/guarda" method="post" name="FormularioAgrega" id="FormularioAgrega" >

        <div class="row">
          <div class="large-12 columns">
            <label>Nombre
              <input type="text" id="nombre" name="nombre" placeholder="Escribe El Nombre" required />
            </label>
          </div>
        </div>




        <div class="row">
          <div class="large-12 columns">
            <label>codigo_barra
              <input type="text" id="codigo_barra" name="codigo_barra" placeholder="Escribe Codigo de Barra" required />
            </label>
          </div>
        </div>


        <div class="row">
          <div class="large-12 columns">
            <label>Precio de Venta
              <input type="text" id="precio_venta" name="precio_venta" placeholder="Escribe Precio de venta" required />
            </label>
          </div>
        </div>






        <div class="row">
          <div class="large-12 columns">
            <label>Marca
              <input type="text" id="marca" name="marca" placeholder="Escribe la Marca" required />
            </label>
          </div>
        </div>


        <div class="row">
          <div class="large-12 columns">
            <label>Stock Minimo
              <input type="text" id="stock_minimo" name="stock_minimo" placeholder="Escribe Stock Minimo" required />
            </label>
          </div>
        </div>



        <div class="row">
          <div class="large-12 columns">
            <label>Stock Maximo
              <input type="text" id="stock_maximo" name="stock_maximo" placeholder="Escribe Stock Maximo" required />
            </label>
          </div>
        </div>


        <div class="row">
          <div class="large-12 columns">
            <label>Codigo
              <input type="text" id="codigo" name="codigo" placeholder="Escribe el Codigo" required />
            </label>
          </div>
        </div>


        <div class="row">
          <div class="large-12 columns">
            <label>iva
              <input type="text" id="iva" name="iva" placeholder="Escribe El IVA" required />
            </label>
          </div>
        </div>


        <div class="row">
          <div class="large-12 columns">
            <label>Caducidad
              <input type="text" id="caducidad" name="caducidad" placeholder="Escribe la Caducidad" required />
            </label>
          </div>
        </div>



        <div class="row">
          <div class="large-12 columns">
            <label>Unidad de medidas
              <input type="text" id="unidad_medidas_id" name="unidad_medidas_id" placeholder="Escribe Unidad de Medida" required />
            </label>
          </div>
        </div>


        <div class="row">
          <div class="large-12 columns">
            <label>Categoria
              <input type="text" id="categoria_id" name="categoria_id" placeholder="Escribe la Categoria" required />
            </label>
          </div>
        </div>

        <div class="row">
          <div class="large-12 columns">
            <label>Imagen
              <!--<input type="text" id="imagen" name="imagen" placeholder="Escribe Tipo Unidad" required />-->
              <input type="file" id="imagen" name="imagen" placeholder="Imagen">
            </label>
          </div>
        </div>



        <div class="row">
          <div class="large-12 columns">
            <label>provedor
              <input type="text" id="proveedores_id" name="proveedores_id" placeholder="Escribe Tipo Unidad" required />
            </label>
          </div>
        </div>

        <div class="row">
          <div class="large-12 columns">
            <label>Descripción
              <textarea name="descripcion" id="descripcion" placeholder="Descripcion del Producto"></textarea>
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


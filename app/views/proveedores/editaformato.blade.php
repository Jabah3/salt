<div id='ModalEdita' class='reveal-modal' data-reveal>
@if($proveedor)
  @foreach($proveedor as $value)
                <h2>Edita Rol</h2>
                <form action='{{$uri}}/guardaedicion' method='post' name='FormularioGuardaEdicion' id='FormularioGuardaEdicion' >
                <input type='hidden' name='id' id='id' value='{{$value->id}}'/>
{{$value}}
        <div class="row">
          <div class="large-12 columns">
            <label>Nombre de la empresa
              <input type="text" id="empresa" name="empresa" value='{{$value->empresa}}' placeholder="Escribe Nombre de la empresa" required />
            </label>
          </div>
           <div class="large-12 columns">
            <label>Nombre del representante
              <input type="text" id="nombre" name="nombre" value='{{$value->nombre}}' placeholder="Escribe Nombre del Representante" required />
            </label>
          </div>
           <div class="large-12 columns">
            <label>RFC
              <input type="text" id="rfc" name="rfc" value='{{$value->rfc}}' placeholder="Escribe RFC" required />
            </label>
          </div>

          <div class="large-12 columns">
            <label>Pais
              <input type="text" id="pais" name="pais" value='{{$value->pais}}' placeholder="Escribe pais" required />
            </label>
          </div>

          <div class="large-12 columns">
            <label>Estado
              <input type="text" id="estado" name="estado" value='{{$value->estado}}' placeholder="Escribe Estado" required />
            </label>
          </div>


          <div class="large-12 columns">
            <label>Ciudad
              <input type="text" id="ciudad" name="ciudad" value='{{$value->ciudad}}' placeholder="Escribe Ciudad" required />
            </label>
          </div>


          <div class="large-12 columns">
            <label>CP
              <input type="text" id="codigo_postal" name="codigo_postal" value='{{$value->codigo_postal}}' placeholder="Escribe Codigo postal" required />
            </label>
          </div>

          <div class="large-12 columns">
            <label>Colonia
              <input type="text" id="colonia" name="colonia" value='{{$value->colonia}}' placeholder="Escribe Colonia" required />
            </label>
          </div>

          <div class="large-12 columns">
            <label>Calle
              <input type="text" id="calle" name="calle" value='{{$value->calle}}' placeholder="Escribe calle" required />
            </label>
          </div>
          <div class="large-12 columns">
            <label>telefono
              <input type="text" id="telefono" name="telefono" value='{{$value->calle}}' placeholder="Escribe telefono" required />
            </label>
          </div>

          <div class="large-12 columns">
            <label>email
              <input type="text" id="email" name="email" value='{{$value->email}}' placeholder="Escribe email" required />
            </label>
          </div>
          
          <div class="large-12 columns">
            <label>Activo
              <input type="text" id="activo" name="activo" value='{{$value->activo}}' placeholder="Escribe Activo" required />
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
                  <a class='close-reveal-modal'>&#215;</a>
              </div>

  @endforeach

@endif 
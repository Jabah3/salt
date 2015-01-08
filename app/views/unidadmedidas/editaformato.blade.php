@if($unidadmedida)
  @foreach($unidadmedida as $value)

<div id='ModalEdita' class='reveal-modal' data-reveal>
                <h2>Edita Rol</h2>
                <form action='{{$uri}}/guardaedicion' method='post' name='FormularioGuardaEdicion' id='FormularioGuardaEdicion' >
                <input type='hidden' name='id' id='id' value='{{$value->id}}'/>
                      <div class='row'>
                        <div class='large-12 columns'>
                          <label>Tipo Unidad
                            <input type='text' id='tipo' name='tipo' value='{{$value->tipo_unidad}}' placeholder='Escribe el nombre del Rol' required/>
                          </label>
                        </div>
                      </div>

                      <div class='row'>
                        <div class='large-12 columns'>
                          <label>Unidad Medida
                            <input type='text' name='medida' id='medida' placeholder='Escribre una Descripcion del rol' value="{{$value->unidad_medida}}"/>
                          </label>
                        </div>
                      </div>

                      <div class='row'>
                        <div class='large-12 columns'>
                          <label>Descripción
                            <textarea name='descripcion' id='descripcion' placeholder='Escribre una Descripcion del rol'>{{$value->descripcion}}</textarea>
                          </label>
                        </div>
                      </div>



                  <div class='row'>
                        <div class='large-4 columns'>
                        </div>

                        <div class='large-4 columns'>
                        </div>

                        <div class='large-4 columns'>
                        <input type='submit' value='Guardar' class='button succes expand'>
                        </div>
                      </div>
                  </form>
                  <a class='close-reveal-modal'>&#215;</a>
              </div>

  @endforeach

@endif            
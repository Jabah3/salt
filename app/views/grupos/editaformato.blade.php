@if($grupo)
  @foreach($grupo as $value)
<div id='ModalEdita' class='reveal-modal' data-reveal>
                <h2>Edita Rol</h2>
                <form action='{{$uri}}/guardaedicion' method='post' name='FormularioGuardaEdicion' id='FormularioGuardaEdicion' >
                <input type='hidden' name='id' id='id' value='{{$value->id}}'/>
                      <div class='row'>
                        <div class='large-12 columns'>
                          <label>Nombre
                            <input type='text' id='nombre' name='nombre' value='{{$value->nombre}}' placeholder='Escribe el nombre del Rol' required>
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
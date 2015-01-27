@if($sucursales)
  @foreach($sucursales as $value)




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
                          <label>ciudad
                            <input type='text' id='ciudad' name='ciudad' value='{{$value->ciudad}}' placeholder='Escribe el nombre del Rol' required>
                          </label>
                        </div>
                      </div>



                      <div class='row'>
                        <div class='large-12 columns'>
                          <label>calle
                            <input type='text' id='calle' name='calle' value='{{$value->calle}}' placeholder='Escribe el nombre del Rol' required>
                          </label>
                        </div>
                      </div>


                      <div class='row'>
                        <div class='large-12 columns'>
                          <label>colonia
                            <input type='text' id='colonia' name='colonia' value='{{$value->colonia}}' placeholder='Escribe el nombre del Rol' required>
                          </label>
                        </div>
                      </div>



                      <div class='row'>
                        <div class='large-12 columns'>
                          <label>giro
                            <input type='text' id='giro' name='giro' value='{{$value->giro}}' placeholder='Escribe el nombre del Rol' required>
                          </label>
                        </div>
                      </div>

                      <div class='row'>
                        <div class='large-12 columns'>
                          <label>rfc
                            <input type='text' id='rfc' name='rfc' value='{{$value->rfc}}' placeholder='Escribe el nombre del Rol' required>
                          </label>
                        </div>
                      </div>

                      <div class='row'>
                        <div class='large-12 columns'>
                          <label>mensaje_sucursal
                            <input type='text' id='mensaje_sucursal' name='mensaje_sucursal' value='{{$value->mensaje_sucursal}}' placeholder='Escribe el nombre del Rol' required>
                          </label>
                        </div>
                      </div>


                      <div class='row'>
                        <div class='large-12 columns'>
                          <label>pagina_web
                            <input type='text' id='pagina_web' name='pagina_web' value='{{$value->pagina_web}}' placeholder='Escribe el nombre del Rol' required>
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
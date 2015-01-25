@if($clientes)
  @foreach($clientes as $value)
<div id='ModalEdita' class='reveal-modal' data-reveal>
                <h2>Edita Cliente</h2>
                <form action='{{$uri}}/guardaedicion' method='post' name='FormularioGuardaEdicion' id='FormularioGuardaEdicion' >
                <input type='hidden' name='id' id='id' value='{{$value->id}}'/>
                      
                      <div class='row'>
                        <div class='large-12 columns'>
                          <label>Nombres
                            <input type='text' id='nombres' name='nombres' value='{{$value->nombres}}' placeholder='Escribe el nombre del Rol' required>
                          </label>
                        </div>
                      </div>


                      <div class='row'>
                        <div class='large-12 columns'>
                          <label>Apellidos
                            <input type='text' id='apellidos' name='apellidos' value='{{$value->apellidos}}' placeholder='Escribe el nombre del Rol' required>
                          </label>
                        </div>
                      </div>


                      <div class='row'>
                        <div class='large-12 columns'>
                          <label>Telefono
                            <input type='text' id='telefono' name='telefono' value='{{$value->telefono}}' placeholder='Escribe el nombre del Rol' required>
                          </label>
                        </div>
                      </div>


                      <div class='row'>
                        <div class='large-12 columns'>
                          <label>Email
                            <input type='text' id='email' name='email' value='{{$value->email}}' placeholder='Escribe el nombre del Rol' required>
                          </label>
                        </div>
                      </div>


                      <div class='row'>
                        <div class='large-12 columns'>
                          <label>Calle
                            <input type='text' id='calle' name='calle' value='{{$value->calle}}' placeholder='Escribe el nombre del Rol' required>
                          </label>
                        </div>
                      </div>

                      <div class='row'>
                        <div class='large-12 columns'>
                          <label>Ciudad
                            <input type='text' id='ciudad' name='ciudad' value='{{$value->ciudad}}' placeholder='Escribe el nombre del Rol' required>
                          </label>
                        </div>
                      </div>

                      <div class='row'>
                        <div class='large-12 columns'>
                          <label>Estado
                            <input type='text' id='estado' name='estado' value='{{$value->estado}}' placeholder='Escribe el nombre del Rol' required>
                          </label>
                        </div>
                      </div>



                      <div class='row'>
                        <div class='large-12 columns'>
                          <label>Sexo
                            <select id="sexo" name="sexo"  required>
                              <option value="M" @if(($value->sexo)=="M") selected @endif>Masculino</option>  
                              <option value="F" @if(($value->sexo)=="F") selected @endif>Femenino</option>               
                            </select> 
                          </label>
                        </div>
                      </div>

                      <div class='row'>
                        <div class='large-12 columns'>
                          <label>Foto
                            <input type='text' id='foto' name='foto' value='{{$value->foto}}' placeholder='Escribe el nombre del Rol' required>
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
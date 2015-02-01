@if($usuarios)
  @foreach($usuarios as $value)




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
                          <label>apellido
                            <input type='text' id='apellido' name='apellido' value='{{$value->apellido}}' placeholder='Escribe el apellido' required>
                          </label>
                        </div>
                      </div>

<!--
                      <div class='row'>
                        <div class='large-12 columns'>
                          <label>Contraseña
                            <input type='password' id='contrasena' name='contrasena' value='{{$value->contrasena}}' placeholder='Escribe el apellido' required>
                          </label>
                        </div>
                      </div>-->


                      <div class="row">
                        <div class="large-12 columns">
                          <label>Rol
                          @if($roles)
                            <select id="rol_id" name="rol_id" required>
                              <option></option>
                              @foreach($roles as $rol)
                                <option value="{{$rol->id}}" @if(($rol->id)==($value->rol_id)) selected @endif>{{$rol->nombre}}</option>  
                              @endforeach
                            </select> 
                          @endif
                          </label>
                        </div>
                      </div>


                      <div class="row">
                        <div class="large-12 columns">
                          <label>Sucursal
                          @if($sucursales)
                            <select id="sucursal_id" name="sucursal_id" required>
                              <option></option>
                              @foreach($sucursales as $sucursal)
                              <option value="{{$sucursal->id}}" @if(($sucursal->id)==($value->sucursal_id)) selected @endif>{{$sucursal->nombre}}</option>                
                              @endforeach
                            </select> 
                          @endif
                          </label>
                        </div>
                      </div>



                      <div class="row">
                        <div class="large-12 columns">
                          <label>Ciudad
                            <input type="text" id="ciudad" name="ciudad" placeholder="Escribe Tipo Unidad" value='{{$value->ciudad}}' required />
                          </label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="large-12 columns">
                          <label>Telefono
                            <input type="text" id="telefono" name="telefono" value='{{$value->telefono}}' placeholder="Escribe Tipo Unidad" required />
                          </label>
                        </div>
                      </div>


                      <div class="row">
                        <div class="large-12 columns">
                          <label>Email
                            <input type="text" id="email" name="email" value='{{$value->email}}' placeholder="Escribe Tipo Unidad" required />
                          </label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="large-12 columns">
                          <label>Grupo
                          @if($grupos)
                            <select id="grupo_id" name="grupo_id"  required>
                              <option></option>
                              @foreach($grupos as $grupo)
                              <option value="{{$grupo->id}}" @if(($grupo->id)==($value->grupo_id)) selected @endif>{{$grupo->nombre}}</option>                
                              @endforeach
                            </select> 
                          @endif
                          </label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="large-12 columns">
                          <label>Estado
                            <input type="text" id="estado" name="estado" value='{{$value->estado}}' placeholder="Escribe Tipo estado" required />
                          </label>
                        </div>
                      </div>



                      <div class="row">
                        <div class="large-12 columns">
                          <label>Sexo
                            <select id="sexo" name="sexo"  required>
                              <option value="M" @if(($value->sexo)=="M") selected @endif>Masculino</option>  
                              <option value="F" @if(($value->sexo)=="F") selected @endif>Femenino</option>               
                            </select> 

                          </label>
                        </div>
                      </div>

<!--
                      <div class="row">
                        <div class="large-12 columns">
                          <label>Foto
                          <input type="file" name="foto" id="foto" value="{{$value->foto}}" value="asdas">
                            
                            <img width="30" src="img/{{$value->foto}}"/>
                          </label>
                        </div>
                      </div>-->


                      <div class="row">
                        <div class="large-12 columns">
                          <label>Descripción
                            <textarea name="descripcion" id="descripcion" placeholder="Escribre una Descripcion del rol">{{$value->descripcion}}</textarea>
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
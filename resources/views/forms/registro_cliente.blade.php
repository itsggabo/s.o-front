@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
                <div class="z-depth-3">
                    <div class="panel-heading"><h3>Registro cliente</h3></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                       
                        
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <h6>Por favor corriga los siguientes errores:</h6>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div> 
                        @endif
                        
                        <form method="POST" action="{{ url('usuarios') }}">
                            {{ csrf_field() }}
                            <br>


                            <div class="form-row">

                                <!--<div class="form-group input-field col s12">
                                    <select>
                                      <option value="" disabled selected>Choose your option</option>
                                      <option value="1">Option 1</option>
                                      <option value="2">Option 2</option>
                                      <option value="3">Option 3</option>
                                    </select>
                                    <label>Materialize Select</label>
                                  </div>-->

                                <div class="input-field col-md-6">
                                    <select name="select_doc_type">
                                        <option value="" disabled selected>Tipo de documento</option>
                                        <option value="cc">Cédula</option>   
                                        <option value="passport">Pasaporte</option>            
                                        <option value="nit">NIT</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="in_doc_type" id="in_doc_type" placeholder="Numero">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="in_fname">Nombres</label>
                                    <input type="text" class="form-control" name="in_fname" id="in_fname" placeholder="Juan">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="in_lname">Apellidos</label>
                                    <input type="text" class="form-control " name="in_lname" id="in_lname" placeholder="Perez">
                                </div>
                            </div>
                            
                            <div class="form-row">  
                                    <div class="col-md-1"></div>
                                        <label>Sexo</label> 
                                    </div>
                                    <div class="col-md-2">
                                        <p>                                            
                                           <input class="with-gap" type="radio" name="in_gender" value="rb_male"/>
                                           <span>Masculino</span>                                            
                                        </p> 
                                    </div>
                                    <div class="col-md-2">
                                        <p>
                                            <label>
                                               <input class="with-gap" type="radio" name="in_gender" value="rb_female"/>
                                               <span>Femenino</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="col-md-2">
                                        <p>
                                            <label>
                                               <input class="with-gap" type="radio" name="in_gender" value="rb_other"/>
                                               <span>Otro</span>
                                            </label>
                                        </p>
                                    </div>
                                    <div class="divider"></div>
                                
                            </div>                                
                            
                            
                            <div class="form-row">  
                                <div class="form-group col-md-6">
                                    <label for="in_city">Ciudad</label>
                                    <input class="form-control" type="text" class="form-control" name="in_city" id="in_city" placeholder="Barrancabermeja">
                                </div>                          
                                <div class="form-group col-md-6">
                                    <label for="in_region">Región</label>
                                    <input class="form-control" type="text" class="form-control" name="in_region" id="in_region" placeholder="Santander">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="in_address">Dirección </label>
                                    <input class="form-control" type="text" name="in_address" id="in_address" placeholder="Calle 10">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="in_nhood">Barrio </label>
                                    <input class="form-control" type="text" name="in_nhood" id="in_nhood" placeholder="Galán">  
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="in_house_type">Tipo de residencia </label>
                                    <input class="form-control" type="text" name="in_house_type" id="in_house_type" placeholder="Edificio">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="in_email">Correo </label>
                                    <input class="form-control" type="email" name="in_email" id="in_email" placeholder="juan@example.com" value="{{ old('email') }}">  
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="in_tel">Telefono </label>
                                    <input class="form-control" type="text" name="in_tel" id="in_tel" placeholder="Numero"> 
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                     <button type="submit" class="btn btn-danger ">Cancelar</button>
                                </div>
                                <div class="form-group col-md-6">
                                    <button type="submit" class="btn btn-success ">Crear cliente</button>
                                </div>
                            </div>  
                        </form>                     
                    </div>
                </div>
            </div>
        </div>
        </div>
    
@endsection

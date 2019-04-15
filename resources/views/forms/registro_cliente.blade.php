@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col s12 m10 l10 xl8 offset-m1 offset-l1 offset-xl2">
            <div class="card-panel white"> 
                
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
                    
                <form method="POST" action="">
                    {{ csrf_field() }}

                    <h4>Registro cliente</h4>
                    <div class="divider"></div><br>

                    <div class="row">
                        <div class="col s12 m6">
                            <div class="input-field">                                
                                <select name="select_doc_type">
                                    <option value="" disabled selected>Tipo de documento</option>
                                    <option value="cc">Cédula</option>   
                                    <option value="passport">Pasaporte</option>            
                                    <option value="nit">NIT</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-field col s12 m6">                            
                            <input type="text" class="validate" name="in_doc_type" id="in_doc_type" >
                            <label for="in_doc_type">Identificación</label>
                        </div> 
                        <div class="input-field col s12 m6">                            
                            <input type="text" class="validate" name="in_fname" id="in_fname" >
                            <label for="in_fname">Nombres</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <input type="text" class="validate" name="in_lname" id="in_lname" >
                            <label for="in_lname">Apellidos</label>
                        </div> 
                        <div class="col s12 m6">
                                <label class="col s12">Sexo</label>

                                <label class="col s12 l4">
                                    <input class="with-gap" type="radio" name="in_gender" value="rb_male"/>
                                    <span>Masculino</span>                                             
                                </label>  
                            
                                <label class="col s12 l4">
                                   <input class="with-gap" type="radio" name="in_gender" value="rb_female"/>
                                   <span>Femenino</span>
                                </label>
                            
                                <label class="col s12 l4">
                                   <input class="with-gap" type="radio" name="in_gender" value="rb_other"/>
                                   <span>Otro</span>
                                </label>                           
                        </div>
                        <div class="input-field col s12 m6 l3">                            
                            <label for="in_city">Ciudad</label>
                            <input class="form-control" type="text" class="form-control" name="in_city" id="in_city"> 
                        </div>  
                        <div class="input-field col s12 m6 l3" >
                            <label for="in_region">Región</label>
                            <input class="form-control" type="text" class="form-control" name="in_region" id="in_region">
                        </div>
                        <div class="input-field col s12 l6">
                            <label for="in_address">Dirección </label>
                            <input class="form-control" type="text" name="in_address" id="in_address">
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <label for="in_nhood">Barrio </label>
                            <input class="form-control" type="text" name="in_nhood" id="in_nhood">
                        </div>
                        <div class="input-field col s12 m6 l3">
                             <label for="in_house_type">Tipo de residencia </label>
                            <input class="form-control" type="text" name="in_house_type" id="in_house_type">
                        </div>
                        <div class="input-field col s12 m6">
                            <label for="in_email">Correo eléctronico</label>
                            <input class="form-control" type="email" name="in_email" id="in_email" value="{{ old('email') }}">  
                        </div>
                        <div class="input-field col s12 m6">
                            <label for="in_tel">Telefono </label>
                            <input class="form-control" type="text" name="in_tel" id="in_tel"> 
                        </div>

                        <div class="divider"></div>

                        <div class="col s6 ">
                            <button type="button" class="btn btn-danger red darken-3 waves-effect waves-light">Cancelar
                                <i class="material-icons left">navigate_before</i>
                            </button>
                        </div>
                        <div class="col s6">
                            <button type="submit" class="btn btn-success  green darken-3 waves-effect waves-light">Crear cliente
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>  
            </div>
        </div>
    </div>    
@endsection

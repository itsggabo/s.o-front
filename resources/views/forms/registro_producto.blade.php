@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
                <div class="z-depth-4">
                    <div class="panel-heading"><h3>Registro de repuestos<h3></div>

                    <div class="divider "></div>

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
                        
                        <form method="POST" action="{{ url('porductos') }}">
                            {{ csrf_field() }}

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="in_product_type"><h5><b>Tipo</b></h5></label>
                                    <input type="text" class="form-control" name="in_product_type" id="in_product_type" placeholder="Control remoto">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="in_mark"><h5><b>Marca</b></h5></label>
                                    <input type="text" class="form-control " name="in_mark" id="in_mark" placeholder="LG">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="in_model"><h5><b>Modelo</b></h5></label>
                                    <input type="text" class="form-control " name="in_model" id="in_model" placeholder="Modelo S">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="in_serie"><h5><b>Serie</b></h5></label>
                                    <input type="text" class="form-control " name="in_serie" id="in_serie" placeholder="W56258F58">
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="in_imei1"><h5><b>Imei 1</b></h5></label>
                                    <input class="form-control" type="text" name="in_imei1" id="in_imei1" placeholder="Número (Opcional)">
                                </div>
                                <div class="form-group col-md-3">
                                	<label for="in_imei2"><h5><b>Imei 2</b></h5></label>
                                    <input class="form-control" type="text" name="in_imei2" id="in_imei2" placeholder="Número (Opcional)">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="in_store"><h5><b>Almacén de compra</b></h5></label>
                                    <input class="form-control" type="text" class="form-control" name="in_store" id="in_store" placeholder="Nombre del almacén">
                                </div>
                            </div>
                                
                            <div class="form-row">                            
                                <div class="form-group col-md-3">
                                    <label for="in_date"><h5><b>Fecha de compra</b></h5></label>
                                    <input class="form-control" type="date" class="form-control" name="dt_date" id="in_date" placeholder="6/06/2016">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="in_fact"><h5><b>Factura de compra</b></h5></label>
                                    <input class="form-control" type="text" name="in_fact" id="in_fact" placeholder="Número">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="in_warranty"><h5><b>Certificado de garantía</b></h5></label>
                                    <input class="form-control" type="text" name="in_warranty" id="in_warranty" placeholder="Número">  
                                </div>
                            </div>
                            
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                     <button type="submit" class="btn btn-danger ">Cancelar</button>
                                </div>
                                <div class="form-group col-md-6">
                                    <button type="submit" class="btn purple lighten-1 ilike-blue-container">Crear cliente</button>
                                </div>
                            </div>  
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
        </div>
    
@endsection

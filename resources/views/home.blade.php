@extends('layouts.app')

@section('content')
    
    <div class="container">

<!-------------------------------------------------------------------------------------->
<!--<nav class="navbar navbar-default" role="navigation">
  El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#acoplar">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> 
            <a href="#" class="navbar-brand">Operacion Sistemica</a>
        </div>

        <div class="collapse navbar-collapse" id="acoplar">
            <ul class="nav navbar-nav">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Clientes <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown-submenu">Consultar <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li><a href="#">Cedula cliente</a></li>
                                <li><a href="#">Codigo cliente</a></li>
                                <li><a href="#">Codigo producto</a></li>
                                <li><a href="#">Codigo radicado</a></li>
                                <li><a href="#">Telefono</a></li>
                                <li><a href="#">Barrio</a></li>
                                <li><a href="#">Ciudad</a></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#">Modificar</a></li>
                        <li><a href="#">Ingresar nuevo cliente</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-briefcase"></span> Equipos <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        
                        <li><a href="#">Consultar producto especifico</a></li>
                        <li><a href="#">Nuevo orden de servicio cliente</a></li>
                        <li><a href="#">Imprimir orden de servicio</a></li>
                        <li><a href="#">Retorno de producto</a></li>
                        <li class="divider"></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown-submenu">Consultar productos <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li><a href="#">Marca</a></li>
                                <li><a href="#">Modelo</a></li>
                                <li><a href="#">Serie</a></li>
                                <li><a href="#">Todo</a></li>
                                <li><a href="#">Garantia</a></li>
                                <li><a href="#">Fuera de garantia</a></li>
                                <li><a href="#">Garantia a domicilio</a></li>
                                <li><a href="#">Fuera de garantia a domicilio</a></li>
                            </ul>                            
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-align-left"></span> Repuestos e inventario <b class="caret"></b></a>
                    <ul class="dropdown-menu">                        
                        <li><a href="#">Consultar numero de parte</a></li>
                        <li><a href="#">Consultar factura</a></li>
                        <li><a href="#">Consultar inventario existentes</a></li>
                        <li><a href="#">Ingresar factura</a></li>
                        <li><a href="#">Ingresar productos al inventario</a></li>
                        <li><a href="#">Modificar el inventario</a></li>
                        <li><a href="#">Modificar factura</a></li>
                    </ul>
                </li>

                <!--el siguiente if se utiliza para mostrar esta pestaña solo si el jefe inicia sesion
                    pdta: quitar la clase "disabled" de la etiqueta "li"-->
                @if (session('boss'))
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-lock"></span> Administracion <b class="caret"></b></a>
                    <ul class="dropdown-menu">                        
                        <li><a href="#">Asignacion de usuarios al sistema</a></li>
                        <li><a href="#">Modificar usuarios del sistema</a></li>
                        <li><a href="#">Ingreso de tecnicos</a></li>
                        <li><a href="#">Modificar tecnicos</a></li>
                    </ul>
                </li>
                @endif

                <!--el siguiente if se utiliza para mostrar esta pestaña solo si el jefe o el admin inicia sesion
                    pdta: quitar la clase "disabled" de la etiqueta "li"-->
                @if (session('boss') || session('admin'))
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-signal"></span> Reportes <b class="caret"></b></a>
                    <ul class="dropdown-menu">                        
                        <li><a href="#">Informe de producción fuera de garantía mensual</a></li>
                        <li><a href="#">Informe de producción fuera de garantía entre fechas</a></li>
                        <li><a href="#">Informe de producción en garantía mensual</a></li>
                        <li><a href="#">Informe de producción en garantía entre fechas</a></li>
                        <li><a href="#">Informe de producción por técnico</a></li>
                        <li><a href="#">Informe de producción por marca entre fechas</a></li>
                        <li><a href="#">Informe de reparaciones por cliente</a></li>
                        <li><a href="#">Informe de reparaciones historica de un producto</a></li>
                        <li><a href="#">Informe de repuestos más usados</a></li>
                    </ul>
                </li>
                @endif

                <!--el siguiente if se utiliza para mostrar esta pestaña solo si el jefe o el admin inicia sesion
                    pdta: quitar la clase "disabled" de la etiqueta "li"-->
                @if (session('boss') || session('admin'))
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span> Consultas <b class="caret"></b></a>
                    <ul class="dropdown-menu">                        
                        <li><a href="#">Búsqueda de reparaciones por numero de parte</a></li>
                        <li><a href="#">Búsqueda de reparaciones por numero de factura de la parte</a></li>
                        <li><a href="#">Búsqueda por pedazo de serie</a></li>
                        <li><a href="#">Búsqueda por numero de radicado</a></li>
                    </ul>
                </li>
                @endif

                <!--el siguiente if se utiliza para mostrar esta pestaña solo si el jefe o el admin inicia sesion
                    pdta: quitar la clase "disabled" de la etiqueta "li"-->
                @if (session('boss') || session('admin'))
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span> Seguimiento de ordenes  <b class="caret"></b></a>
                    <ul class="dropdown-menu">                        
                        <li><a href="#">Pendiente por visitar</a></li>
                        <li><a href="#">Pendiente por llegada de repuesto</a></li>
                        <li><a href="#">Pendiente por cotizar</a></li>
                        <li><a href="#">Pendiente por llamar</a></li>
                        <li><a href="#">Ley 1480</a></li>
                        <li><a href="#">Autorizado y pendiente por reparar  </a></li>
                        <li><a href="#">Próximos a vencer con fecha convenida con cliente</a></li>
                    </ul>
                </li>
                @endif

                <!--el siguiente if se utiliza para mostrar esta pestaña solo si el jefe inicia sesion
                    pdta: quitar la clase "disabled" de la etiqueta "li"-->
                @if (session('boss'))
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-usd"></span> Nomina <b class="caret"></b></a>
                    <ul class="dropdown-menu">                        
                        <li><a href="#">Informe de produccion global</a></li>
                        <li><a href="#">Informe de ganancias</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown-submenu">Consultar productos <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                <li><a href="#">Empleados por pocentaje</a></li>
                                <li><a href="#">empleados con sueldo o cargo fijo</a></li>
                            </ul> 
                        </li>
                    </ul>
                </li>
                @endif

            </ul>
        </div>
    </div>
</nav>

<div class="panel-body">
        
</div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">                

                <div class="panel-heading">Inicio</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Has iniciado sesión correctamente!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

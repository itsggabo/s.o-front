<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <!--Let browser know website is optimized for mobile-->    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  
    
    <!--<link href="https://fonts.google.com/specimen/Roboto+Slab?selection.family=Roboto+Slab" rel="stylesheet">-->
    <!--font-family: 'Roboto Slab', serif; -->
    <!--font-family: 'Palanquin Dark', sans-serif;-->
    <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="font-family: 'Palanquin Dark', sans-serif;" class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns"  >

    

      
          

    








        

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}">
        

    </script>

    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>

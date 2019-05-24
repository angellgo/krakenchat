    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    <link rel="icon" href="{{ asset('ico/icono.png') }}">

    <!--  Scripts-->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script>
    <script src="{{asset('js/sweetalert2.all.min.js')}}"></script>

    <!--Fontawesome CDN-->
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  
    <meta name="csrf-token" content="{{ csrf_token() }}">


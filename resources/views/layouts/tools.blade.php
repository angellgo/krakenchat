    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
   


    <!--  Scripts-->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script>    
    <script>
            $(document).ready(function($){
                $("#hamburguesita").click(function(){
                    var ventana_ancho = $(window).width();
                    //var ventana_alto = $(window).height();
                        if (ventana_ancho < 1024) 
                            $("#barra-navegacion").removeClass("navbar-fixed");
                    });  
                });    
           
    </script>
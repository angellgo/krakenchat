

<div class="navbar-fixed" id="barra-navegacion">  
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            
            <a id="logo-container" href="{{asset('')}}" class="brand-logo"> <img src="{{asset('ico/logoarch.png')}}" class="responsive-img" alt="Kraken Chat" style="max-width:160px">  <a>
            <ul class="right hide-on-med-and-down">
                
                <li><a href="{{route('user.register')}}">Registrarse</a></li>
                <li><a href="{{asset('/login')}}" >Iniciar Sesión</a></li>
               
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="{{route('user.register')}}">Registrarse</a></li>
                <li><a href="{{asset('/login')}}" >Iniciar Sesión</a></li>
            </ul>
            <a  data-target="nav-mobile" class="sidenav-trigger" id="hamburguesita"><i class="material-icons">menu</i></a> 


        </div>
    </nav>
</div>    
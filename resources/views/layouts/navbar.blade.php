   
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="/" class="brand-logo"> <img src="{{asset('images/krakenlogo2.png')}}" width="110px" height="50px"> </a>
        <ul class="right hide-on-med-and-down">
        <li> <a href="{{route('user.login')}}"> Iniciar Sesión </a></li>

        <li> <a href="#"></a> Registrarse </li>

        </ul>
       
        <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Iniciar Sesión</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>

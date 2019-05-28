@include('layouts.tools')
@extends('layouts.chat')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil de Usuario</title>
</head>
<body>
        <ul id="dropdown1" class="dropdown-content ">
 
                <li><a href="{{route('user.profile')}}" target="_blank">Perfil</a></li>
                <li><a href="#!">Configuración</a></li>
                <li class="divider"></li>
               
                <li><a href="{{route('logout')}} " onclick="event.preventDefault();
                document.getElementById('logout-form').submit()">Cerrar Sesión</a></li>
        
                <form action="{{route('logout')}}" method="post" id="logout-form">
                        {{ csrf_field() }}
                </form>
            </ul>
            <nav style="background-color: white">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo white-text"></a>
                    <ul class="right hide-on-med-and-down">
                        <!-- Dropdown Trigger -->
                        <li>
                            <a class="dropdown-trigger grey-lighten-2-text nanum-gothic" href="#!" data-target="dropdown1">
                                    {{Auth()->user()->username}}&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons right" style="font-size:35px">more_vert</i>
                        </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <div class="row" style="margin-top:35px">
                    <div class="card z-depth-3 col m12 s12">
                        <div class="card-content">
                            <div class="col m6 s12">
                                <div class="row left-align">
                                    <img src="{{asset('images/profile.png')}}" width="100px"> <br>
                                    <h4>{{$user -> nombre}} {{$user -> apellidos}}</h4>
                                    {{$user -> username}} <br>
                                                              
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
    
</body>
</html>
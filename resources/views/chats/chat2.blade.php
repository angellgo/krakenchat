@extends('layouts.chat')   

@section('contenido')
     <!--Navbar-->
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content ">
 
            <li><a href="#!">Perfil</a></li>
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
        <!--fin de navbar-->
        <div class="container">
            <div class="row" style="margin-top: 35px;">
                <div class="card z-depth-3 col m12 s12">
                    <div class="card-content">
    
                        <!--primer columna-->
                        <div class="col m4 s12">
                            <div class="row left-align">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix ">search</i>
                                    <input type="text" id="autocomplete-input" class="autocomplete">
                                    <label for="autocomplete-input" class="nanum-gothic">Buscar</label>
                                </div>
                                <a class="waves-effect waves-teal btn-large modal-trigger col s12 " href="#modal1" style="text-align: left"><i class="material-icons left">add</i>Nuevo Chat</a>
                            </div>
                            <ul class="collection scroll">
    
                                @foreach ($contactos as $item)
                                @if ($item -> id_remitente == Auth() -> user() -> id)
                                <li class="collection-item avatar" style="border-bottom: none">
                                    <a href="{{asset('/chat/nochat/'.$item -> id)}}" style="color:#424242">
                                        <img src="{{asset('images/ronald rievest.jpg')}}" alt="" class="circle">
                                        <span class="title" style="font-weight: bolder">{{$item -> destinatario}}</span>
                                        <p class="truncate">First Line Second Linecasdasdasssssssssssssshghhhjjkhkjhgjg
                                        </p>
                                    </a>
                                </li> 
                                @else
                                <li class="collection-item avatar" style="border-bottom: none">
                                    <a href="{{asset('/chat/nochat/'.$item -> id)}}" style="color:#424242">
                                        <img src="{{asset('images/ronald rievest.jpg')}}" alt="" class="circle">
                                        <span class="title" style="font-weight: bolder">{{$item -> users -> username}}</span>
                                        <p class="truncate">First Line Second Linecasdasdasssssssssssssshghhhjjkhkjhgjg
                                        </p>
                                    </a>
                                </li>
                                @endif
                               
                                @endforeach
                         </ul>
                        </div>
                        <!--fin de primer columna-->
                        <div class="col m8">
                            <div class="card-panel grey lighten-4 z-depth-0 chat">
                       
    
                            </div>
                            <br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
        <div id="modal1" class="modal" style="max-width:750px">
            <div class="modal-content">
              
              <div class="row"><br><br>
                <div class="input-field col s12">
                 <input type="text" id="contacto" class="validate" autofocus> 
                  <label for="contacto">Nombre de Usuario</label>
                </div>
              </div> 
             
            </div>
            <div class="modal-footer">
              <button class="waves-effect waves-light btn modal-trigger" onclick="agregarcontacto()">  Agregar </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
          </div>
@endsection

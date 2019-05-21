<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro - KrakenChat</title>
    @include('layouts.tools')
    <script>      
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('select');
                var instances = M.FormSelect.init(elems, options);
            });
            $(document).ready(function() {
                $('input#input_text, textarea#textarea2').characterCounter();
                $('select').formSelect();
            });   
    </script>
</head>
<body>
    @include('layouts.navbar')
    <br><br>
    <div class="row">
        <div class="col m2"></div>
        <div class="col s12 m8 " >
            <div class="card z-depth-3">
                <div class="card-content black-text ">
                    <div class="row">
                                <div class="col m6 s12">
                                   <br>
                                    <span class="card-title"><b>Crear tu cuenta de KrakenChat</b> </span>
                                    <form class="col s12">
                                            <div class="row">

                                            <div class="input-field col s4">
                                                <input type="text" id="nombre" class="form-control" class="validate">
                                                <label for="nombre">Nombre</label>
                                            </div>

                                            <div class="input-field col s8">
                                                    <input id="apellido" type="text" class="validate">
                                                    <label for="apellido">Apellido</label>
                                            </div>

                                            <div class="input-field col s12">
                                                    <input id="username" type="text" class="validate">
                                                    <label for="username">Nombre de Usuario</label>
                                            </div>

                                            <div class="input-field col s6">
                                                    <input id="pass" type="password" class="validate">
                                                    <label for="pass">Contraseña</label>
                                            </div>
                                            <div class="input-field col s6">
                                                    <input id="pass_confirm" type="password" class="validate">
                                                    <label for="pass_confirm">Confirmar contraseña:</label>
                                            </div>

                                            <div class="input-field col s12 m12">
                                                    <select id="genero">
                                                      <option value="" disabled selected>Selecciona una opción</option>
                                                      @foreach ($genero as $item)
                                                      <option value="{{$item -> id}}"> {{$item -> genero}}</option>
                                                      @endforeach
                                                    </select>
                                                    <label>Seleccione un Género</label>
                                             
                                            </div>
    

                                            </div>
                              
                                            <div class="row">
                                                <div class="col m8"></div>
                                                <div class="input-field col s12 m4">
                                                        <a class="waves-effect waves-light btn-large  col s12 " onclick="registraruser()">Registar</a>
                                                </div>
                                            </div>
                                                            
                                    </form>
                                    
                                    

                                </div>
                                <div class="col m6 s12 center-align">
                                    <img src="{{asset('ico/shield.png')}}" class="responsive-img" style="margin-top:15% ">
                                </div>
                    </div>   
        
        
                        
                </div>
               
            </div>
        </div>
        <div class="col m2"></div>

    </div>
    @include('layouts.footer')
    
</body>
</html>

<script>
    function registraruser(){
        let route = "{{route('usuario.create')}}";
        let nombre = $("#nombre").val();
        let apellido = $("#apellido").val();
        let username = $("#username").val();
        let password = $("#pass").val();
        let pass_confirm = $("#pass_confirm").val();
        let status = 1;
        let genero = $("#genero").val();
        console.log(genero);
        if (password == pass_confirm){
            if(nombre == "" || apellido == "" || genero == 0 || password == "" || pass_confirm == ""){
                Swal.fire("Error","Verifique que no haya campos vacios","error");
            }else{
                $.ajax({
                url:route,
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type:'POST',
                datatype:'JSON',
                async:false,
                data:{nombre,apellido,username,password,status,genero:nombre,apellido,username,password,genero},
                success:function(data){
                    if(data.msg == "success"){
                        Swal.fire('Bien',"El usuario se registro de manera correcta","success");
                        setTimeout(function(){  window.location.href = "{{route('user.loginview')}}";},3000);
                      
                    }else if (data.msg == "existe"){
                        Swal.fire('Alerta',"Ese nombre de usuario ya existe","error");
                    }else{
                        Swal.fire('Ups',"Algo Salio mal","error"); 
                    }
                },
                error:function(data){
                    Swal.fire('Ups',"Algo Salio mal","error");
                }
            });
            }
            
        }else{
            Swal.fire("Alerta","Las contraseñas no coinciden","error");
            $("#pass").val("");
            $("#pass_confirm").val("");
        }
    }
</script>
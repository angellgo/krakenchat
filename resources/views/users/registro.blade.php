<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Usuario</title>
    @include('layouts.tools')
</head>
<body>
    @include('layouts.navbar')
    <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Registrar Usuario</h3> {{--
                        <div class="d-flex justify-content-end social_icon">
                            <span><i class="fab fa-facebook-square"></i></span>
                            <span><i class="fab fa-google-plus-square"></i></span>
                            <span><i class="fab fa-twitter-square"></i></span>
                        </div> --}}
                    </div>
                    <div class="card-body">
                        <form>
        
                            <div class="input-group form-group row">
                                <div class="col-md-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                                    </div>
                                    <input type="text" id="nombre" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="col-md-6">
        
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                                    </div>
                                    <input type="text" id="apellido" class="form-control" placeholder="Apellido">
                                </div>
        
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" id="username" class="form-control" placeholder="username">
        
                            </div>
        
                            <div class="input-group form-group row">
                                <div class="col-md-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" id="pass" class="form-control" placeholder="password">
                                </div>
        
                                <div class="col-md-6">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" id="pass_confirm" class="form-control" placeholder="Confirmar contraseña">
                                </div>
        
                            </div>
        
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-question"></i></span>
                                </div>
                                <select id="genero" class="form-control">
                                    <option value="0"> Seleccione un genero </option>
                                    @foreach ($genero as $item)
                                        <option value="{{$item -> id}}"> {{$item -> genero}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row align-items-center remember">
                                {{--
                                <input type="checkbox">Remember Me --}}
                            </div>
                            <div class="form-group">
                                <input type="button" value="Registrar" class="btn float-right login_btn" onclick="registrar()">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        {{--
                        <div class="d-flex justify-content-center links">
                            Don't have an account?<a href="#">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="#">Forgot your password?</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    @include('layouts.footer')
    
</body>
</html>

<script>
    function registrar(){
        let nombre = $("#nombre").val();
        let apellido = $("#apellido").val();
        let username = $("#username").val();
        let password = $("#pass").val();
        let pass_confirm = $("#pass_confirm").val();
        let status = 1;
        let genero = $("#genero").val();
        
        if (password == pass_confirm){
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
                },
                error:function(data){
                }
            });
        }else{
            alert("Las contraseñas no coinciden");
        }
    }
</script>
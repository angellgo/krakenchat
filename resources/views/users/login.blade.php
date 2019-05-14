<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Inicio de Sesión </title>
    <link rel="icon" type="img/png" href="{{asset('images/icono.png')}}">
    @include('layouts.tools')
    {{-- <link rel="stylesheet" href="{{asset('css/login.css')}}"> --}}
</head>
<body>
    @include('layouts.navbar')
    <div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Iniciar Sesion</h3>
				{{-- <div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div> --}}
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" id="username" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password"id="password" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						{{-- <input type="checkbox">Remember Me  --}}
					</div>
					<div class="form-group">
						<input type="button" value="Login" class="btn float-right login_btn" onclick="iniciar()">
					</div>
				</form>
			</div>
			<div class="card-footer">
                    {{-- <div class="d-flex justify-content-center links">
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
	function iniciar(){
		let route = "{{route('user.newsession')}}";
		let username = $("#username").val();
		let password = $("#password").val();

		$.ajax({
			url:route,
			headers:{
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			type:'POST',
			datatype:'JSON',
			async:false,
			data:{username,password:username,password},
			success:function(data){
				if(data.msg == "success"){
					Swal.fire("Exito","El usario y contraseña son correctas","success")
				}else{
					Swal.fire("Ups","EL usuario o contraseña son incorrectos","error");
					
					
				}
				
			},
			error:function(data){
			}
		});
	}

</script>

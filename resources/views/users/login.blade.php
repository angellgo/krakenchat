<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>
        
  $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
  });</script>
        <title>Login - KrakenChat</title>
        @include('layouts.tools')
    </head>
    <body>
        @include('layouts.navbar')
        <br>
        <div class="row">
            <div class="col m4"></div>
            <div class="col s12 m4 " >
                <div class="card z-depth-3">
                    <div class="card-content black-text center-align">
                        <img  src="{{asset('ico/logoarch.png')}}" class="responsive-img"  style="max-width:200px" >    
                        <br><br>
                        <span class="card-title"><b>Ingresa usuario y contraseña </b> </span>
                        <div class="row">
                                <form class="col s12">
                                        <div class="row">
                                        <div class="input-field col s12">
                                            <input id="username" type="text" class="validate">
                                            <label for="usuario">Usuario</label>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="input-field col s12">
                                            <input id="password" type="password" class="validate">
                                            <label for="password">Contraseña</label>
                                        </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="input-field col s12">
                                                    <a class="waves-effect waves-light btn-large  col s12 ">Ingresar</a>
                                            </div>
                                        </div>
                                                        
                                </form>
                        </div>   
            
            
                            
                    </div>
                   
                </div>
            </div>
            <div class="col m4"></div>

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

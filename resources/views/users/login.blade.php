<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - KrakenChat</title>
    @include('layouts.tools')
    <script>
        $(document).ready(function() {
            $('input#input_text, textarea#textarea2').characterCounter();
        });
    </script>

</head>

<body>
    @include('layouts.navbar')
    <br>
    <br>
    <div class="row">
        <div class="col m4"></div>
        <div class="col s12 m4 ">
            <div class="col m1"></div>
            <div class="card z-depth-3 col m10">
                <div class="card-content black-text center-align ">
                    <img src="{{asset('ico/logoarch.png')}}" class="responsive-img" style="max-width:200px">
                    <br>
                    <br>
                    <span class="card-title"><b>Ingresa usuario y contraseña </b> </span>
                    <div class="row">

                        
                        {{-- <form class="col s12" method="POST" action="{{route('user.login')}}" id="inicarsesion"> --}}
                        {!!Form::open(['id'=>'inicarsesion','route'=>'user.login','class'=>'col s12'])!!}

                            <div class="row" >
                                <div class="input-field col s12">
                                    <input required id="username" name="username" type="text" class="validate" value="{{old('username')}}">
                                    {!! $errors -> first('username','<span> :message </span>')!!}
                                    <label for="usuario">Usuario</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input required id="password" name="password"  type="password" class="validate">
                                    {!! $errors -> first('password','<span> :message </span>')!!}
                                    <label for="password">Contraseña</label>
                                </div>
                            </div>
                            <div class="row">

                                <div class="input-field col s12">
                                    {{-- <a class="waves-effect waves-light btn-large  col s12 ">Ingresar</a> --}}
                                    <button type="submit" >Iniciar Sesion</button>
                                </div>
                            </div>
                            {{-- {{ csrf_field() }}
                        </form> --}}

                    </div>
                </div>
            </div>
            <div class="col m1"></div>
        </div>
        <div class="col m4"></div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br> @include('layouts.footer')

</body>

</html>
<script>
    function iniciar() {
        $("#inicarsesion").submit();

    }
</script>
@include('layouts.app')
<body>
    <div class="row" style="text-align:center">
        <label for="name"> Nombre: </label>
        <input type="text" id="name" placeholder="Nombre" required="required"> <br>
        <label for="apellido"> Apellido: </label>
        <input type="text" id="apellido" placeholder="Apllido">
        <label for="genero"> Genero: </label>
        <select name="genero" id="genero">
            @foreach ($genero as $item)
                <option value="{{$item -> id}}"> {{$item -> genero}}</option>
            @endforeach
        </select>

        <input type="button" value="Regitrar" onclick="registrarusuario()">
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script>

        function registrarusuario(){
            let name = $("#name").val();
        }

    </script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat - KrakenChat</title>
    @include('layouts.tools')
    <link href="{{ asset('css/chat.css') }}" rel="stylesheet">
    <script>
        $(document).ready(function() {
            $(".dropdown-trigger").dropdown();
            //autocomplete
            $('input.autocomplete').autocomplete({
                data: {
                    "Apple": null,
                    "Microsoft": null,
                    "Google": 'https://placehold.it/250x250'
                },
            });
            $(".chat").animate({
                scrollTop: $('.chat').prop("scrollHeight")
            }, 1000);

            $('#modal1').modal();
        });
   
    </script>
</head>

<body>
@yield('contenido')
              
</body>

</html>
<script>
   
    function agregarcontacto(){
       
        let contacto = $("#contacto").val();
        console.log(contacto);
        let route = "{{route('chat.new')}}";
        $.ajax({
            url:route,
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'GET',
            datatype:'JSON',
            async:false,
            data:{contacto:contacto},
            success:function(data){
                if(data == "noexiste"){
                    Swal.fire("Error","El usuario no existe","error");
                    $("#contacto").val("");
                }else if(data.msg = "eselmismo"){
                    Swal.fire("No pudes mandarte mensajes a ti mismo","info");
                }
            },
            error:function(data){
            }
        });
    }
</script>
          
@foreach ($conversacion as $item)
<div class="col m12">

    @if (($item -> chat_remitente == Auth() -> user() -> id))
    <div class="me nanum-gothic mensajedecrypt" id="{{$item -> id}}" onclick="decifrar({{$item -> id}})">
        {{$item -> texto}}
       
    </div>
    @else
    <div class="friend nanum-gothic mensajedecrypt" id="{{$item -> id}}" onclick="decifrar({{$item -> id}})">
        {{$item -> texto}}

     
    </div>

    @endif

</div>
@endforeach

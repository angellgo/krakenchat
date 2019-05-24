@foreach ($mensajes as $item)
<div class="col m12">


    @if (($item -> chat_remitente == Auth() -> user() -> id))
    <div class="me nanum-gothic">
            {{$item -> texto}} 
    </div>
    @else
    <div class="friend nanum-gothic">
            {{$item -> texto}}  
    </div>
    @endif
    
</div>
@endforeach
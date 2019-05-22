@foreach ($mensajes as $item)
<div class="col m12">
  

    @if (($item -> chat_remitente == Auth() -> user() -> id))
    <div class="me nanum-gothic">
            {{$item -> texto}} <div style="font-size: smaller">{{$item -> created_at }}</div> 
    </div>
    @else
    <div class="friend nanum-gothic">
           <div> {{$item -> texto}} <div style="font-size: smaller">{{$item -> created_at }}</div> 
    </div>
    @endif
    
</div>
@endforeach
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio - KrakenChat</title>

        <link rel="icon" type="img/png" href="{{asset('images/icono.png')}}">
        @include('layouts.tools')
    </head>
    <body>
        @include('layouts.navbar')
      
            <div id="index-banner" class="parallax-container">
                <div class="section no-pad-bot">
                  <div class="container">
                    
                   
                    <br><br>
                
                    <h1 class="header center teal-text text-lighten-2">KrakenChat</h1>
                    <div class="row center">
                      <h5 class="header col s12 light">KrakenChat es una aplicación web de mensajería instantánea con métodos de cifrado.</h5>
                      
                    </div>
                    <div class="row center">
                      <a href="{{route('user.loginview')}}" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Entrar</a>
                    </div>
                    <br><br>
            
                  </div>
                </div>
             <div class="parallax"><img src="{{asset('/images/fondo1.jpg')}}" alt="Unsplashed background img 1"></div>
            </div>
            
              <div class="container">
                <div class="section">
            
                  <!--   Icon Section   -->
                  <div class="row">
                    <div class="col s12 m4">
                      <div class="icon-block">
                        <h2 class="center teal-text"><i class="material-icons">flash_on</i></h2>
                        <h5 class="center">Veloz y eficiente</h5>
            
                        <p class="light center-align">Intercambia información al instante sin importar las distancias o diferencias de horario desde cualquier lugar del mundo siempre y cuando estes conectado a internet.</p>
                      </div>
                    </div>            
                    <div class="col s12 m4">
                      <div class="icon-block">
                        <h2 class="center teal-text"><i class="material-icons">group</i></h2>
                        <h5 class="center">Fácil de Usar</h5>
            
                        <p class="light center-align">Utiliza interfaz gráfica muy sencilla con las métricas de Material Design de Google así como tambien la comodidad del usuario que lo puede utilizar en cualquier sistema operativo</p>
                      </div>
                    </div>
            
                    <div class="col s12 m4">
                      <div class="icon-block">
                        <h2 class="center teal-text"><i class="material-icons">security</i></h2>
                        <h5 class="center">Mensajes secretos</h5>
            
                        <p class="light center-align">Utilizamos RSA es un algoritmo de cifrado asimétrico, o de clave pública, y es uno de los algoritmos más seguros y utilizados en la actualidad.</p>
                      </div>
                    </div>
                  </div>
            
                </div>
              </div>
            
            
              <div class="parallax-container valign-wrapper">
                <div class="section no-pad-bot">
                  <div class="container">
                    <div class="row center">
                      <h5 class="header col s12 light">KrakenChat surgío a partir de buscar mayor seguridad en la comunicación, elegimos a un kraken ya que suele asociarse con la especie de calamar Architeuthis dux, de la cual se sabe poco, solo que habita en las profundidades.</h5>
                    </div>
                  </div>
                </div>
                <div class="parallax"><img src="{{asset('/images/fondo2.jpg')}}" alt="Unsplashed background img 2"></div>
              </div>
            
              <div class="container">
                <div class="section">
            
                  <div class="row">
                    <div class="col s12 center">
                      <h3><i class="mdi-content-send brown-text"></i></h3>
                      <h4>RSA</h4>
                      <p class="left-align light">
                          El sistema criptográfico con clave pública RSA es un algoritmo asimétrico cifrador de bloques, que utiliza una clave pública, la cual se distribuye (en forma autenticada preferentemente), y otra privada, la cual es guardada en secreto por su propietario.
                          <br> 
                          Una clave es un número de gran tamaño, que una persona puede conceptualizar como un mensaje digital, como un archivo binario o como una cadena de bits o bytes.
                          <br>
                          Cuando se envía un mensaje, el emisor busca la clave pública de cifrado del receptor y una vez que dicho mensaje llega al receptor, éste se ocupa de descifrarlo usando su clave oculta.
                          <br>
                          Los mensajes enviados usando el algoritmo RSA se representan mediante números y el funcionamiento se basa en el producto de dos números primos grandes (mayores que 10100) elegidos al azar para conformar la clave de descifrado.
                         
                        </p>
                    </div>
                  </div>
            
                </div>
              </div>
            
            
              <div class="parallax-container valign-wrapper">
                <div class="section no-pad-bot">
                  <div class="container">
                    <div class="row center">
                      <h5 class="header col s12 light">Pretendemos que tus datos y mensajes se mantengan en las profundidades para mayor seguridad</h5>
                    </div>
                  </div>
                </div>
                <div class="parallax"><img src="{{asset('/images/fondo3.jpg')}}" alt="Unsplashed background img 3"></div>
              </div>
        
        @include('layouts.footer')      
 
    </body>
</html>
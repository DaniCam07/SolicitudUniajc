<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Solicitud UNIAJC</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/style.css') }}">
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>



    <div class="flex-center position-ref full-height"> 
        @if (Route::has('login'))
        
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
             <a class="fa fa-sign-in" href="{{ route('login') }}">  Login</a>

            @if (Route::has('register'))
            <!-- <a href="{{ route('register') }}">Registrar</a>-->
            @endif
            @endauth
        </div>
        @endif



        
        


        

        <div class="content">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="{{asset('uploads/img1.png') }}" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="{{asset('uploads/img1.png') }}" alt="Chicago">
    </div>

    <div class="item">
      <img src="{{asset('uploads/img1.png') }}" alt="New York">
    </div>
    <div class="item">
      <img src="{{asset('uploads/img1.png') }}" alt="New York">
    </div>
    <div class="item">
      <img src="{{asset('uploads/img1.png') }}" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        
        <!-- <img src="{{asset('uploads/logo.png') }}" alt=""> -->
            <div class="title m-b-md">
                App Solicitud UNIAJC
            </div>

            <div class="links">
                <a href="https://www.uniajc.edu.co/">Página Web</a>
                <a href="https://www.uniajc.edu.co/la-universidad/por-que-estudiar-en-uniajc/">La Universidad</a>
                <a href="https://www.uniajc.edu.co/facultad-ciencias-empresariales/">Facultad de Ciencias Empresariales</a>
                <a href="https://www.uniajc.edu.co/facultad-de-ingenieria/">Facultad de Ingenierías</a>
            </div><br><br>

            <div class="titulo">
                Redes Sociales
            </div>

            <div class="redes">
                <a href="https://www.facebook.com/UNIAJC"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/uniajc_/"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                <a href="https://www.youtube.com/user/UNIAJC"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a>
            </div>

        </div>
    </div>
</body>

</html>
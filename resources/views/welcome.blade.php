<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Solicitud UNIAJC</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
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
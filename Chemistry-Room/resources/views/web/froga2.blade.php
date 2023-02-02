<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FROGA 2</title>
    <link rel="stylesheet" href="{{asset("CSS/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("CSS/style.css")}}">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="overflow-hidden">

    @include('web.layouts._menuJuegos') 


    <div id="container">


        <div class="row text-center position-absolute right-0 espacio" id="cuerpo">

            <div id="Datos2">
                <tablero></tablero>
            </div>

        </div>

    </div>
    
    {{-- <section id="maskota"></section> --}}

    {{-- VUE pista  --}}
    <section id="maskota"></section>


    {{-- Swal --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

<!-- CSS-an jartzen baldin badugu, beste orrialdeetan arazoak ematen dituelako hemen jartzen dugu -->
    <style>
        div{
      display: inline-block;
    }
    </style>
</html>

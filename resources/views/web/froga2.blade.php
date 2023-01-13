<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FROGA 2</title>
    <link rel="stylesheet" href="{{asset("CSS/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("CSS/style.css")}}">
</head>

<body class="overflow-hidden">

    @include('web\layouts\_menuJuegos')


    <div class="container">


        <div class="row text-center position-absolute right-0 espacio">

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="{{asset("multimedia/logoCarta.png")}}" alt="">
            </div>

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="{{asset("multimedia/logoCarta.png")}}" alt="">
            </div>

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="{{asset("multimedia/logoCarta.png")}}" alt="">
            </div>

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="{{asset("multimedia/logoCarta.png")}}" alt="">
            </div>

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="{{asset("multimedia/logoCarta.png")}}" alt="">
            </div>

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="{{asset("multimedia/logoCarta.png")}}" alt="">
            </div>

            
            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="{{asset("multimedia/logoCarta.png")}}" alt="">
            </div>

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="{{asset("multimedia/logoCarta.png")}}" alt="">
            </div>

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="{{asset("multimedia/logoCarta.png")}}" alt="">
            </div>

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="{{asset("multimedia/logoCarta.png")}}" alt="">
            </div>

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="{{asset("multimedia/logoCarta.png")}}" alt="">
            </div>

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="{{asset("multimedia/logoCarta.png")}}" alt="">
            </div>

        </div>

    </div>

    @include('web\layouts\_maskotaFroga');

        {{-- Swal --}}
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        {{-- Vue 3 --}}
        <script src="https://unpkg.com/vue@next"></script>
        {{-- JS  --}}
        <script src="{{asset("JS/app.js")}}"></script>
</body>

</html>

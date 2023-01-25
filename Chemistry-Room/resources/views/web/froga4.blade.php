<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FROGA 4</title>
    <link rel="icon" type="image/png" href="../../../public/multimedia/life.png">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
</head>

<body id="letra" class="overflow-hidden">

    @include('web\layouts\_menuJuegos')

    <p class="text-center mt-3">Soluciona</p>
    <div id="Datos4">

        <div class="mx-3">
            <p class="text-left">Medio acido</p>
            <div class="divMedioAcido">
                <div class="m-3">
                    <p>@{{galdera4[0]}}</p>
                    <input class="inp">
                </div>
                <div class="m-3">
                    <p>@{{galdera4[1]}}</p>
                    <input class="inp">
                </div>
                <div class="m-3">
                    <p>@{{galdera4[2]}}</p>
                    <input class="inp">
                </div>
                <div class="m-3">
                    <p>@{{galdera4[3]}}</p>
                    <input class="inp">
                </div>
            </div>
        </div>

        <div class="mx-3">
            <p class="text-left">Medio basico</p>
            <div class="divMedioBasico">
                <div class="m-3">
                    <p>@{{galdera4[4]}}</p>
                    <input class="inp">
                </div>
                <div class="m-3">
                    <p>@{{galdera4[5]}}</p>
                    <input class="inp">
                </div>
                <div class="m-3">
                    <p>@{{galdera4[6]}}</p>
                    <input class="inp">
                </div>
                <div class="m-3">
                    <p>@{{galdera4[7]}}</p>
                    <input class="inp">
                </div>
            </div>
        </div>
    </div>

    {{-- VUE pista  --}}
    <section id="maskota"></section>


    {{-- Swal --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>

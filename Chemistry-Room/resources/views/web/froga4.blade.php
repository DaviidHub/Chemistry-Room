<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
</head>

<body class="overflow-hidden">

    @include('web\_menuJuegos')

    <p class="text-center">Soluciona</p>

    <div class="mx-3">
        <p class="text-left">Medio acido</p>
        <div class="divMedioAcido">
            <div class="m-3">
                <p>Pregunta</p>
                <input class="inp">
            </div>
            <div class="m-3">
                <p>Pregunta</p>
                <input class="inp">
            </div>
            <div class="m-3">
                <p>Pregunta</p>
                <input class="inp">
            </div>
            <div class="m-3">
                <p>Pregunta</p>
                <input class="inp">
            </div>
        </div>
    </div>

    <div class="mx-3">
        <p class="text-left">Medio basico</p>
        <div class="divMedioBasico">
            <div class="m-3">
                <p>Pregunta</p>
                <input class="inp">
            </div>
            <div class="m-3">
                <p>Pregunta</p>
                <input class="inp">
            </div>
            <div class="m-3">
                <p>Pregunta</p>
                <input class="inp">
            </div>
            <div class="m-3">
                <p>Pregunta</p>
                <input class="inp">
            </div>
        </div>
    </div>

    @include('web\_maskotaFroga');

</body>

</html>

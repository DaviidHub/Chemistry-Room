<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("CSS/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("CSS/style.css")}}">
</head>

<body class="overflow-hidden">

    @include('web\_menuJuegos')


    <div class="container">


        <div class="row text-center position-absolute right-0 espacio">

            <div class="col-4 divRespuesta">
                <p>RESPUESTA</p>
            </div>

            <div class="col-4 divRespuesta">
                <p>RESPUESTA</p>
            </div>

            <div class="col-4 divRespuesta">
                <p>RESPUESTA</p>
            </div>

            <div class="col-4 divRespuesta">
                <p>RESPUESTA</p>
            </div>

            <div class="col-4 divRespuesta">
                <p>RESPUESTA</p>
            </div>

            <div class="col-4 divRespuesta">
                <p>RESPUESTA</p>
            </div>

            <div class="col-4 divPregunta">
                <p>PREGUNTA</p>
            </div>

            <div class="col-4 divPregunta">
                <p>PREGUNTA</p>
            </div>

            <div class="col-4 divPregunta">
                <p>PREGUNTA</p>
            </div>

            <div class="col-4 divPregunta">
                <p>PREGUNTA</p>
            </div>

            <div class="col-4 divPregunta">
                <p>PREGUNTA</p>
            </div>

            <div class="col-4 divPregunta">
                <p>PREGUNTA</p>
            </div>

        </div>

    </div>

    @include('web\_maskotaFroga');

</body>

</html>

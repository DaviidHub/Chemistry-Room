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

    <div class=" d-flex flex-column  position-absolute bottom-0 end-0 justify-content-end align-items-center">
        <div class="bocadilloPista d-flex justify-content-center">
            <h2 class="pistaText p-3 text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est
                numquam excepturi natus qui in et quasi temporibus sint iste ipsam doloremque nulla veritatis assumenda
                animi sapiente, voluptas, ut error dolor!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est
                numquam excepturi natus qui in et quasi temporibus sint iste ipsam doloremque nulla veritatis assumenda
                animi sapiente, voluptas, ut error dolor!</h2>
        </div>
            {{-- <img class="bombilla" src="{{asset("multimedia/bombilla.svg")}}" alt=""> --}}
        <img class="maskota" src="{{asset("multimedia/quimica.png")}}" alt="">
    </div>

</body>

</html>

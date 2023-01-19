<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FROGA 6</title>
    <link rel="stylesheet" href="{{asset("CSS/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("CSS/style.css")}}">
    <link href="https://unpkg.com/animate.css@3.5.1/animate.min.css" rel="stylesheet" type="text/css">
</head>
<style>
      /* Transition */
  .aparecer-enter {
    opacity: 0;
}
/* Aparecer */
.aparecer-enter-active {
    transition: opacity 1s;
}
.aparecer-leave-to {
    opacity: 0;
}
/* Desaparecer */
.aparecer-leave-active {
    transition: opacity 1s;
}

</style>
<body class="overflow-hidden">
    <main>

        @include('web\layouts\_menuJuegos')
       
        <div class="container d-flex flex-column justify-content-around">

            <div class="creador d-flex flex-row text-center position-absolute right-0 espacio justify-content-between">


                <table class="Cientificos text-center ">


                    <tr class="cuadrado">
                        <td>
                            <h3>Henri Moissan</h3>
                        </td>
                        <td> <input class="nombreQuimico" type="text"> </td>
                    </tr>

                    <tr class="cuadrado">
                        <td>
                            <h3>Ferdinand Reich</h3>
                        </td>
                        <td> <input class="nombreQuimico" type="text"> </td>
                    </tr>


                    <tr class="cuadrado">
                        <td>
                            <h3>John W. Strutt</h3>
                        </td>
                        <td> <input class="nombreQuimico" type="text"> </td>
                    </tr>

                    <tr class="cuadrado">
                        <td>
                            <h3>Lars F. Nilson</h3>
                        </td>
                        <td> <input class="nombreQuimico" type="text"> </td>
                    </tr>

                    <tr class="cuadrado">
                        <td>
                            <h3>William Gregor</h3>
                        </td>
                        <td> <input class="nombreQuimico" type="text"> </td>
                    </tr>

                </table>

                <div class="text-center">

                    <div id="arriba" class="d-flex justify-content-center align-items-center">Solucion</div>
                    <div id="abajo"></div>

                </div>

            </div>
            @include('web\layouts\_maskotaFroga')
        </div>
    </main>

    <script src="https://unpkg.com/vue@next%22%3E"></script>
    <script src="{{asset('JS/bocadillo.js')}}"></script>
</body>

</html>

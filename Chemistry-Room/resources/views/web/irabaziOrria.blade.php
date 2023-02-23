<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irabazi Orria</title>
    <link rel="icon" type="image/png" href="{{ asset('Multimedia/life.png') }}">
    <link rel="stylesheet" href="{{asset("CSS/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("CSS/style.css")}}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
</head>

<body class="overflow-hidden">
    @include('web.layouts._menuFinal')

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./multimedia/Fondo1.png"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./multimedia/fondo2.png"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./multimedia/Fondo3.png"
                    class="d-block w-100" alt="...">
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    <div id="maskota">
        <div class="maskotaIrabazi">
            <div v-if="show">
                <div class=" p-4 bocadilloPista d-flex justify-content-center">
                    <h2 class="pistaText p-3 text-justify">
                        {{__("final.texto")}}
                    </h2>

                    <audio src="{{asset("multimedia/audio/aplausos.mp3")}}" controls autoplay></audio>
                </div>
            </div>

            <img id="maskotaJuego" src="{{asset("multimedia/quimica.png")}}" alt="">
        </div>
    </div>

</body>

</html>

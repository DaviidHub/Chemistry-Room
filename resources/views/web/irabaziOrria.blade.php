<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irabazi Orria</title>
    <link rel="stylesheet" href="{{asset("CSS/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("CSS/style.css")}}">
</head>

<body class="overflow-hidden">

    @include('web\layouts\_menuJuegos')

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./multimedia/FUEGOS-ARTIFICIALES.gif" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./multimedia/FUEGOS-ARTIFICIALES.gif" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./multimedia/FUEGOS-ARTIFICIALES.gif" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    <div id="maskota">
        <div class="d-flex flex-column bottom-0 end-0 justify-content-end align-items-center">
            <div>

            </div>
            <img id="maskotaJuego" src="{{asset("multimedia/quimica.png")}}" alt="">
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profila</title>
    <link rel="stylesheet" href="{{asset("CSS/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("CSS/style.css")}}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </head>
    <body>

    @include('web\layouts\_menu')

    <div id="centrar">

        <div class="col">
        <input type="text" class="input" placeholder="Izena">
        <input type="text" class="input" placeholder="Abizena">
        <input type="text" class="input" placeholder="Mail">
        </div>
        <div class="col">
        <input type="text" class="input" placeholder="Oraingo Pasahitza">
        <input type="text" class="input" placeholder="Pasahitz berria">
        <input type="text" class="input" placeholder="Berridatzi pasahitza">
        </div>

        <div>
            <div class="d-flex flex-column  position-absolute bottom-0 end-0 justify-content-end align-items-center">
                <div class="bocadilloPista d-flex justify-content-center">
                    <h2 class="pistaText p-3 text-justify">Hemen zure datuak aldatu ditzakezu</h2>
                </div>
                <img id="maskotaJuego" src="{{asset("multimedia/quimica.png")}}" alt="">
            </div>
        </div>

    </body>
</html>

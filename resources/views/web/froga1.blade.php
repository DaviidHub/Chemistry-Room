<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FROGA 1</title>
    <link rel="stylesheet" href="{{asset("CSS/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("CSS/style.css")}}">

</head>

<body class="overflow-hidden">

    @include('web\layouts\_menuJuegos')

    <div class="container">

        <div id="Datos1" class="row text-center position-absolute right-0 espacio">

            <div class="col-4 divIzena">
                <p>@{{izena1[0]}}</p>
            </div>

            <div class="col-4 divIzena">
                <p>@{{izena1[1]}}</p>
            </div>

            <div class="col-4 divIzena">
                <p>@{{izena1[2]}}</p>
            </div>

            <div class="col-4 divIzena">
                <p>@{{izena1[3]}}</p>
            </div>

            <div class="col-4 divIzena">
                <p>@{{izena1[4]}}</p>
            </div>

            <div class="col-4 divIzena">
                <p>@{{izena1[5]}}</p>
            </div>

            <div id="divDesk" class="d-flex flex-row mt-4">

                <div class="herenak d-flex flex-column">
                    <p>@{{desk1[0]}}</p>
                    <p>@{{desk1[1]}}</p>
                </div>

                <div class="herenak  d-flex flex-column">
                    <p>@{{desk1[2]}}</p>
                    <p>@{{desk1[3]}}</p>
                </div>

                <div class="herenak d-flex flex-column">
                    <p>@{{desk1[4]}}</p>
                    <p>@{{desk1[5]}}</p>
                </div>
            </div>
        </div>

    </div>

    @include('web\layouts\_maskotaFroga')


    {{-- Swal --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Vue 3 --}}
    <script src="https://unpkg.com/vue@next"></script>
    {{-- JS  --}}
    <script src="{{asset("JS/app.js")}}"></script>

</body>

</html>

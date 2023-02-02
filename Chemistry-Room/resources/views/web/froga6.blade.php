<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FROGA 6</title>
    <link rel="stylesheet" href="{{asset("CSS/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("CSS/style.css")}}">
    @vite(['resources/js/app.js','resources/css/app.css'])

</head>

<body class="overflow-hidden ">
    <main>
        @include('web.layouts._menuJuegos') 

        <div id="Datos6" class="container d-flex flex-column justify-content-around position-relative m-5">
            <div class="creador d-flex flex-row text-center position-absolute right-0 espacio justify-content-between">
                
            </div>

        </div>
        <section id="maskota"></section>

    </main>


    {{-- Swal --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>


</html>

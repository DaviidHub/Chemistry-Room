<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FROGA 1</title>
    <link rel="icon" type="image/png" href="../../../public/multimedia/life.png">
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="overflow-hidden">

    @include('web.layouts._menuJuegos') 

    <main class="container">
        {{-- VUE datuak  --}}
        <section id="Datos1" class="row text-center position-absolute right-0 espacio">


        </section>
    </main>
    {{-- VUE pista  --}}
    <section id="maskota"></section>


    {{-- Swal --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>

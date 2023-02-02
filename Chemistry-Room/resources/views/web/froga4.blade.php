<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FROGA 4</title>
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>

<body id="letra" class="overflow-hidden">

    @include('web.layouts._menuJuegos') 

    <p class="text-center mt-3">Molak aterak</p>
    <div id="Datos4" class="position-relative">
    </div>



    <section id="maskota"></section>


    {{-- Swal --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>

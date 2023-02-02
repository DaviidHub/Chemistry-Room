<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KODEA</title>
    <link rel="stylesheet" href="{{asset("CSS/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("CSS/style.css")}}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>

<body class="overflow-hidden">

    @include('web.layouts._menuJuegos')

    <div class="container d-flex flex-row align-items-center my-5">
        <img class=" lolaKodea" src="{{ asset('multimedia/quimica.png') }}" alt="quimica">
        <div class="bocadilloKode p-3">
            <p class="loginText align-self-center">
                Oso ondo <b> {{session()->get('erab')->izena}} !!!</b>! <br>
                Lehenengo 4 proba gainditu dituzu, orain azken bi proba egiteko kodea sartu behar duzu.
                <br>
                Baina kontuz!! Bi proba hauek oso zailak dira.
            </p>
        </div>

        <aside id="Kode">
    
        </aside>
    </div>





</body>

{{-- Swal --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>

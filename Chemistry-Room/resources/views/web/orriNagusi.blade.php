<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orri nagusia</title>
    <link rel="icon" type="image/png" href="{{ asset('Multimedia/life.png') }}">
    <link rel="stylesheet" href="{{asset("CSS/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("CSS/style.css")}}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>

</head>

<body class="overflow-hidden">

    @include('web.layouts._menu')

    <div class="container d-flex flex-row justify-content-center align-items-center my-5">
        <img class="my-5 lola" src="{{ asset('multimedia/quimica.png') }}" alt="quimica">
        <div class="bocadilloON p-3">
            <p class="loginText align-self-center">
                {{__("principal.texto")}}
            </p>
        </div>
    </div>


</body>

</html>

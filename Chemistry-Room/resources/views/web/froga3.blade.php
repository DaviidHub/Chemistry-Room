<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("CSS/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("CSS/style.css")}}">
</head>

<body class="overflow-hidden">

    @include('web\_menuJuegos')

        <body>
        <img src="{{ asset('./multimedia/Ahorcado/ahorcado_1.png') }}" class="Orca">
        <div>
            <p id="Palabra">_ _ _ _ _ _ _ _ _ _ _ _ _</p>
        </div>
    </body>

    @include('web\_maskotaFroga');

</body>

</html>

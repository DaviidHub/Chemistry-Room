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

    @include('web\layouts\_menuJuegos')

    <body>
        <div id="ahorcado">
            <img id="orca" src="{{ asset('./multimedia/Ahorcado/ahorcado_1.png') }}">
            <p id="error">a</p>
        </div>
        <div>
            <p id="palabra">_ _ _ _ _ _ _ _ _ _ _ _ _</p>
        </div>
    </body>

    @include('web\layouts\_maskotaFroga');

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="{{asset("JS/app.js")}}"></script>

</body>

</html>

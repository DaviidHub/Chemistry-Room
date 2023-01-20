<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FROGA 1</title>
    <link rel="stylesheet" href="{{asset("CSS/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("CSS/style.css")}}">
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>

<body class="overflow-hidden">

    @include('web\layouts\_menuJuegos')

    @include('web\layouts\_maskotaFroga')
</body>

</html>

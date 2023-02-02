<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Froga 3</title>
    <link rel="stylesheet" href="{{asset("CSS/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("CSS/style.css")}}">
    @vite(['resources/js/app.js','resources/css/app.css'])
</head>

<body class="overflow-hidden">

    @include('web.layouts._menuJuegos') 

    <body>
        
        <div id="Datos3">
            <div id="ahorcado">
                <img id="horca" :src="foto" alt="image" />
                <span id="letrasMal" v-for="letra in nodoError">@{{letra}}</span>
            </div>

            <div class="datosDiv">
                <span id="palabra" v-for="guion in solucion">@{{guion}}</span>
                <input v-model="nodoLetra" type="text" class="inputLetra">
                <button id="BidaliLetra" @click="comprobarLetra"> <img id="bidaliArgazki" src="{{asset("multimedia/tick.png")}}" alt=""></button>
            </div>
        </div>
    </body>

    <section id="maskota"></section>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{asset("CSS/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("CSS/style.css")}}">
</head>

<body>


    <div class="kontenedorea d-flex justify-content-center">

        <div class="bocadilloR d-flex justify-content-center">
            <h2 class="registroText align-self-center">REGISTRO</h2>
        </div>


        <div class="divRegistro formLogin d-flex flex-column justify-content-between mx-5">

            <form id="formRegister" action="{{ route('web.store') }}" method="GET"
                class="formRegistro d-flex flex-column align-items-center mx-5" autocomplete="off">
                @csrf
                <div class="d-flex flex-row justify-content-around">
                    <input class="inputRegister" id="nombreCorto" type="text" placeholder="Izena" name="izena">
                    <input class="inputRegister" id="apellidoCorto" type="text" placeholder="Abizena" name="abizena">
                </div>

                <input id="inputMail" class="inputRegister" type="text" placeholder="Mail" name="mail">
                <input class="inputRegister" type="password" placeholder="Pasahitza" name="pasahitza">
                <input class="inputRegister" type="password" placeholder="Berridatzi Pasahitza" name="pasahitzab">

                <input id="submitRegister" type="submit" class=" border-0 rounded" value="BIDALI">
            </form>

            <a href="{{ route('web.login') }}" class="aLogin align-self-center ">LOGIN</a>

        </div>

        <img class="maskota" src="{{asset("multimedia/quimica.png")}}" alt="">

    </div>

    {{-- Swal --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>   
    {{-- Vue 3 --}}
    <script src="https://unpkg.com/vue@next"></script>
    {{-- JS register --}}
    <script src="{{asset('JS/register.js')}}"></script>


</body>

</html>

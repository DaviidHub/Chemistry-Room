<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="icon" type="image/png" href="{{ asset('Multimedia/life.png') }}">
    <link rel="stylesheet" href="{{asset("CSS/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("CSS/style.css")}}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
</head>

<body>

    @include('web.layouts._menu') 

    <div class="kontenedorea d-flex justify-content-center">

        <div class="bocadilloR d-flex justify-content-center">
            <h2 class="registroText align-self-center">{{__("editar.r0")}}</h2>
        </div>


        <div id="divEditar" class="divRegistro formLogin d-flex flex-column justify-content-between mx-5">
            <form id="formRegister" action="{{ route('admin.Update', $erab->id) }}" enctype="multipart/form-data"
                method="POST" class="formRegistro d-flex flex-column align-items-center mx-5" autocomplete="off">
                @csrf
                <div class="d-flex flex-row justify-content-around">
                    <input class="inputRegister" id="nombreCorto" type="text" value="{{ $erab->izena }}" name="izena">
                    <input class="inputRegister" id="apellidoCorto" type="text" value="{{ $erab->abizenak }}"
                        name="abizenak">
                </div>

                <input id="inputMail" class="inputRegister" type="text" value="{{ $erab->mail }}" name="mail">

                <select id="selectRol" class="inputRegister" name="rol" id="">
                    <option value="">{{__("editar.r1")}} </option>
                    <option value="admin">{{__("editar.r2")}}</option>
                    <option value="jokalaria">{{__("editar.r3")}}</option>
                </select>

                <input class="inputRegister" type="text" name="pasahitza" placeholder="Pasahitza berria">
                <input type="file" name="argazkia" title = "Choose a video please" class="inputRegister">
                <input id="submitRegister" type="submit" class="border-0 rounded" value="BIDALI">
            </form>
        </div>

        <img class="maskota" src="{{asset("multimedia/quimica.png")}}" alt="">

    </div>

    {{-- Swal --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Vue 3 --}}
    <script src="https://unpkg.com/vue@next"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('CSS/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/style.css')}}">
</head>

<body>

    @isset($error)

    @endisset
    <div class="kontenedorea d-flex justify-content-center">

        <div class="bocadillo d-flex justify-content-center">
            <h2 class="loginText align-self-center">LOGIN</h2> 
        </div>

        <img class="maskota img-fluid" src="multimedia/{{ $lola->argazkia }}" alt="LOLA FOTO">

        <div class="divLogin formLogin d-flex flex-column justify-content-between mx-5">

            <form id="formLogin" action="{{route('web.logeo') }}" method="post"
                class="formLogin d-flex flex-column align-items-center mx-5" autocomplete="off">
                @csrf
                <input id="inputMail" class="inputLogin" type="text" placeholder="Mail" name="mail">
                @error('mail')
                <p class="error-message">{{ $message }}</p>
                @enderror

                <input class="inputLogin" type="password" placeholder="Pasahitza" name="pasahitza">
                @error('pasahitza')
                <p class="error-message">{{ $message }}</p>
                @enderror

                <input id="submitLogin" type="submit" class=" border-0 rounded" value="BIDALI">
            </form>

            <a href="{{ route('web.registro') }}" class="aRegister align-self-center ">REGISTER</a>

        </div>

    </div>

    {{-- Swal --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Vue 3 --}}
    <script src="https://unpkg.com/vue@next"></script>
</body>

</html>

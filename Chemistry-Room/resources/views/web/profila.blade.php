<!DOCTYPE html>
<html lang="en">

<head>
    @include('web.layouts._includes')
</head>

<body>

    @include('web.layouts._menu')

    <div id="profila" class="container my-5 text-center">

        <img id="profilArgazki" src="{{session()->get('sFoto')}}" alt="argazkia">

        <form action="{{route('web.update', session()->get('erab')->id)}}" method="POST" enctype="multipart/form-data">
            @csrf {{ method_field('PUT')}}
            <div class="col">

                <input class="input" name="argazkia" type="file" value="{{session()->get('erab')->argazkia}}">
                <input type="text" name="izena" class="input" placeholder="{{__("profila.nombre")}} "
                    value="{{session()->get('erab')->izena}}">
                <input type="text" name="abizenak" class="input" placeholder="{{__("profila.apellido")}}"
                    value="{{session()->get('erab')->abizenak}}">
            </div>

            <div class="col">
                <input type="text" name="mail" class="input" placeholder="{{__("profila.correo")}}"
                    value="{{session()->get('erab')->mail}}">
                <input type="password" name="pasahitza" class="input" placeholder="{{__("profila.pass")}}">
                <input type="password" name="pasahitzab" class="input" placeholder="{{__("profila.pass2")}}">
            </div>

            <input id="bidali" type="submit" value="{{__("profila.guarda")}}" class="aling-self-center">
            
        </form>
        
        
        
    </div>
    {{-- CAMBIAR IDIOMA --}}
    <button class="btn nav-item position-absolute top-0 my-5 mx-2">
        <a href=' {{ route('web.idioma') }}' class="btn btn-outline-light">{{__("profila.idioma")}}</a>
    </button>

</body>

</html>

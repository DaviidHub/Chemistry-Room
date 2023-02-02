<!DOCTYPE html>
<html lang="en">

<head>
    @include('web.layouts._includes')

</head>

<body>

    @include('web.layouts._menu') 

    <div id="profila" class="container my-5 text-center">

        <form action="{{route('web.update', session()->get('erab')->id) }}" method="POST">
        @csrf {{ method_field('PUT')}}
            <div class="col">
                <input type="text" name="izena" class="input" placeholder="Izena" value="{{session()->get('erab')->izena}}">
                <input type="text" name="abizenak" class="input" placeholder="Abizena" value="{{session()->get('erab')->abizenak}}">
                <input type="text" name="mail" class="input" placeholder="Mail" value="{{session()->get('erab')->mail}}">
            </div>

            <div class="col">
                <input type="password" name="pasahitza" class="input" placeholder="Pasahitza Berria">
                <input type="password" name="pasahitzab" class="input" placeholder="Berridatzi pasahitza">
            </div>

            <input id="bidali" type="submit" value="BIDALI" class="aling-self-center">
        </form>
    </div>

</body>

</html>

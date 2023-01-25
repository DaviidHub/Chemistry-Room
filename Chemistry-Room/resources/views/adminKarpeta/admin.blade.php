<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Admin</title>
        <link rel="stylesheet" href="{{("CSS/bootstrap.min.css")}}">
        <link rel="stylesheet" href="{{("CSS/style.css")}}">
        @vite(['resources/js/app.js','resources/css/app.css'])
</head>


<body id="body-admin">

    @include('../web/layouts/_menu')

    <main class="container">
        <table id="tabla-admin" class="my-5">
            <tr class="titulos">
                <th>Izena</th>
                <th>Abizena</th>
                <th>Mail</th>
                <th>Rol</th>
            </tr>
            @foreach($erab as $usuario)
            <tr class="datos">
                <form action="{{ route('Erabiltzaileak.destroy', $usuario->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <td>{{ $usuario->izena }}</td>
                    <td>{{ $usuario->abizenak }}</td>
                    <td>{{ $usuario->mail }}</td>
                    <td>{{ $usuario->rol }}</td>
                    
                    <!-- ERABILTZAILEA EZABATU BOTOIA -->
                    <td class="border-0 sin"><input type="submit" value="X" class="ekis"></td>
                </form>
            </tr>
            @endforeach
        </table>
    </main>
</body>

</html>

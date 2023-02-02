<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Admin</title>
@include('../web/layouts/_includes')
</head>


<body id="body-admin">

    @include('../web/layouts/_menu')

    <main class="container">
        <table id="tabla-admin" class="my-5">
            <tr class="titulos">
                <th class="th-admin">Izena</th>
                <th class="th-admin">Abizena</th>
                <th class="th-admin">Mail</th>
                <th class="th-admin">Rol</th>
            </tr>
            @foreach($erab as $usuario)
            <tr class="datos">
                <form  action="{{ route('Erabiltzaileak.destroy', $usuario->id) }}" method="post" >
                    @method('DELETE')
                    @csrf
                    <td class="td-admin">{{ $usuario->izena }}</td>
                    <td class="td-admin">{{ $usuario->abizenak }}</td>
                    <td class="td-admin">{{ $usuario->mail }}</td>
                    <td class="td-admin">{{ $usuario->rol }}</td>
                    
                    <!-- ERABILTZAILEA EZABATU BOTOIA -->
                    <td class="border-0 sin td-admin"><input type="submit" value="X" class="ekis"></td>
                </form>
            </tr>
            @endforeach
        </table>

        <form action="{{ route('web.storeFotos') }}" method="POST" enctype="multipart/form-data" 
        class="formLogi d-flex align-items-center" autocomplete="off">
        @csrf    
            
            <input type="text" class="argazkiForm mx-5" name="izena" placeholder="Argazki izena" value="{{ old('izena') }}">
        
            <input id="inputArgazki" type="file" name="argazki" class="argazkiForm" placeholder="argazki" value="{{ old('argazki') }}">
    
            <input id="argazkiBotoi" type="submit" value="BIDALI">
        </form>

    </main>
</body>

</html>

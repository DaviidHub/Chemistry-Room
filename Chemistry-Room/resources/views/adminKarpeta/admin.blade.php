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
                <th class="th-admin"> {{__("admin.nombre")}} </th>
                <th class="th-admin"> {{__("admin.apellido")}} </th>
                <th class="th-admin"> {{__("admin.correo")}} </th>
                <th class="th-admin"> {{__("admin.rol")}} </th>
                <th class="td-admin">Kudeatu</th>
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
                    <td class="td-admin"><a class="btn btn-outline-light my-2" href="{{ route('web.edit', $usuario->id) }}">Editatu</a></td>
                    
                    <!-- ERABILTZAILEA EZABATU BOTOIA -->
                    <td class="border-0 sin td-admin"><input type="submit" value="X" id="ekis"></td>
                </form>
            </tr>
            @endforeach
        </table>

  

    </main>
</body>

</html>

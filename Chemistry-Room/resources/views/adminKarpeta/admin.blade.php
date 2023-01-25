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
                <th>Izena</th>
                <th>Abizena</th>
                <th>Mail</th>
                <th>Rol</th>
            </tr>
            @foreach ($erab as $usuario)
                <tr class="datos">
                        <td>{{ $usuario->izena }}</td>
                        <td>{{ $usuario->abizenak }}</td>
                        <td>{{ $usuario->mail }}</td>
                        <td>{{ $usuario->rol }}</td>

                        <!-- ERABILTZAILEA EZABATU BOTOIA -->
                        <td class="border-0 sin">
                            <input @submit.prevent type="submit" value="X" class="ekis" data-toggle="modal" data-target="#confirmModal{{$usuario->id}}">
                        </td>
                </tr>
            @endforeach
        </table>

        <!-- Modal -->
        @foreach ($erab as $usuario)
        <div class="modal fade" id="confirmModal{{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title  text-dark" id="exampleModalLabel">EZABATU</h5>
                        <button type="button" class="close btn btn-outline-danger" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-dark">
                        {{-- CONTENIDO MODAL  --}}
                        <b>{{$usuario->izena}}</b> erabiltzailea ezabatu nahi duzu?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('Erabiltzaileak.destroy', $usuario->id) }}" method="post">
                            @method('DELETE')
                            @csrf  
                            <input id="button-confirm" type="submit" class="btn btn-primary" value="Bai, ezabatu">
                        </form>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Ez </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </main>
</body>

</html>

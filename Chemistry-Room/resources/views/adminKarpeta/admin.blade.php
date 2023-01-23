<!DOCTYPE html>
<html lang="en">

<head>
    <title>Colegio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<style>
    body {
        margin: auto;
        padding: 50px;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    table,
    td,
    th {
        border: 1px solid black;
    }

</style>

<body>
    <h2>Listado de Alumnos</h2>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <table>
        <tr>
            <th>Izena</th>
            <th>Abizena</th>
            <th>Mail</th>
            <th>Rol</th>
        </tr>
        @foreach($erab as $usuario)
        <tr>
            <td>{{ $usuario->izena }}</td>
            <td>{{ $usuario->abizenak }}</td>
            <td>{{ $usuario->mail }}</td>
            <td>{{ $usuario->rol }}</td>
        </tr>
        @endforeach
    </table>


</body>

</html>

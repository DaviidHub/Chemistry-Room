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
    <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
    <?php endif; ?>
    <table>
        <tr>
            <th>Izena</th>
            <th>Abizena</th>
            <th>Mail</th>
            <th>Rol</th>
        </tr>
        <?php $__currentLoopData = $erab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($usuario->izena); ?></td>
            <td><?php echo e($usuario->abizenak); ?></td>
            <td><?php echo e($usuario->mail); ?></td>
            <td><?php echo e($usuario->rol); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\Chemistry-Room\resources\views/karpeta/index.blade.php ENDPATH**/ ?>
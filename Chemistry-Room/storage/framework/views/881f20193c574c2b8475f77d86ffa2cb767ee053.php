<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('CSS/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('CSS/style.css')); ?>">
</head>

<body>

    <H1>PENELOPE CRUZ</H1>
    <P><?php echo e(session()->get('erab')->rol); ?></P>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Chemistry-Room\resources\views/web/infoErab.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset("CSS/bootstrap.min.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("CSS/style.css")); ?>">
</head>

<body class="overflow-hidden">

    <?php echo $__env->make('web\layouts\_menuJuegos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="container">


        <div class="row text-center position-absolute right-0 espacio">

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="<?php echo e(asset("multimedia/logoCarta.png")); ?>" alt="">
            </div>

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="<?php echo e(asset("multimedia/logoCarta.png")); ?>" alt="">
            </div>

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="<?php echo e(asset("multimedia/logoCarta.png")); ?>" alt="">
            </div>

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="<?php echo e(asset("multimedia/logoCarta.png")); ?>" alt="">
            </div>

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="<?php echo e(asset("multimedia/logoCarta.png")); ?>" alt="">
            </div>

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="<?php echo e(asset("multimedia/logoCarta.png")); ?>" alt="">
            </div>

            
            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="<?php echo e(asset("multimedia/logoCarta.png")); ?>" alt="">
            </div>

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="<?php echo e(asset("multimedia/logoCarta.png")); ?>" alt="">
            </div>

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="<?php echo e(asset("multimedia/logoCarta.png")); ?>" alt="">
            </div>

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="<?php echo e(asset("multimedia/logoCarta.png")); ?>" alt="">
            </div>

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="<?php echo e(asset("multimedia/logoCarta.png")); ?>" alt="">
            </div>

            <div class="col-4 divRespuesta">
                <img class="logoCarta" src="<?php echo e(asset("multimedia/logoCarta.png")); ?>" alt="">
            </div>

        </div>

    </div>

    <?php echo $__env->make('web\layouts\_maskotaFroga', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Chemistry-Room\resources\views/web/froga2.blade.php ENDPATH**/ ?>
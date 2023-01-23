<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Froga1</title>
    <link rel="stylesheet" href="<?php echo e(asset("CSS/bootstrap.min.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("CSS/style.css")); ?>">
</head>

<body class="overflow-hidden">

    <?php echo $__env->make('web\layouts\_menuJuegos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">


        <div id="Datos1" class="row text-center position-absolute right-0 espacio">

            <div class="col-4 divIzena">
                <p>{{izena1[0]}}</p>
            </div>

            <div class="col-4 divIzena">
                <p>{{izena1[1]}}</p>
            </div>

            <div class="col-4 divIzena">
                <p>{{izena1[2]}}</p>
            </div>

            <div class="col-4 divIzena">
                <p>{{izena1[3]}}</p>
            </div>

            <div class="col-4 divIzena">
                <p>{{izena1[4]}}</p>
            </div>

            <div class="col-4 divIzena">
                <p>{{izena1[5]}}</p>
            </div>

            <div id="divDesk" class="d-flex flex-row mt-4">

                <div class="herenak d-flex flex-column">
                    <p>{{desk1[0]}}</p>
                    <p>{{desk1[1]}}</p>
                </div>

                <div class="herenak  d-flex flex-column">
                    <p>{{desk1[2]}}</p>
                    <p>{{desk1[3]}}</p>
                </div>

                <div class="herenak d-flex flex-column">
                    <p>{{desk1[4]}}</p>
                    <p>{{desk1[5]}}</p>
                </div>
            </div>
        </div>

    </div>

    <?php echo $__env->make('web\layouts\_maskotaFroga', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="<?php echo e(asset("JS/app.js")); ?>"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Chemistry-Room\resources\views/web/froga1.blade.php ENDPATH**/ ?>
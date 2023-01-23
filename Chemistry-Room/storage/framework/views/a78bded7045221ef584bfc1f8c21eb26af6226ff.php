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

    <?php if(isset($error)): ?>

    <?php endif; ?>
    <div class="kontenedorea d-flex justify-content-center">

        <div class="bocadillo d-flex justify-content-center">
            <h2 class="loginText align-self-center">LOGIN</h2>
        </div>

        <img class="maskota" src="<?php echo e(asset('multimedia/quimica.png')); ?>" alt="">

        <div class="divLogin formLogin d-flex flex-column justify-content-between mx-5">

            <form id="formLogin" action="<?php echo e(route('web.login')); ?>" method="post"
                class="formLogin d-flex flex-column align-items-center mx-5" autocomplete="off">
                <?php echo csrf_field(); ?>
                <input id="inputMail" class="inputLogin" type="text" placeholder="Mail" name="mail">
                <input class="inputLogin" type="password" placeholder="Pasahitza" name="pasahitza">

                <input id="submitLogin" type="submit" class=" border-0 rounded" value="BIDALI">
            </form>

            <a href="<?php echo e(route('web.registro')); ?>" class="aRegister align-self-center ">REGISTER</a>

        </div>

    </div>

    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script src="https://unpkg.com/vue@next"></script>
    
    <script src="https://unpkg.com/vue-router@4"></script>
    
    <script src="<?php echo e(asset('JS/login.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Chemistry-Room\resources\views/web/login.blade.php ENDPATH**/ ?>
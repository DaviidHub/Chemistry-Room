<div class="kontenedorea d-flex justify-content-center">

    <div class="bocadillo d-flex justify-content-center">
        <h2 class="loginText align-self-center">LOGIN</h2>
    </div>

    <img class="maskota" src="<?php echo e(asset("multimedia/quimica.png")); ?>" alt="">

    <div class="divLogin formLogin d-flex flex-column justify-content-between mx-5">

        <form class="formLogin d-flex flex-column align-items-center mx-5">

            <input class="inputLogin" type="text" placeholder="Mail">
            <input class="inputLogin" type="text" placeholder="Pasahitza">

            <input type="submit" class=" border-0 rounded" value="BIDALI">
        </form>

        <a href="<?php echo e(route('web.registro')); ?>" class="aRegister align-self-center ">REGISTER</a>

    </div>

</div>
<?php /**PATH C:\xampp\htdocs\Chemistry-Room\resources\views/web\_login.blade.php ENDPATH**/ ?>
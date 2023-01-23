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

<body>


    <div class="kontenedorea d-flex justify-content-center">     
          
        <div class="bocadillo d-flex justify-content-center">
            <h2 class= "loginText align-self-center">LOGIN</h2>
        </div>
    
        <img class="maskota" src="<?php echo e(asset("multimedia/quimica.png")); ?>" alt="">

        <div class="divLogin formLogin d-flex flex-column justify-content-between mx-5">

            <form class="formLogin d-flex flex-column align-items-center mx-5">

                <input class="inputLogin" type="text" placeholder="Mail">
                <input class="inputLogin" type="text" placeholder="Pasahitza">

                <input type="submit" class=" border-0 rounded" value="BIDALI">
            </form>
            
            <a href="#" class="aRegister align-self-center ">REGISTER</a>
        
        </div>

    </div>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\Chemistry-Room\resources\views/web/index.blade.php ENDPATH**/ ?>
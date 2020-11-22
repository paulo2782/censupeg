<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRM - CENSUPEG</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css?1')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet" >

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="<?php echo e(asset('/js/bootstrap.min.js')); ?>"></script>

</head>
<body id="app-layout">
    <div class="container">
         
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <?php if(Auth::guest()): ?>
                    <!-- <li><a href="<?php echo e(url('/login')); ?>">Login</a></li> -->
                    <!-- <li><a href="<?php echo e(url('/register')); ?>">Register</a></li> -->
                <?php else: ?>
                <!--     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Sair</a></li>
                        </ul>
                    </li> -->
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <?php echo $__env->yieldContent('content'); ?>
    <!-- include('includes/footer') -->
 </body>
</html><?php /**PATH C:\censupeg\resources\views/layouts/app.blade.php ENDPATH**/ ?>
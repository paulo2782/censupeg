<link rel="shortcut icon" href="<?php echo e(asset('img/favicon.ico')); ?>" type="image/x-icon">

<div id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="<?php echo e(route('contactShow')); ?>"><img src="<?php echo e(asset('img/logo-censupeg-header.png')); ?>" alt="Logo da Censupeg" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" style="color: #fff" href="<?php echo e(route('contactShow')); ?>">Contatos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #fff" href="<?php echo e(route('callShow')); ?>">Ligações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #fff" href="<?php echo e(route('courseShow')); ?>">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #fff" href="<?php echo e(route('reportShow')); ?>">Relatório</a>
                </li>
                </ul>
                <ul class="navbar-nav my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link username"><strong><?php echo e(auth()->user()->name); ?></strong></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #fff" href="<?php echo e(route('logout')); ?>">Sair</a>
                </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<?php /**PATH C:\censupeg\resources\views/includes/header.blade.php ENDPATH**/ ?>
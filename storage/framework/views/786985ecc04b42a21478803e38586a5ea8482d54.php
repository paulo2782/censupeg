<link rel="shortcut icon" href="<?php echo e(asset('img/favicon.ico')); ?>" type="image/x-icon">

<div id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="<?php echo e(route('dashboardShow',date('Y-m-d'))); ?>"><img src="<?php echo e(asset('img/logo-censupeg-header.png')); ?>" alt="Logo da Censupeg" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('dashboardShow',date('Y-m-d'))); ?>">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Atividades
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('mailingShow')); ?>">Mailing</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('contactShow')); ?>">Contatos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Configurações
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('courseShow')); ?>">Cursos</a>
                            <a class="dropdown-item" href="<?php echo e(route('partnerShow')); ?>">Empresas parceiras</a>
                            <?php if(auth()->user()->level == 1): ?>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo e(route('userShow')); ?>">Usuários</a>
                            <?php endif; ?>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav my-2 mr-4 my-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo e(auth()->user()->name); ?>

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('myaccountShow')); ?>">Minha conta</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>">Sair</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<?php /**PATH C:\censupeg\resources\views/includes/header.blade.php ENDPATH**/ ?>
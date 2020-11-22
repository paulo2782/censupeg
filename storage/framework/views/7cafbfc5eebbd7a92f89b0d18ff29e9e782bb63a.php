
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<body id="body-container">
  <?php echo $__env->make('includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div id="container-main">
    <div class="container">
        <div class="content-details">
            <div class="top-bar-report">
                <h1>Relatórios</h1>
                <div class="period-bar">
                    <a href="#" class="fa fa-angle-double-left"></a>
                        Novembro de 2020
                    <a href="#" class="fa fa-angle-double-right"></a>
                </div>
            </div>
            <div class="show-details-block">
                <!--<div class="row">
                    <div class="col-md-4">
                        <div class="card card-pricing popular shadow text-center px-2 mb-2">
                            <span class="text-4 w-60 mx-auto px-2 py-1 rounded-bottom bg-title text-white shadow-sm">Contatos</span>
                            <div class="bg-transparent card-header pt-2 border-0">
                                <h3 class="h3 font-weight-normal text-center mb-0"><span class="text-title">6254</span><span class="text-4 text-muted ml-2">/ contato(s)</span></h3>
                            </div>
                            <hr />
                            <div class="card-body pt-0">
                                <ul class="list-unstyled mb-2">
                                    <li><span class="font-weight-normal text-center mb-0"><span class="text-item">2</span><span class="text-4 text-muted ml-2">/ novo(s) contato(s)</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-pricing popular shadow text-center px-2 mb-2">
                            <span class="text-4 w-60 mx-auto px-2 py-1 rounded-bottom bg-title text-white shadow-sm">Ligações</span>
                            <div class="bg-transparent card-header pt-2 border-0">
                                <h3 class="h3 font-weight-normal text-center mb-0"><span class="text-title">2</span><span class="text-4 text-muted ml-2">/ ligação(ões)</span></h3>
                            </div>
                            <hr />
                            <div class="card-body pt-0">
                                <ul class="list-unstyled mb-2">
                                    <li><span class="font-weight-normal text-center mb-0"><span class="text-item">2</span><span class="text-4 text-muted ml-2">/ nova(s) ligação(ões)</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-pricing popular shadow text-center px-2 mb-2">
                            <span class="text-4 w-60 mx-auto px-2 py-1 rounded-bottom bg-title text-white shadow-sm">Operadores</span>
                            <div class="bg-transparent card-header pt-2 border-0">
                                <h3 class="h3 font-weight-normal text-center mb-0"><span class="text-title">2</span><span class="text-4 text-muted ml-2">/ operador(es)</span></h3>
                            </div>
                            <hr />
                            <div class="card-body pt-0">
                                <ul class="list-unstyled mb-2">
                                    <li><span class="font-weight-normal text-center mb-0"><span class="text-item">2</span><span class="text-4 text-muted ml-2">/ novo(s) operador(es)</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>-->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="#contactReport">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#callReport">Ligações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#courseReport">Cursos</a>
                    </li>
                </ul>
            </div>
            <div id="contactReport" class="show-details-block">
                <h2>Contatos</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Escolaridade</h3>
                            <div id="escolaridade"></div>
                        </div>
                        <div class="col-md-6">
                            <h3>Origem dos contatos</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div id="callReport" class="show-details-block">
                <h2>Contatos</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Escolaridade</h3>
                            <div id="escolaridade"></div>
                        </div>
                        <div class="col-md-6">
                            <h3>Origem dos contatos</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo e(asset('/js/course.js')); ?>"></script>
</body>  
</html>
<script src="<?php echo e(asset('js/charts.js')); ?>"></script> 
<script src="<?php echo e(asset('js/function.js')); ?>"></script> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\censupeg\resources\views/report/report_general.blade.php ENDPATH**/ ?>

<?php echo $__env->make('contact/modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
<body id="body-container">
<?php echo $__env->make('includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- if(session('alert'))
<center>
    <div class="alert alert-success">
          session('alert') }}
    </div>
</center>
endif
 -->

 
<div id="container-main">
    <div class="container">
        <div class="content">
            <div class="top-bar">
                <h1>Contatos</h1>
                <a href="#"><img src="<?php echo e(asset('img/button-add.png')); ?>" alt="Botão adicionar" id="btnAdd"></a>
                <span id="message"><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <p><b><?php echo e($error); ?></b></p> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></span>
            </div>
            <div class="aux-bar">
                <h2>Contatos </h2>
                <form class="search-contact" action="<?php echo e(route('searchContact')); ?>">
                    <input type="search" id="search" name="search" class="form-control" placeholder=" Pesquisar contato" />
                </form>
            </div>
            <div id="content-table" class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Operador</th>
                            <th>Ação</th>
                        </tr>
                    </thead>  
                    <tbody id="tabela">
                    <?php $__currentLoopData = $dados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><a href="<?php echo e(route('viewData',$dado->id)); ?>"> <?php echo e($dado->name); ?> </a></td>
                            <td><?php echo e($dado->email); ?> </td>
                            <td> <?php echo e($dado->phone); ?> </td>
                            <td> <?php echo e($dado->user->name); ?></td>
                            <td id='toview'>
                                <a href="<?php echo e(route('viewData',$dado->id)); ?>" id="<?php echo e($dado->id); ?>" class="fa fa-eye btnToView" aria-hidden="true" title="Visualizar contato"></a>
                                <?php if(auth()->user()->level == 1): ?>
                                    <a href="<?php echo e(route('destroy',$dado->id)); ?>" class="fa fa-trash btnDelete" aria-hidden="true" title="Excluir contato"></a>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="content">
            <ul class="pagination">
                <li>
                    <span class="text-4"><?php echo e($dados->appends(['search'=>$search])->links()); ?></span>
                </li>
            </ul>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo e(asset('/js/contact.js')); ?>"></script>
</body>  
</html>
<script src="<?php echo e(asset('js/function.js')); ?>"></script> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    var msg = '<?php echo e(Session::get('alert')); ?>';
    var exist = '<?php echo e(Session::has('alert')); ?>';
    if(exist){
      swal("Censupeg",msg, 'error');
    }
</script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\censupeg\resources\views//contact/contact.blade.php ENDPATH**/ ?>
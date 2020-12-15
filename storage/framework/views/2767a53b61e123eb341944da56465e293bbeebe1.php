
<?php echo $__env->make('partners-business/add_modal_partner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partners-business/edit_modal_partner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
<body id="body-container">
<?php echo $__env->make('includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    <div id="container-main">
        <div class="container">
            <div class="content">
                <div class="top-bar">
                    <h1>Empresas parceiras</h1>
                    <a data-toggle="modal" href="#myModalAdd"><img src="<?php echo e(asset('img/button-add.png')); ?>" alt="Botão adicionar" id="btnAdd"></a>
                    <span id="alert"> <?php echo e(Session::get('alert')); ?> </span>
                    <span id="message"><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <p><b><?php echo e($error); ?></b></p> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></span>
                </div>
                <div class="aux-bar">
                    <h2>Empresas parceiras </h2>
                    <form class="search-contact" action="<?php echo e(route('partnerShow')); ?>">
                        <input type="search" id="search" name="search" class="form-control" placeholder=" Pesquisar empresa" />
                    </form>
                </div>
                <div id="content-table" class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Status</th>
                                <th>Operador</th>
                                <th>Ação</th>
                            </tr>
                        </thead>  
                        <tbody id="tabela">
                            <?php $__currentLoopData = $dados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><a href="#"> <?php echo e($dado->name); ?> </td> </a>
                                <td><?php echo e($dado->email); ?> </td>
                                <td><?php echo e($dado->phone); ?> </td>
                                <td><?php echo e($dado->status); ?></td>
                                <td><?php echo e($dado->user->name); ?> </td>
                                <td>
                                    <a data-toggle="modal" href="#myModalEdit" 
                                        data-id="<?php echo e($dado->id); ?>" 
                                        data-name="<?php echo e($dado->name); ?>"
                                        data-email="<?php echo e($dado->email); ?>"
                                        data-phone="<?php echo e($dado->phone); ?>"
                                        data-status="<?php echo e($dado->status); ?>"
                                        data-additional_information="<?php echo e($dado->additional_information); ?>"
                                        class="fa fa-pencil editPartner">
                                    </a>
                                    <?php if(auth()->user()->level == 1): ?>
                                        <a href="<?php echo e(route('destroyPartner',$dado->id)); ?>" class='fa fa-trash deletePartner'></a> 
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
    <script src="<?php echo e(asset('js/partners.js?1')); ?>"></script> 
</body>  
</html>

<script>
$('.editPartner').click(function(event) {
    /* Act on the event */
    $('#id_partner').val($(this).attr('data-id'))
    $('#edtName').val($(this).attr('data-name'))
    $('#edtEmail').val($(this).attr('data-email'))
    $('#edtPhone').val($(this).attr('data-phone'))
    $('#edtStatus').val($(this).attr('data-status'))
    $('#edtAdditional_information').html($(this).attr('data-additional_information'))

});

$('.deletePartner').click(function(event) {
    /* Act on the event */
    /* Act on the event */
    if(confirm('Confirma Excluir ?')){

    }else{
        return false;
    }

}); 

</script>
  
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\censupeg\resources\views/partners-business/partners.blade.php ENDPATH**/ ?>
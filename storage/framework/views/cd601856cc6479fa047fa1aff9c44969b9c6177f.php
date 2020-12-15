
<?php echo $__env->make('contact/modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body id="body-container">
  <?php echo $__env->make('includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="container-main">
    <div class="container">
        <div class="content">
            <div class="top-bar">
                <h1>Ligações</h1>
            </div>
        <div class="aux-bar">
            <h2>Ligacões</h2>
            <form class="search-contact" action="<?php echo e(route('searchCall')); ?>" method="GET">
                <input type="search" id="botao" class="form-control" name="search" placeholder="Pesquisar contato" />
            </form>
        </div>
        <div id="content-table" class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Ligação</th>
                        <th>Retorno</th>
                        <th>Horário</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody id="tabela">
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><a href="<?php echo e(route('viewData',$data->contact_id)); ?>"><?php echo e($data->Contact->name); ?></a></td>
                        <td><?php echo e($data->Contact->phone); ?></td>
                        <td><?php echo e(date('d/m/Y',strtotime($data->date_contact))); ?></td>
                        <td><?php echo e(date('d/m/Y',strtotime($data->date_return))); ?></td>
                        <td><?php echo e(date('H:m', strtotime($data->schedule))); ?></td>
                        <td id='toview'>
                            <div class='dropdown'>
                                <img src='img/tres-pontinhos.png' alt='três pontinhos' type='button' id='dropdownImage' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'/>
                                <div class='dropdown-menu' aria-labelledby='dropdownImage'>
                                    <a href="<?php echo e(route('viewData',$data->contact_id)); ?>" class='dropdown-item btnToView'>Visualizar</a>
                                </div>
                            </div>
                        </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>                    
                </tbody>
            </table>
        </div>
    </div>
    <div class="content">
        <ul class="pagination"> </ul>
    </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo e(asset('/js/contact.js')); ?>"></script>
</body>  
</html>
<script src="<?php echo e(asset('js/function.js')); ?>"></script> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\censupeg\resources\views//call/call.blade.php ENDPATH**/ ?>
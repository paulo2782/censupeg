
<?php echo $__env->make('includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('users/add_modal_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('users/edit_modal_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('users/delete_modal_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
<form name="addUser" action="<?php echo e(route('register')); ?>" method="POST">
<body id="body-container">
	<div id="container-main">
		<div class="container">
			<div class="content">
				<div class="top-bar">
					<h1>Usuários</h1>
					<a data-toggle="modal" href="#myModalAdd"><img src="<?php echo e(asset('img/button-add.png')); ?>" alt="Botão adicionar" id="btnAdd"></a>
	                <span id="message"><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <p><b><?php echo e($error); ?></b></p> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></span>
				</div>
				<div class="aux-bar">
					<h2>Usuários</h2>
				</div>
				<span id="alert"> <?php echo e(Session::get('alert')); ?> </span>
				<div id="content-table" class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Nome</th>
								<th>Usuário</th>
								<th>Permissão</th>
								<th>Ação</th>
							</tr>
					</thead>  
						<tbody id="tabela">
							<?php $__currentLoopData = $dados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php switch($dado->level):
									case (0): ?>
										<?php $level = 'Operador' ?> 
										<?php break; ?>
									<?php case (1): ?>
										<?php $level = 'Administrador' ?>
										<?php break; ?>
								<?php endswitch; ?> 
							<tr>
								<td> <?php echo e($dado->name); ?> </td>
								<td> <?php echo e($dado->email); ?> </td>
								<td> <?php echo e($level); ?> </td>
								<td>
									<a data-toggle="modal" href="#modalEdit" class="fa fa-pencil editUser" aria-hidden="true" title="Editar usuário"
										data-id    ="<?php echo e($dado->id); ?>"
										data-level ="<?php echo e($dado->level); ?>"
										data-name  ="<?php echo e($dado->name); ?>"
										data-email ="<?php echo e($dado->email); ?>">
									</a>

									<a href="#" class="fa fa-trash deleteUser" aria-hidden="true" 
									   title="Excluir usuário" 
									   data-id="<?php echo e($dado->id); ?>"
									   data-name="<?php echo e($dado->name); ?>">
									</a>
								</td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo e(asset('/js/users.js?Date(d-m-Y,h:i:s)')); ?>"></script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\censupeg\resources\views/users/user.blade.php ENDPATH**/ ?>
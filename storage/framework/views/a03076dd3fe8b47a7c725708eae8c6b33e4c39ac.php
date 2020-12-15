
<?php echo $__env->make('includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php echo $__env->make('myaccounts/edit_modal_password', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('myaccounts/edit_modal_profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body id="body-container">
<div id="container-main">
	<div class="container">
		<div class="content-details">
			<div class="top-bar-block">
				<h1>Minha conta</h1>
			</div>
			<span id="alert"> <?php echo e(Session::get('alert')); ?> </span>
            <span id="message"><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <p><b><?php echo e($error); ?></b></p> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></span>

			<div class="show-details-block">
				<h2>Dados básicos</h2>
				<form id="contact-info" method="#">
					<div class="form-row">
						<input type="hidden" value="<?php echo e($dados[0]->id); ?>" id="id">
						<div class="form-group col-12">
							<label class="text-4" for="nameContact">Nome completo</label>
							<a data-toggle="modal" href="#modalEditProfile" class="fa fa-pencil" title="Editar nome e email" aria-hidden="true"></a>
							<input type="text" class="form-control" readonly="readonly" id="nameContact" name="name" value="<?php echo e($dados[0]->name); ?>" />
						</div>
						<div class="form-group col-12">
							<label class="text-4" for="emailContact">Email</label>
							<input type="email" class="form-control" readonly="readonly" id="emailContact" name="email" value="<?php echo e($dados[0]->email); ?>" />
						</div>						
						<div class="form-group col-12">
							<label class="text-4" for="stateContact">Tipo de usuário</label>
							<input type="text" class="form-control" disabled id="stateContact" name="state" value="Operador"/>    
						</div>
						<div class="form-group col-12">
							<label class="text-4" for="passwd">Senha</label>
							<a data-toggle="modal" href="#myModalEdit" class="fa fa-pencil" title="Editar senha" aria-hidden="true" id="#"></a>
							<input type="text" class="form-control" readonly="readonly" id="passwd" name="passwd" value="********"/>    
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo e(asset('/js/myaccount.js?Date(d-m-Y,h:i:s)')); ?>"></script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\censupeg\resources\views/myaccounts/myaccount.blade.php ENDPATH**/ ?>
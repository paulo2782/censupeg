
<table class="table table-responsive">
	<thead>
		<tr>
			<th>NOME</th>
			<th>E-MAIL</th>
			<th>FONE</th>
			<th>CURSO</th>
			<th>INFO ADD</th>
		</tr>
	</thead>
	<tbody>		
		<?php echo e($dados->links()); ?>


		<h2> Total Restante: <?php echo e($iCount); ?></h2> 

		<?php $__currentLoopData = $dados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td> <?php echo e($dado->name); ?> </td>
			<td> <?php echo e($dado->email); ?> </td>
			<td> <?php echo e($dado->phone); ?> </td>
			<td> <?php echo e($dado->course); ?> </td>
		 	<td> <?php echo e($dado->additional_information); ?> </td>
		 	<td><a href="<?php echo e(route('correctRegister',$dado->id)); ?>"> <?php echo e($dado->id); ?> </a></td>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tr>

	</tbody>
</table>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\censupeg\resources\views//correct/correct.blade.php ENDPATH**/ ?>
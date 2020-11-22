
<?php echo $__env->make('includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('contact/modalEdit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('contact/modal_contact_courses', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('contact/modal_contact_schedule', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('contact/modal_contact_edit_courses', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('contact/modal_contact_edit_schedule', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body id="body-container">
<div id="container-main">
	<div class="container">
		<div class="content-details">
			<div class="top-bar-block">
				<h3 class="py-4 text-center"><?php echo e($dados[0]->name); ?></h3>
			</div>
			<div class="show-details-block">
				<h2>Dados básicos
					<a href="#" class="fa fa-pencil" aria-hidden="true" id="btnAdd"></a>
				</h2>
				<form class="contact-info" method="post">
					<div class="form-row">
						<div class="form-group col-12">
							<label class="text-4" for="nameContact">Nome Completo</label>
							<input type="text" class="form-control" readonly="readonly" id="nameContact" name="name" value="<?php echo e($dados[0]->name); ?>" />
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="emailContact">Email</label>
							<input type="email" class="form-control" readonly="readonly" id="emailContact" name="email" value="<?php echo e($dados[0]->email); ?>" />
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="phoneContact">Telefone</label>
							<input type="text" class="form-control" readonly="readonly" id="phoneContact" name="phone" value="<?php echo e($dados[0]->phone); ?>"/>    
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="stateContact">Estado</label>
							<input type="text" class="form-control" readonly="readonly" id="stateContact" name="state" value="<?php echo e($dados[0]->state); ?>"/>    
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="cityContact">Cidade</label>
							<input type="text" class="form-control" readonly="readonly" id="cityContact" name="city" value="<?php echo e($dados[0]->city); ?>"/>    
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="schoolContact">Escolaridade</label>
							<input type="text" class="form-control" readonly="readonly" id="schoolContact" name="school" value="<?php echo e($dados[0]->schooling); ?>"/>    
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="originContact">Origem do contato</label>
							<input type="text" class="form-control" readonly="readonly" id="originContact" name="origin" value="<?php echo e($dados[0]->contact_origin); ?>"/>    
						</div>
						<div class="form-group col-12">
							<label class="text-4" for="observation">Informações adicionais</label>
							<textarea class="form-control" readonly="readonly" id="additional_information" name="additional_information"> <?php echo e($dados[0]->additional_information); ?></textarea>
						</div>
					</div>
				</form>
			</div>
			<div class="show-details-block">
				<h2>Cursos
					<a href="#" class="fa fa-plus-circle" aria-hidden="true" id="btnAddCourse"> </a>
				</h2>
				<div id="content-table" class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Curso</th>
								<th>Modalidade</th>
								<th>Nível</th>
								<th>Status</th>
								<th>Ação</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php $__currentLoopData = $dataInterests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>				
								<td> <?php echo e($i); ?></td>			
								<td> <?php echo e($data->course); ?></td>
								<td> <?php echo e($data->course_type); ?></td>
								<td> <?php echo e($data->level_course); ?></td>
 								<td> <?php echo e($data->status); ?></td>
								<td>
									<a href="#" class="fa fa-pencil btnEditCourse" aria-hidden="true" title="Editar Registro" id="<?php echo e($data->id); ?>"></a>

									<a href="<?php echo e(route('destroyInterestCourse',$data->id)); ?>" class="fa fa-trash btnDelete" aria-hidden="true" title="Apagar Registro"></a>
								</td>
							</tr>
							<?php $i++; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="show-details-block">
				<h2>Ligações
					<a href="#" class="fa fa-plus-circle" aria-hidden="true" id="btnAddSchedule"></a>
				</h2>
				<div id="content-table" class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Data</th>
								<th>Retorno</th>
								<th>Horário</th>
								<th>Status</th>
								<th>Ação</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php $__currentLoopData = $dataCalls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($i); ?></th>
								<td><?php echo e(date('d/m/Y',strtotime($data->date_contact))); ?></td>
								<td><?php if($data->date_return != null): ?> 
									<td><?php echo e(date('d/m/Y',strtotime($data->date_return))); ?>

									<?php endif; ?> </td>
								<td><?php if($data->schedule != null): ?> 
										<?php echo e(date('H:i', strtotime($data->schedule))); ?>

								 	<?php endif; ?> </td>
								<td><?php echo e($data->status); ?></td>
								<td>
									<a href="#" class="btnEditCall fa fa-pencil" aria-hidden="true" id="<?php echo e($data->id); ?>"></a>
									<a href="<?php echo e(route('destroyCall',$data->id)); ?>" class="fa fa-trash btnDelete" aria-hidden="true" title="Apagar Registro"></a>
								</td>
							<?php $i++; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo e(asset('/js/contact.js')); ?>"></script>

<script>
$('.btnEditCourse').click(function(event) {
    $('#myModalEditCourse').modal('toggle')
    $('#interest_id_edit').val(this.id)

    
    $.ajax({
    	url: "<?php echo e(route('searchInterest')); ?>",
    	method: 'GET',
    	dataType:'json',
    	data: {id: $('#interest_id_edit').val()},
    	success:function(data)
    	{
    		console.log(data)
    		if(data.level_course == 'Graduação'){
    			$('#Graduacao').trigger('click')
			    $('#modalityEdit').val(data.course_type)
			    $('#course_id_edit').val(data.course_id);
			    $('#statusEdit').val(data.status)
    		}
    		if(data.level_course == 'Pós-graduação'){
    			$('#PosGraduacao').trigger('click')
			    $('#modalityEdit').val(data.course_type)
				$('#course_id_edit').val(data.course_id);
				$('#statusEdit').val(data.status)
    		}
    	}
    });
    
});

$('.btnEditCall').click(function(event) {
    $('#myModalEditCall').modal('toggle')
    $('#call_id_edit').val(this.id)
    $.ajax({
	    url: "<?php echo e(route('searchCallEdit')); ?>",
	    method: 'GET',
	    dataType: 'json',
	    data: {
	            id:$('#call_id_edit').val()
	    },
	    success:function(data)
	    {
	    	
	    	$('#date_contact_edit').val(data.date_contact)
	    	$('#date_return_edit').val(data.date_return)
	    	$('#schedule_edit').val(data.schedule)
      		$('#statusSchedule option[value="'+data.status+'"]').prop('selected',true)
	        console.log(data)
	    }
	});

});
</script>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\censupeg\resources\views//contact/viewData.blade.php ENDPATH**/ ?>
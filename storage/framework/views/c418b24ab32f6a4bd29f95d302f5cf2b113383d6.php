

<form name="correct" method="POST" action="<?php echo e(route('updateRegister',$dados[0]->id)); ?>">
  <input type="hidden" name="_method" value="PUT">
    <?php echo csrf_field(); ?>
	<strong> DADOS ANTIGO </strong>

	<table class="table table-responsive">
		<thead>
			<tr>
				<th>NOME</th>
				<th>E-MAIL</th>
				<th>FONE</th>
				<th>ESCOLARIDADE</th>
				<th>CURSO</th>
				<th>ESTADO</th>
				<th>CIDADE</th>
				<th>INFO ADD</th>
			</tr>
		</thead>
		<tbody>		
			<tr>
				<td> <?php echo e($dados[0]->name); ?> </td>
				<td> <?php echo e($dados[0]->email); ?> </td>
				<td> <?php echo e($dados[0]->phone); ?> </td>
				<td> <?php echo e($dados[0]->schooling); ?> </td>
				<td> <?php echo e($dados[0]->course); ?> </td>
				<td> <?php echo e($dados[0]->state); ?> </td>
				<td> <?php echo e($dados[0]->city); ?> </td>
			 	<td> <?php echo e($dados[0]->additional_information); ?> </td>
			</tr>

		</tbody>
	</table>
	 
	<hr>
	 

	<strong> ATUALIZAR DADOS </strong>

	<strong>NOME:</strong>
	<?php echo e($dados[0]->name); ?>

	<input type="hidden" name="contact_id" value="<?php echo e($dados[0]->id); ?>">
	<br>
	<strong>EMAIL:</strong>
	<input type="text" class="form-control" value="<?php echo e($dados[0]->email); ?>" name="email">
	<br>
	<strong>FONE:</strong>
	<input type="text" class="form-control" value="<?php echo e($dados[0]->phone); ?>" name="phone">
	<br>
	<strong>ESCOLARIDADE:</strong>
	<select class="form-control" id="schooling" name="schooling">
	    <option value="Ensino médio incompleto">Ensino médio incompleto</option>
	    <option value="Ensino médio completo">Ensino médio completo</option>
	    <option value="Ensino superior incompleto">Ensino superior incompleto</option>
	    <option value="Ensino superior completo">Ensino superior completo</option>
	    <option value="Outros">Outros</option>
	</select>
	<br>
	<strong>CURSO:</strong>
	<select class="form-control" id="iCourse">
	<?php $__currentLoopData = $dataCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataCourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    <option value="<?php echo e($dataCourse->id); ?>"><?php echo e($dataCourse->course); ?></option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</select>
	<input type="hidden" id="course_id" name="course_id">
	<br>
	<strong>ESTADO:</strong>
	<select class="form-control" id="state" name="state" required="">
	    <option value=""></option>
	    <option value="AC">AC</option>
	    <option value="AL">AL</option>
	    <option value="AP">AP</option>
	    <option value="AM">AM</option>
	    <option value="BA">BA</option>
	    <option value="CE">CE</option>
	    <option value="ES">ES</option>
	    <option value="GO">GO</option>
	    <option value="MA">MA</option>
	    <option value="MT">MT</option>
	    <option value="MS">MS</option>
	    <option value="MG">MG</option>
	    <option value="PA">PA</option>
	    <option value="PB">PB</option>
	    <option value="PR">PR</option>
	    <option value="PE">PE</option>
	    <option value="PI">PI</option>
	    <option value="RJ">RJ</option>
	    <option value="RN">RN</option>
	    <option value="RS">RS</option>
	    <option value="RO">RO</option>
	    <option value="RR">RR</option>
	    <option value="SC">SC</option>
	    <option value="SP">SP</option>
	    <option value="SE">SE</option>
	    <option value="TO">TO</option>
	    <option value="DF">DF</option>                            
	</select>
	<br>
	<strong>CIDADE:</strong>
	<select class="form-control" id="city" name="city"></select>
	<br>
	<strong>INFORMAÇÕES ADICIONAIS:</strong>
	<textarea class="form-control" name="additional_information"><?php echo e($dados[0]->additional_information); ?></textarea>
	<input type="submit" id="update" value="ATUALIZAR DADOS" class="form-control btn btn-danger"> 
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$('form').submit(function(){
	$('#course_id').val($('#iCourse').val())
})
	
 $('#state').change(function(event) {
        let state = $('#state').val();
        $.get('https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+state+'/distritos', function(data) {
          $('#city').html('');
          $.each(data,function(index, el) {
            $('#city').append('<option>'+data[index].nome)
          });
        });
    });
</script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\censupeg\resources\views//correct/correctRegister.blade.php ENDPATH**/ ?>
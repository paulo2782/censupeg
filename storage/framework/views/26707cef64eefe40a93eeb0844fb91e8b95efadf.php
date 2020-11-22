 <div class="modal fade" id="myModalCourse">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Contato - Cursos<span class="text-5">* Campo Obrigatório</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="contact-modal" action="<?php echo e(route('interestStore')); ?>" method="post">
                <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="id" value="<?php echo e(auth()->user()->id); ?>">
                <input type="hidden" name="contact_id" value="<?php echo e($dados[0]->id); ?>">
                <div class="form-row">    
                    <div class="form-group col-12">
                        <div class="radio-course" id="level">
                            <label>
                                <input type="radio" name="level_course" id="level_course" value="Graduação">
                                Graduação
                            </label>
                            <label>
                                <input type="radio" name="level_course" id="level_course" value="Pós-graduação">
                                Pós-graduação
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4">Curso <span>*</span></label>
                        <select class="c-select form-control" id="selectCourse" required>
                        
                       
                         </select>
                        <input type="hidden" name="course_id" id="course_id">
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4">Modalidade</label>
                        <input type="text" id="modality" class="form-control" readonly="">
 
                    </div>
                    
                    <div class="form-group col-12">
                        <label class="text-4" for="statusSchedule">Status <span>*</span></label>
                        <select class="c-select form-control" id="statusSchedule" name="status" required>
                            <option value="" selected>Selecione o status do curso</option>
                            <option value="Em interesse">Em interesse</option>
                            <option value="Cursando">Cursando</option>
                            <option value="Interrompido">Interrompido</option>
                            <option value="Concluído">Concluído</option>
                        </select>
                    </div>
                </div>
                <div class="line-horizontal"></div>
                <button type="submit" id="add" class="btn btn-primary">Salvar</button>            
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo e(asset('/js/course.js')); ?>"></script>

<script>
$('input[type=radio][name=level_course]').on('change', function() {
  level_course = this.value

  $.ajax({
    url: "<?php echo e(route('listCourse')); ?>",
    method: 'GET',
    data:{level_course:level_course},
    dataType: 'json',
    success:function(data){
      $('#selectCourse').html('')  
      $('#selectCourse').append("<option value=''></option>")
      for(i = 0 ; i <= data.courses.length-1 ; i++) {
         $('#selectCourse').append("<option value='"+data.courses[i].id+"'>"+data.courses[i].course+"</option>")
      }
    },
    error:function(error){
        alert('Erro na requisição.')
    }
  });  

})

$('#selectCourse').change(function(event) {

  id_course_type = this.value
  $('#course_id').val(id_course_type)

  $.ajax({
    url: "<?php echo e(route('listCourse')); ?>",
    method: 'GET',
    data:{id_course_type:id_course_type},
    dataType: 'json',
    success:function(data){
      $('#modality').html('');
      $('#modality').val(data.dados_course_type[0].course_type)
    },
    error:function(error){
        alert('Erro na requisição.')
    }
  });  
});

</script><?php /**PATH C:\censupeg\resources\views/contact/modal_contact_courses.blade.php ENDPATH**/ ?>
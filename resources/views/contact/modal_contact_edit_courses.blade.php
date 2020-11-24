 <div class="modal fade" id="myModalEditCourse">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Contato - Editar Cursos<span class="text-5">* Campo Obrigatório</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>

            <form class="form-dialog registerForm" id="updateForm">
            <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

                <!-- <input type="hidden" name="_method" value="PUT"> -->
                <!-- srf -->
               <input type="hidden" name="_token"       id="token" value="{{ csrf_token() }}">
                <input type="hidden" name="id"             value="{{ $dados[0]->id }}">
                <input type="hidden" name="contact_id" id="contact_id"     value="{{ $dados[0]->id }}">
                <input type="hidden" name="interest_id_edit" id="interest_id_edit">
                <input type="hidden" name="course_id" id="course_id_edit">
                <input type="hidden" id="statusEdit">
 
                <div class="form-row">    
                    <div class="form-group col-12">
                        <div class="radio-course" id="level">
                            <label>
                                <input type="radio" name="level_courses" id="Graduacao" value="Graduação">
                                Graduação
                            </label>
                            <label>
                                <input type="radio" name="level_courses" id="PosGraduacao" value="Pós-graduação">
                                Pós-graduação
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4">Curso <span>*</span></label>
                        <select class="c-select form-control" id="selectCourses" name="id_selectCourse" required>
                         </select>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4">Modalidade</label>
                        <input type="text" id="modalityEdit" class="form-control" readonly="">
 
                    </div>
                    
                    <div class="form-group col-12">
                        <label class="text-4" for="statusSchedule">Status <span>*</span></label>
                        <select class="c-select form-control" id="statusSchedule" name="status" required>
                            <option value="" disabled selected hidden>Selecione o status do curso</option>
                            <option value="Em interesse">Em interesse</option>
                            <option value="Cursando">Cursando</option>
                            <option value="Interrompido">Interrompido</option>
                            <option value="Concluído">Concluído</option>
                        </select>
                    </div>
                </div>
                <div class="line-horizontal"></div>
                <input type="button"  class="btnUpdateContactCourse btn btn-primary" value="Salvar">            
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/course.js') }}"></script>

<script>

$('input[type=radio][name=level_courses]').on('change', function() {
  level_course = this.value
  console.log(course_id_edit)

  $.ajax({
    url: "{{ route('listCourse') }}",
    method: 'GET',
    data:{level_course:level_course},
    dataType: 'json',
    success:function(data){

      $('#selectCourses').html('')  
      for(i = 0 ; i <= data.courses.length-1 ; i++) {
         $('#selectCourses').append("<option value='"+data.courses[i].id+"'>"+data.courses[i].course+"</option>")
      }
    
     $('#selectCourses option[value="'+$('#course_id_edit').val()+'"]').prop('selected',true)
      $('#statusSchedule option[value="'+$('#statusEdit').val()+'"]').prop('selected',true)

    },
    error:function(error){
        alert('Erro na requisição.')
    }
  });  

})

$('#selectCourses').change(function(event) {

  id_course_type = this.value
  $.ajax({
    url: "{{ route('listCourse') }}",
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


$('.btnUpdateContactCourse').click(function(event) {
    /* Act on the event */            
    var form = $('#updateForm') 

    $.ajax({
        url: "{{ route('updateInterestCourse') }}",
        type: 'POST',
        data:form.serialize(),
        success:function(data){
            location.reload(true);
         },
         error:function(xhr, status, error){
            console.log(status)
         }
    });
    
});
</script>
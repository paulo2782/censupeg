 <div class="modal fade" id="myModalCourse">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Contato - Cursos</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="contact-modal" action="{{ route('interestStore') }}" method="post">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="contact_id" value="{{ $dados[0]->id }}">
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
                        <label class="text-4">Curso</label>
                        <select class="c-select form-control" id="selectCourse" required>
                        <option value=""></option>
                        @foreach($courses as $course)
                            <option value="{{ $course->course }}">{{ $course->course }}</option>
                        @endforeach
                        </select>
                        <input type="hidden" name="course_id" id="course_id">
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4">Modalidade</label>
                        <select class="c-select form-control" id="modality">
                            <!-- <option value="ead">EAD</option> -->
                            <!-- <option value="semipresencial">Semipresencial</option> -->
                            <!-- <option value="presencial">Presencial</option> -->
                        </select>
                    </div>
                    <!--<div class="form-group col-12">
                        <label class="text-4">Nível</label>
                        <select class="c-select form-control" id="level">
                            <option value="">Selecione status</option>
                            <option value="graduacao">Graduação</option>
                            <option value="pós-graduacao">Pós-graduação</option>
                        </select>
                    </div>-->
                    <div class="form-group col-12">
                        <label class="text-4" for="statusSchedule">Status</label>
                        <select class="c-select form-control" id="statusSchedule" name="status">
                            <option value="" selected>Selecione o status do curso</option>
                            <option value="Cursando">Em interesse</option>
                            <option value="Cursando">Cursando</option>
                            <option value="Interrompido">Interrompido</option>
                            <option value="Concluído">Concluído</option>
                        </select>
                    </div>
                </div>
                <div class="line-horizontal"></div>
                <button type="submit" id="add" class="btn btn-primary">Adicionar</button>            
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/course.js') }}"></script>

<script>
 $('#selectCourse').change(function(event) {
   
  $.ajax({
    url: "{{ route('listCourse') }}",
    method: 'GET',
    data:{selectCourse:$('#selectCourse').val()},
    dataType: 'json',
    success:function(data){
      $('#modality').html('');
      $('#modality').append("<option value=''>"+data.courses[0].course_type)
      $('#level').html('');
      $('#level').append("<option value=''>"+data.courses[0].level_course)
      $('#course_id').val(data.courses[0].id)
      
    },
    error:function(error){
        alert('Erro na requisição.')
    }
  });  
});

</script>
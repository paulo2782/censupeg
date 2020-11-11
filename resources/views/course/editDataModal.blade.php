 
<div class="modal fade" id="myModalEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Editar Curso</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="updateForm">
 
             <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

                 <div class="form-row">
                    <div class="form-group col-12">
                        <div class="radio-course">
                            <label>
                                <input type="radio" name="level_course" id="level_courseG" value="Graduação">
                                Graduação
                            </label>
                            <label>
                                <input type="radio" name="level_course" id="level_courseP" value="Pós-graduação">
                                Pós-graduação
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="name">Nome do Curso</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="edtCourse" name="course" required autocomplete="course" autofocus/>
                        @error('course') {{$message}} @enderror                                     
                    </div>
                    <div class="form-group col-12">
                        <input type="hidden" name="course_type" id="course_type">    
                        <label class="text-4" for="course_type">Modalidade</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="course_type[]" id="EAD" value="EAD" >
                            <label class="form-check-label d-block" for="ead">EAD</label>
                            <input class="form-check-input" type="checkbox" name="course_type[]" id="Presencial" value="Presencial">
                            <label class="form-check-label d-block" for="presencial">Presencial</label>
                            <input class="form-check-input" type="checkbox" name="course_type[]" id="Semipresencial" value="Semipresencial">
                            <label class="form-check-label d-block" for="semipresencial">Semipresencial</label>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="observation">Informações adicionais</label>
                        <textarea class="form-control" id="edtAdditional_information" name="additional_information">{{Session::get('additional_information')}}</textarea>
                    </div>
                </div>
                <div class="line-horizontal"></div>
                <input type="hidden" id="idCourse" name="id">
                <button type="button" id="updateCourse" class="btn btn-primary" data-dismiss=" ">Atualizar</button>            
            </form>
        </div>
   </div>
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $('#updateCourse').click(function(event) {
        var form = $('#updateForm') 
         $.ajax({
            url: "{{ route('updateCourse') }}",
            type: 'POST',
            data:form.serialize(),
            success:function(data){
                location.reload(true);
            },
            error:function(status, error){
                alert('Modalidade não pode ser vazio!')
            }
        });
    });
</script>
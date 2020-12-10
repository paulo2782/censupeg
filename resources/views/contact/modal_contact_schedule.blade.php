
<div class="modal fade" id="myModalSchedule">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Nova ligação<span class="text-5-title">* Campo obrigatório</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="contact-modal" action="{{ route('storeCall') }}" method="post">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="contact_id" value="{{ $dados[0]->id }}" id="contact_id">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="id">Curso <span class="text-5">*</span></label>
                        <select id="id" class="form-control" name="course_id" required>
                           
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label for="date_contact">Data de contato <span class="text-5">*</span></label>
                        <input type="date" class="form-control" id= "date_contact" name="date_contact" required/>
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="date_return">Data de retorno</label>
                        <input type="date" class="form-control" id= "date_return" name="date_return"/>    
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="schedule">Horário</label>
                        <input type="time" class="form-control" id="schedule" name="schedule"/>    
                    </div>
                    <div class="form-group col-12">
                        <label for="statusSchedule">Status <span class="text-5">*</span></label>
                        <select id="statusSchedule" class="form-control" name="status" required>
                            <option value="" disabled selected hidden>Selecione status da ligação</option>
                            <option value="Analisará a proposta">Analisará a proposta</option>
                            <option value="Conversará com a família">Conversará com a família</option>
                            <option value="Não tem o curso que deseja">Não tem o curso que deseja</option>
                            <option value="Não tem interesse">Não tem interesse</option>
                            <option value="Não entrei em contato">Não entrei em contato</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label for="additional_information">Informações adicionais</label>
                        <textarea id="additional_information" class="form-control" name="additional_information"></textarea>
                    </div>
                </div>
                <button type="submit" id="add" class="btn btn-outline-success" data-dismiss=" ">Salvar</button>            
            </form>
        </div>
    </div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
var contact_id = $('#contact_id').val()
$('#id').html('')

$.get("{{ route('searchInterestModal') }}", {contact_id:contact_id}, function(data) { 
    var iCount = data.dados.length
    for(i = 0 ; i <= iCount-1 ; i++){
        $('#id').append("<option value="+data.dados[i].id+">"+data.dados[i].course)
    }
})
</script>
<div class="modal fade" id="myModalEditCall" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Contato - Ligações<span class="text-5">* Campo obrigatório</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-dialog registerForm" id="updateFormCall">
            <div id="callback"></div>
            <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" name="contact_id" value="{{ $dados[0]->id }}">
                <input type="hidden" name="call_id_edit" id="call_id_edit">
                <div class="form-row">
                    
                    <div class="form-group col-6">
                        <label class="text-4" for="date_contact_edit">Data de contato <span>*</span></label>
                        <input type="date" id="date_contact_edit" class="form-control" readonly="readonly" name="date_contact" required/>
                    </div>
                    <div class="form-group col-6">
                        <label for="time">Horário <span class="text-5">*</span></label>
                        <input type="time" class="form-control" id= "time" name="time" required/>
                    </div>

                    <div class="form-group col-md-6 col-12">
                        <label class="text-4" for="date_return_edit">Data de retorno</label>
                        <input type="date" id="date_return_edit" class="form-control" readonly="readonly" name="date_return"/>    
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label class="text-4" for="schedule">Horário</label>
                        <input type="time" class="form-control" readonly="readonly" name="schedule" id="schedule_edit"/>    
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="statusSchedule">Status <span>*</span></label>
                        <select class="form-control" id="statusSchedule" readonly="readonly" name="status" required>
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
                        <label class="text-4" for="additional_information">Informações adicionais</label>
                        <textarea id="additional_information" class="form-control" name="additional_information"></textarea>
                    </div>
                </div>
                <input type="button" class="btnUpdateEditCall btn btn-primary" data-dismiss=" " value="Salvar">            
            </form>
        </div>
    </div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$('.btnUpdateEditCall').click(function(event) {
    /* Act on the event */            
    var form = $('#updateFormCall') 
    $.ajax({
        url: "{{ route('updateCall') }}",
        type: 'POST',
        data:form.serialize(),
        success:function(data){
            location.reload(true);
            // console.log(data)
         },
         error:function(xhr, status, error){
            console.log(status)
         }
    });
    
});

</script>
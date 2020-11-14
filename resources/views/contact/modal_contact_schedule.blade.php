
<div class="modal fade" id="myModalSchedule">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Contato - Ligações<span class="text-5">* Campo Obrigatório</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="contact-modal" action="{{ route('storeCall') }}" method="post">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" name="contact_id" value="{{ $dados[0]->id }}">
                <div class="form-row">
                    <div class="form-group col-12">
                        <label class="text-4" for="date_contact">Data do contato <span>*</span></label>
                        <input type="date" class="form-control" name="date_contact" required/>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="date_return">Data de retorno</label>
                        <input type="date" class="form-control" name="date_return" required/>    
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="schedule">Horário</label>
                        <input type="time" class="form-control" name="schedule" required/>    
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="statusSchedule">Status <span>*</span></label>
                        <select class="form-control" id="statusSchedule" name="status">
                            <option value="" selected>Selecione status da ligação</option>
                            <option value="Analisará a proposta">Analisará a proposta</option>
                            <option value="Conversará com a família">Conversará com a família</option>
                            <option value="Não tem o curso que deseja">Não tem o curso que deseja</option>
                            <option value="Não tem interesse">Não tem interesse</option>
                            <option value="Não entrei em contato">Não entrei em contato</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                </div>
                <div class="line-horizontal"></div>
                <button type="submit" id="add" class="btn btn-primary" data-dismiss=" ">Adicionar</button>            
            </form>
        </div>
    </div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
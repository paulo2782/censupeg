<div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Nova empresa parceira <span class="text-5-title">* Campo obrigatório</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form name="add_partner" class="form-dialog registerForm" action="{{ route('storePartner') }}" method="POST">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="name">Nome da empresa <span class="text-5">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Informe o nome da empresa" required />
                    </div>
                    <div class="form-group col-md-7 col-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="fulano@email.com" autocomplete="off" />
                    </div>
                    <div class="form-group col-md-5 col-12">
                        <label for="phone">Telefone <span class="text-5">*</span></label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="(00) 00000-0000" required />
                    </div>
                    <div class="form-group col-12">
                        <label for="statusPartner">Status <span class="text-5">*</span></label>
                        <select class="form-control" id="statusPartner" name="status" required>
                            <option value="" disabled selected hidden>Selecione o status da parceria</option>
                            <option value="Contrato">Contrato</option>
                            <option value="Analisará proposta">Analisará proposta</option>
                            <option value="Não tem interesse">Não tem interesse</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label for="observation">Informações adicionais</label>
                        <textarea class="form-control" id="observation" name="additional_information"></textarea>
                    </div>
                </div>
                <button type="submit" id="add" class="btn btn-outline-success" data-dismiss=" ">Salvar</button>            
            </form>
        </div>
   </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/partners.js') }}"></script>
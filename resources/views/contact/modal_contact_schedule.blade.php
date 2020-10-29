
<div class="modal fade" id="myModalSchedule">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h3 class="modal-title">Contato - Ligações</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <!-- Modal body -->
            <form class="form-dialog registerForm" id="contact-modal" action="#" method="post">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <div class="form-row">
                    <div class="form-group col-12">
                        <label class="text-4" for="name">Nome Completo</label>
                        <input type="text" class="form-control" name="name" value=""/>            
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="email">Data do contato</label>
                        <input type="date" class="form-control" name="date_contract" value=""/>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="phone">Data de retorno'</label>
                        <input type="text" class="form-control" name="date_return" value=""/>    
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="phone">Horário</label>
                        <input type="text" class="form-control" name="schedule" value=""/>    
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="phone">Status</label>
                        <input type="text" class="form-control" name="status" value=""/>    
                    </div>
                </div>
                <div class="line-horizontal"></div>
                <button type="submit" id="add" class="btn btn-primary" data-dismiss=" ">Adicionar</button>            
            </form>
        </div>
    </div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
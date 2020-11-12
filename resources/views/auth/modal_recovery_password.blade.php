
<div class="modal fade" id="myModalSchedule">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Recuperar senha</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="contact-modal" action="{{ route('storeCall') }}" method="post">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" name="contact_id" value="{{ $dados[0]->id }}">
                <div class="">
                    <p>Senha enviada com sucesso</p>
                    <p> 
                        Por favor, verifique seu email. Caso não encontre nosso e-mail em sua caixa de entrada, dê uma olhada na caixa de spam ou lixeira 
                    </p>
                <div> 
        </div>
    </div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
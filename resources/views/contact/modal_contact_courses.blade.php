 <div class="modal fade" id="myModalCourse">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h3 class="modal-title">Contato - Cursos</h3>
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
                        <label class="text-4">Nome Completo</label>
                        <input type="text" class="form-control" name="name" value=""/>            
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4">Curso</label>
                        <input type="text" class="form-control" name="course" value=""/>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="phone">Modalidade</label>
                        <input type="text" class="form-control" name="phone" value=""/>    
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="phone">Nível</label>
                        <input type="text" class="form-control" name="phone" value=""/>    
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="phone">Status</label>
                        <input type="text" class="form-control" name="phone" value=""/>    
                    </div>
                </div>
                <div class="line-horizontal"></div>
                <button type="submit" id="add" class="btn btn-primary">Adicionar</button>            
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

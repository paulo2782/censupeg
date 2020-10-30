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
                        <input type="text" class="form-control" id="nameModalCourse" name="name" readonly />            
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4">Curso</label>
                        <select class="c-select form-control">
                        @foreach($courses as $course)
                            <option value="{{ $course->course }}">{{ $course->course }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="modality">Modalidade</label>
                        <select class="c-select form-control">
                            <option value="ead">EAD</option>
                            <option value="semipresencial">Semipresencial</option>
                            <option value="presencial">Presencial</option>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="level">Nível</label>
                        <select class="c-select form-control">
                            <option value="">Selecione status</option>
                            <option value="graduacao">Graduação</option>
                            <option value="pós-graduacao">Pós-graduação</option>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="statusSchedule">Status</label>
                        <select class="c-select form-control" id="statusSchedule" name="status">
                            <option value="">Selecione status</option>
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

<div class="modal fade" id="myModalAdd" tabindex="0" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Novo mailing<span class="text-5-title">* Campo obrigatório</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="mailing-modal" action="#" method="post">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <div class="form-row">
                    <!--CONTATO-->
                    <div class="form-group col-10">
                        <label for="name">Nome completo <span class="text-5">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" 
                        placeholder= "Informe o nome" value="" required/>
                        @error('name') {{$message}} @enderror                                     
                    </div>
                    <div class="form-group col-2">
                        <label>&nbsp</label>
                        <input type="button" value="NOVO" class="btn btn-success form-control" id="btnNewContact">
                    </div>

                    <div class="form-group col-md-7 col-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="fulano@email.com" value="" / readonly>
                        @error('email') {{$message}} @enderror
                    </div>
                    <div class="form-group col-md-5 col-12">
                        <label for="phone">Telefone <span class="text-5">*</span></label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="(00)0000-0000" value="" readonly />    
                    </div>
                    <!--CURSO -->
                    <div class="form-group col-12">
                        <label for="course-interesting">Curso de interesse <span class="text-5">*</span></label>
                        <!-- <input type="text" class="form-control" id="course-interesting" name=""  -->
                        <!-- placeholder= "Informe o curso de interesse" value="" required />                          -->
                        <select class="c-select form-control" id="course" name="course_id">                            
                        @foreach($courses as $course)
                            <option value="">{{ $course->course }}</option>
                        @endforeach
                        </select>
                    </div>
                    <!--LIGAÇÃO-->
                    <div class="form-group col-md-6 col-12">
                        <label for="date-contact">Data de contato <span class="text-5">*</span></label>
                        <input type="date" class="form-control" id="date-contact" name="date-contact" placeholder="dd/mm/aaaa" value="" required />
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="hour-contact">Horário de contato <span class="text-5">*</span></label>
                        <input type="time" class="form-control" id="hour-contact" name="hour-contact" value="" required/>    
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="date-return">Data de retorno</label>
                        <input type="date" class="form-control" id="date-return" name="date-return" placeholder="dd/mm/aaaa" value=""/>
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="hour-return">Horário de retorno</label>
                        <input type="time" class="form-control" id="hour-return" name="hour-return" value="" />    
                    </div>
                    <div class="form-group col-12">
                        <label for="status-schedule">Status da ligação <span class="text-5">*</span></label>
                        <select id="status-schedule" class="form-control" name="status-schedule" required>
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
                        <label for="additional-information">Informações adicionais</label>
                        <textarea class="form-control" id="additional-information" name="additional-information">
                        </textarea>
  
                    </div>
                </div>       

                <button type="submit" id="add" class="btn btn-outline-success" data-dismiss=" ">Salvar</button>
            </form>
        </div>
    </div>
</div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    var availableTags = [
      "Paulo Soares",
      "João Manoel",
      "Janaina Gonçalves",
      "Manoel de Castro",
      "Paulo Oliveira",
      "Jose da Silva",
      "José Santos"
    ];
    $( "#name" ).autocomplete({
      source: availableTags
    });

    $('#btnNewContact').click(function(event) {
        /* Act on the event */
        alert('ABRIR MODAL NOVO CONTACT')
    });
  </script>
</head>
<body>

<style>
    .ui-autocomplete {
        position: absolute;
        z-index:1050 !important;
        }
</style>
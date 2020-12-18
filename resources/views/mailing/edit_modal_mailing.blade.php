<div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Editar mailing<span class="text-5-title">* Campo obrigatório</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="updateMailing">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

                <input type="hidden" name="call_id_edit" id="call_id_edit">    
                <input type="hidden" name="user_id_edit" value="{{ auth()->user()->id }}">
                <input type="hidden" name="contact_id_edit" id="contact_id_edit">

                <div class="form-row">
                    <!--CONTATO-->
                    <div class="form-group col-12">
                        <label for="name">Nome completo <span class="text-5">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name_edit" name="name_edit" 
                        placeholder= "Informe o nome" value="" required/>
                        @error('name') {{$message}} @enderror                                     
                    </div>
                    <div class="form-group col-md-7 col-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email_edit" name="email_edit" placeholder="fulano@email.com" value=""  readonly="" />
                        @error('email') {{$message}} @enderror
                    </div>
                    <div class="form-group col-md-5 col-12">
                        <label for="phone">Telefone <span class="text-5">*</span></label>
                        <input type="text" class="form-control" id="phone_edit" name="phone_edit" placeholder="(00) 0000-0000" value="" required readonly="" />    
                    </div>
                    <div class="form-group col-12">
                        <label for="course-interesting">Curso de interesse <span class="text-5">*</span></label>
                        <select class="c-select form-control" id="course_name_edit" name="course_id_edit">                            
                        </select>
                    </div>
                    <!--LIGAÇÃO-->
                    <div class="form-group col-md-6 col-12">
                        <label for="date-contact">Data de contato <span class="text-5">*</span></label>
                        <input type="date" class="form-control" id="date_contact_edit" name="date_contact_edit" placeholder="dd/mm/aaaa" value="" required />
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="hour-contact">Horário de contato <span class="text-5">*</span></label>
                        <input type="time" class="form-control" id="timeEdit" name="time_edit" value="" required/>    
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="date-return">Data de retorno</label>
                        <input type="date" class="form-control" id="date_return_edit" name="date_return_edit" placeholder="dd/mm/aaaa" value=""/>
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="hour-return">Horário de retorno</label>
                        <input type="time" class="form-control" id="schedule_edit" name="schedule_edit" value="" />    
                    </div>
                    <div class="form-group col-12">
                        <label for="status-schedule">Status da ligação <span class="text-5">*</span></label>
                        <select id="status_edit" class="form-control" name="status_edit" required>
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
                        <textarea class="form-control" id="additional_information_edit" name="additional_information_edit">
                        </textarea>
                    </div>
                </div>                    
                <button type="button" id="btnUpdateMailing" class="btn btn-outline-success" data-dismiss=" ">Salvar</button>            
            </form>
        </div>
    </div>
</div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('/js/contact.js?2') }}"></script>
<script src="{{ asset('/js/jquery.mask.js') }}"></script>

<script>
$('#btnUpdateMailing').click(function(event) {
    /* Act on the event */
    var form = $('#updateMailing') 

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
function completeField(){
    var str  = $('#name_edit').val()
    var re   = /ID:/g
    var iStr = str.length 
    var iRe  = str.search(re)
    var idContact = str.substr(iRe+4,iStr)

    $.ajax({
        url: "{{route('autoCompleteContact')}}",
        method:"GET",
        dataType: "json",
        data: {
                idContact : idContact
        },
        success: function(data){
            $('#email_edit').val(data.email)
            $('#phone_edit').val(data.phone)
            $('#contact_id_edit').val(data.contact_id)
        }
    });    
}

 $(document).ready(function($) {

    $( "#name_edit" ).autocomplete({
        source: function(request, response) {
            $.ajax({
            url: "{{route('searchContactAjax')}}",
            data: {
                    term : request.term
             },
            dataType: "json",
            success: function(data){
               var resp = $.map(data,function(obj){
                    return obj.name+' ID: '+obj.id;
               }); 
               response(resp);
            }
        });
    },
    minLength: 1
 });
});

$('#name_edit').click(function(event) {
    $('#name_edit').select()

})

$(this).click(function(event) {
    completeField()
});
$('#name_edit').blur(function(event) {
    completeField()
});   

</script>

<style>
    .ui-autocomplete {
        z-index: 1050;
    }
</style>
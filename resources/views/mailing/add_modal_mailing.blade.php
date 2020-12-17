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
            <form class="form-dialog registerForm" id="mailing-modal" action="{{ route('storeCall') }}" method="post">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <div class="form-row">
                    <!--CONTATO-->
                    <div class="form-group col-10">
                        <label for="name">Nome completo <span class="text-5">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="nameMailing" name="name" 
                        placeholder= "Informe o nome" value="" required/>
                        <input type="hidden"  id="contact_id" name="contact_id">

                        @error('name') {{$message}} @enderror                                     
                    </div>
                    <div class="form-group col-2">
                        <label>&nbsp</label>
                        <input type="button" value="Novo" class="btn btn-outline-success form-control" id="btnNewContact">
                    </div>

                    <div class="form-group col-md-7 col-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="fulano@email.com" value=""  readonly />
                        @error('email') {{$message}} @enderror
                    </div>
                    <div class="form-group col-md-5 col-12">
                        <label for="phone">Telefone <span class="text-5"></span></label>
                        <input type="text" class="form-control" id="phone_contact" placeholder="(00)0000-0000" value="" readonly required />    
                    </div>
                    <!--CURSO -->
                    <div class="form-group col-12">
                        <label for="course-interesting">Curso de interesse <span class="text-5">*</span></label>
                        <select class="c-select form-control" id="course" name="course_id">                            
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->course }}</option>
                        @endforeach
                        </select>
                    </div>
                    <!--LIGAÇÃO-->
                    <div class="form-group col-md-6 col-12">
                        <label for="date-contact">Data de contato <span class="text-5">*</span></label>
                        <input type="date" class="form-control" id="date_contact" name="date_contact" placeholder="dd/mm/aaaa" value="" required />
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="hour-contact">Horário de contato <span class="text-5">*</span></label>
                        <input type="time" class="form-control" id="time" name="time" value="" required/>    
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="date-return">Data de retorno</label>
                        <input type="date" class="form-control" id="date_return" name="date_return" placeholder="dd/mm/aaaa" value=""/>
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="hour-return">Horário de retorno</label>
                        <input type="time" class="form-control" id="schedule" name="schedule" value="" />    
                    </div>
                    <div class="form-group col-12">
                        <label for="status-schedule">Status da ligação <span class="text-5">*</span></label>
                        <select id="status" class="form-control" name="status" required>
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
                        <textarea class="form-control" id="additional_information" name="additional_information">
                        </textarea>
  
                    </div>
                </div>       

                <button type="submit" id="add" class="btn btn-outline-success" data-dismiss=" ">Salvar</button>
            </form>
        </div>
    </div>
</div>
@include('contact/modal')    

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('/js/contact.js?2') }}"></script>
<script src="{{ asset('/js/jquery.mask.js') }}"></script>

<script>

function completeFields(){
    $.ajax({
        url: "{{route('autoCompleteContact')}}",
        method:"GET",
        dataType: "json",
        data: {
                name : $('#nameMailing').val()
        },
        success: function(data){
            $('#email').val(data.email)
            $('#phone_contact').val(data.phone)
            $('#contact_id').val(data.contact_id)
        }
    });    
}
$('#btnNewContact').click(function(event) {
    $('#status').val($('#hiddenStatus').val());
    $('#contact_origin').val($('#hiddenContact_origin').val());
    $('#myModal').modal('toggle')
    

    $('#state').change(function(event) {
        let state = $('#state').val();
        $.get('https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+state+'/distritos', function(data) {
          $('#city').html('');
          $.each(data,function(index, el) {
            $('#city').append('<option>'+data[index].nome)
          });
        });
    });


});

 $(document).ready(function($) {
    $( "#nameMailing" ).autocomplete({
        source: function(request, response) {
            $.ajax({
            url: "{{route('searchContactAjax')}}",
            data: {
                    term : request.term
             },
            dataType: "json",
            success: function(data){
               var resp = $.map(data,function(obj){
                    return obj.name;
               }); 
               response(resp);
            }
        });
    },
    minLength: 1
 });

$('#nameMailing').click(function(event) {
    $('#nameMailing').select()

})

$('.ui-autocomplete').click(function(event) {
    completeFields()
});
$('#nameMailing').blur(function(event) {
    completeFields()
});   

});

</script>
</head>
<body>


<style>
    .ui-autocomplete {
        z-index: 1050;
    }
</style>
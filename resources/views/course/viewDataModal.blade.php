@section('content')
<script src="{{ asset('js/jquery.mask.js') }}"></script> 

<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Novo curso <span class="text-5-title">* Campo obrigatório</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="contact-modal" action="{{ route('storeCourse') }}" method="post">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <div class="form-row">
                    <div class="form-group col-12">
                        <div class="radio-course">
                            <label>
                                <input type="radio" name="level_course" id="level_course" value="Graduação" checked>
                                Graduação
                            </label>
                            <label>
                                <input type="radio" name="level_course" id="level_course" value="Pós-graduação">
                                Pós-graduação
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="name">Nome do curso <span class="text-5">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="course" name="course" placeholder="Informe o curso" value="{{Session::get('course')}}" required autocomplete="course"/>
                        @error('course') {{$message}} @enderror                                     
                    </div>
                    <div class="form-group col-12">
                        <input type="hidden" name="course_type" id="course_type">    
                        <label class="text-4" for="course_type">Modalidade <span class="text-5">*</span></label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="course_type[]" id="1" value="EAD" >
                            <label class="form-check-label d-block" for="ead">EAD</label>
                            <input class="form-check-input" type="checkbox" name="course_type[]" id="2" value="Presencial">
                            <label class="form-check-label d-block" for="presencial">Presencial</label>
                            <input class="form-check-input" type="checkbox" name="course_type[]" id="3" value="Semipresencial">
                            <label class="form-check-label d-block" for="semipresencial">Semipresencial</label>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label class="text-4" for="valueCourse">Valor</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="R$ 0,00" value="{{Session::get('price')}}" />
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label class="text-4" for="time_duration">Tempo de duração</label>
                        <input type="text" class="form-control" id="time_duration" name="time_duration" value="{{Session::get('time_duration')}}" />    
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="linkCourse">Link curso</label>
                        <input type="url" class="form-control" id="link" name="link" placeholder="http://www.exemplo.com.br" value="{{Session::get('link')}}"/>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="observation">Informações adicionais</label>
                        <textarea class="form-control" id="additional_information" name="additional_information">{{Session::get('additional_information')}}</textarea>
                    </div>
                </div>
                <button type="submit" id="add" class="btn btn-primary" data-dismiss=" ">Salvar</button>            
            </form>
        </div>
   </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(function() {
    $("#price").maskMoney({prefix:'R$ ', allowNegative: true, thousands:'', decimal:'.', affixesStay: false});
});

</script>
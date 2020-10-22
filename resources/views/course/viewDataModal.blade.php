@section('content')

<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Novo Curso</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div id="callback"></div>
            <!-- Modal body -->
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
                        <label class="h6" for="name">Nome do Curso</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="course" name="course" value="{{Session::get('course')}}" required autocomplete="course" autofocus/>
                        @error('course') {{$message}} @enderror                                     
                    </div>
                    <div class="form-group col-12">
                        <input type="hidden" name="course_type" id="course_type">    
                        <label class="h6" for="course_type">Modalidade</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="course_type[]" id="1" value="EAD" >
                            <label class="form-check-label d-block" for="ead">EAD</label>
                            <input class="form-check-input" type="checkbox" name="course_type[]" id="2" value="Presencial">
                            <label class="form-check-label d-block" for="presencial">Presencial</label>
                            <input class="form-check-input" type="checkbox" name="course_type[]" id="3" value="Semipresencial">
                            <label class="form-check-label d-block" for="semipresencial">Semipresencial</label>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label class="h6" for="observation">Informações adicionais</label>
                        <textarea class="form-control" id="additional_information" name="additional_information">{{Session::get('additional_information')}}</textarea>
                    </div>
                </div>
                <div class="line-horizontal"></div>
                <button type="submit" id="add" class="btn btn-primary" data-dismiss=" ">Salvar</button>            
            </form>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
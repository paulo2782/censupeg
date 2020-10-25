@section('content')

<div class="modal fade" id="myModal">
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
            <form class="form-dialog registerForm" id="contact-modal" action="{{ route('storeCourse') }}" method="post">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <div class="form-row">
                    <div class="form-group col-12">
                        <label class="text-4" for="name">Nome Completo</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="course" name="course" value="{{Session::get('course')}}" required autocomplete="course" autofocus/>
                        @error('course') {{$message}} @enderror                                     
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="name">Nome do Curso</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="course" name="course" value="{{Session::get('course')}}" required autocomplete="course" autofocus/>
                        @error('course') {{$message}} @enderror                                     
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="name">Modalidade</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="course" name="course" value="{{Session::get('course')}}" required autocomplete="course" autofocus/>
                        @error('course') {{$message}} @enderror                                     
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="name">Nível</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="course" name="course" value="{{Session::get('course')}}" required autocomplete="course" autofocus/>
                        @error('course') {{$message}} @enderror                                     
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="name">Status</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="course" name="course" value="{{Session::get('course')}}" required autocomplete="course" autofocus/>
                        @error('course') {{$message}} @enderror                                     
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
 
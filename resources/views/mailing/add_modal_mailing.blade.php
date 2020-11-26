@section('content')

<script src="{{ asset('js/jquery.mask.js') }}"></script> 
<script src="{{ asset('js/contact.js?(new Date()).getTime() ') }}"></script> 
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Novo Mailing<span class="text-5">* Campo Obrigatório</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="contact-modal" action="{{ route('store') }}" method="post">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <div class="form-row">
                    <div class="form-group col-12">
                        <label class="text-4" for="name">Nome Completo <span>*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" 
                               placeholder= "Informe o nome" value="{{Session::get('name')}}" required autocomplete="name" autofocus/>
                        @error('name') {{$message}} @enderror                                     
                    </div>
                    <div class="form-group col-md-7 col-12">
                        <label class="text-4" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{Session::get('email')}}" 
                               placeholder="fulano@email.com"/>
                        @error('email') {{$message}} @enderror
                    </div>
                    <div class="form-group col-md-5 col-12">
                        <label class="text-4" for="phone">Telefone <span>*</span></label>
                        <input type="text" class="form-control" id="phone" name="phone" 
                               placeholder= "(00)0000-0000" value="{{Session::get('phone')}}" required/>   
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
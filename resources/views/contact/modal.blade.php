@section('content')
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Novo Contato</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <!-- Modal body -->
            <form class="form-dialog registerForm" id="contact-modal" action="{{ route('store') }}" method="post">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label class="label-name" for="name">Nome Completo</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{Session::get('name')}}" required autocomplete="name" autofocus/>
                    @error('name') {{$message}} @enderror
                                     
                </div>
                <div class="form-row">
                <div class="form-group col-md-7">
                    <label class="label-name" for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{Session::get('email')}}" required />
                    @error('email') {{$message}} @enderror
                </div>
                <div class="form-group col-md-5">
                    <label class="label-name" for="phone">Telefone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{Session::get('phone')}}" required />    
                </div>
                </div>
                <div class="line-horizontal"></div>
                <div class="form-group">
                    <label class="label-name" for="contact-origin">Origem do contato</label>
                    <input type="hidden" name="hiddenContact_origin" id="hiddenContact_origin" value="{{Session::get('hiddenContact_origin')}}">
                    <select class="form-control" id="contact_origin" name="contact_origin" >
                        <option selected>Selecione</option>
                        <option value="ebook">E-book</option>
                        <option value="partner-business">Empresas parceiras</option>
                        <option value="ex-student">Ex-aluno</option>
                        <option value="facebook">Facebook</option>
                        <option value="flayer">Flayer</option>
                        <option value="indication">Indicação</option>
                        <option value="outdoor">Outdoor</option>
                        <option value="eventos">Palestra/Eventos</option>
                        <option value="presential-polo">Presencial pólo</option>
                        <option value="external-prospect">Prospecção externa</option>
                        <option value="site">Site</option>
                        <option value="sms">SMS</option>
                        <option value="whatsapp">Whatsapp</option>
                        <option value="visit">Visita</option>
                        <option value="other">Outros</option>
                    </select>
                </div>
                <div class="line-horizontal"></div>
                <div class="form-group">
                <input type="hidden" name="interest_course" id="interest_course">
                    
                <label class="label-name" for="interest-course">Curso de interesse</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="administracao" value="Administração" >
                    <label class="form-check-label" for="administracao">Administração</label>
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="analise_desenvolvimento_sistema" value="Análise e Desenvolvimento de Sistema">
                    <label class="form-check-label" for="analise_desenvolvimento_sistema">Análise e Desenvolvimento de Sistema</label>
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="ciencias_contabeis" value="Ciências Contábeis">
                    <label class="form-check-label" for="ciencias_contabeis">Ciências Contábeis</label>
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="educacao_especial" value="Educação Especial">
                    <label class="form-check-label" for="educacao_especial">Educação Especial</label>
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="gestao_ambiental" value="Gestão Ambiental">
                    <label class="form-check-label" for="gestao_ambiental">Gestão Ambiental</label>
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="gestao_financeira" value="Gestão Financeira">
                    <label class="form-check-label" for="gestao_financeira">Gestão Financeira</label>
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="historia" value="História">
                    <label class="form-check-label" for="historia">História</label>
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="letras" value="Letras - Língua Portuguesa">
                    <label class="form-check-label" for="letras">Letras - Língua Portuguesa</label>
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="logistica" value="Logística">
                    <label class="form-check-label" for="logistica">Logística</label>
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="matematica" value="Matemática">
                    <label class="form-check-label" for="matematica">Matemática</label>
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="pedagogia" value="Pedagogia">
                    <label class="form-check-label" for="pedagogia">Pedagogia</label>
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="processos_gerenciais" value="Processos Gerenciais">
                    <label class="form-check-label" for="processos_gerenciais">Processos Gerenciais</label>
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="recursos_humanos" value="Recursos Humanos">
                    <label class="form-check-label" for="recursos_humanos">Recursos Humanos</label>
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="saude" value="Saúde">
                    <label class="form-check-label" for="saude">Saúde</label>
                    <br />
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="educacao-ead" value="Educação - EAD">
                    <label class="form-check-label" for="educacao-ead">Educação - EAD</label>
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="gestao-negocios-ead" value="Gestão de negócios - EAD">
                    <label class="form-check-label" for="gestao-negocios-ead">Gestão de negócios - EAD</label>
                    <br />
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="aba" value="ABA - PÓS Presencial">
                    <label class="form-check-label" for="aba">ABA - PÓS Presencial</label>
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="arteterapia" value="Arteterapia - PÓS Presencial">
                    <label class="form-check-label" for="arteterapia">Arteterapia - PÓS Presencial</label>
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="duo-neuropsicopedagogia" value="Duo Neuropsicopedagogia - PÓS Presencial">
                    <label class="form-check-label" for="duo-neuropsicopedagogia">Duo Neuropsicopedagogia - PÓS Presencial</label>
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="mba" value="MBA - PÓS Presencial">
                    <label class="form-check-label" for="mba">MBA - PÓS Presencial</label>
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="musicoterapia" value="Musicoterapia - PÓS Presencial">
                    <label class="form-check-label" for="musicoterapia">Musicoterapia - PÓS Presencial</label>
                    <input class="form-check-input" type="checkbox" name="interest_course[]" id="saude-pos" value="Saúde - PÓS Presencial">
                    <label class="form-check-label" for="saude-pos">Saúde - PÓS Presencial </label>
                    <br/>
                    <input class="form-check-input" type="checkbox" id="outra-opcao" value="" onclick="habilitar_outros()">
                    <label class="form-check-label" for="outra-opcao">Outros</label>
                    <input type="text" class="form-control" name="other_course" id="outro-curso" style="display:none" value="{{Session::get('other_course')}}" />
                </div>
                </div>

                <div class="line-horizontal"></div>
                <div class="form-row">
                <div class="form-group col-auto">
                    <label class="label-name" for="contact-date">Data contato</label>
                    <input type="date" class="form-control" id="date_contact" name="date_contact" value="{{Session::get('date_contact')}}" required />
                </div>
                <div class="form-group col-auto">
                    <label class="label-name" for="contact-date">Retorno agendado</label>
                    <input type="date" class="form-control" id="scheduled_return" name="scheduled_return" value="{{Session::get('scheduled_return')}}"required />
                </div>
                <div class="form-group col-auto">
                    <label class="label-name" for="contact-date">Horário</label>
                    <input type="time" class="form-control" id="schedule" name="schedule" value="{{Session::get('schedule')}}" required />
                </div>
                </div>
                <div class="line-horizontal"></div>
                <div class="form-group">
                <label class="label-name" for="status-return">Status</label>
                <input type="hidden" name="hiddenStatus" id="hiddenStatus" value="{{Session::get('status')}}">
                <select class="form-control sss" name="status" id="status">
                    <option >Selecione</option>
                    <option value="Analisando proposta">Analisando proposta</option>
                    <option value="Vai conversar com familiar">Vai conversar com familiar</option>
                    <option value="Não tem o curso que deseja">Não tem o curso que deseja</option>
                    <option value="não tem interesse">Não tem interesse</option>
                    <option value="Não tem interesse">No momento não tem interesse</option>
                    <option value="Não conversamos">Não conversamos</option>
                    <option value="Parou de responder">Parou de responder</option>
                    <option value="Outros">Outros</option>
                </select>
                </div>
                <div class="line-horizontal"></div>
                <div class="form-group">
                    <label class="label-name" for="observation">Informações adicionais</label>
                    <textarea class="form-control" id="additional_information" name="additional_information">{{Session::get('additional_information')}}</textarea>
                </div>
                <div class="line-horizontal"></div>
                <button type="submit" id="add" class="btn-form"    data-dismiss=" ">Salvar</button>
                <button type="reset"  id="cancel" class="btn-form" data-dismiss="modal">Cancelar</button>
            </form>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
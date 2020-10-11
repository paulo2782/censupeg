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
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <div class="form-row">
                    <div class="form-group col-12">
                        <label class="h6" for="name">Nome Completo</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{Session::get('name')}}" required autocomplete="name" autofocus/>
                        @error('name') {{$message}} @enderror                                     
                    </div>
                    <div class="form-group col-md-7 col-12">
                        <label class="h6" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{Session::get('email')}}" required />
                        @error('email') {{$message}} @enderror
                    </div>
                    <div class="form-group col-md-5 col-12">
                        <label class="h6" for="phone">Telefone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{Session::get('phone')}}" required />    
                    </div>
                </div>
                 <div class="line-horizontal"></div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label class="h6" for="contact-origin">Escolaridade</label>
                        <select class="form-control" id="schooling" name="schooling">
                            <option value="1">Escolaridade ....</option>
                        </select>
                    </div>
                </div>
                <div class="line-horizontal"></div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label class="h6" for="contact-origin">Estado</label>
                        <select class="form-control" id="state" name="state">
                            <option value="">Selecione um Estado</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MT">MT</option>
                            <option value="MS">MS</option>
                            <option value="MG">MG</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                            <option value="SE">SE</option>
                            <option value="TO">TO</option>
                            <option value="DF">DF</option>                            
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label class="h6" for="contact-origin">Cidade</label>
                        <select class="form-control" id="city" name="city"></select>
                    </div>
                </div>


                <div class="line-horizontal"></div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label class="h6" for="contact-origin">Origem do contato</label>
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
                </div>

                
<!--                 <div class="line-horizontal"></div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <input type="hidden" name="interest_course" id="interest_course">    
                        <label class="h6" for="interest-course">Curso de interesse</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="1" value="1" >
                            <label class="form-check-label d-block" for="administracao">Administração</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="2" value="2">
                            <label class="form-check-label d-block" for="analise_desenvolvimento_sistema">Análise e Desenvolvimento de Sistema</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="3" value="3">
                            <label class="form-check-label d-block" for="ciencias_contabeis">Ciências Contábeis</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="4" value="4">
                            <label class="form-check-label d-block" for="educacao_especial">Educação Especial</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="5" value="5">
                            <label class="form-check-label d-block" for="gestao_ambiental">Gestão Ambiental</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="6" value="6">
                            <label class="form-check-label d-block" for="gestao_financeira">Gestão Financeira</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="7" value="7">
                            <label class="form-check-label d-block" for="historia">História</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="8" value="8">
                            <label class="form-check-label d-block" for="letras">Letras - Língua Portuguesa</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="9" value="9">
                            <label class="form-check-label d-block" for="logistica">Logística</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="10" value="10">
                            <label class="form-check-label d-block" for="matematica">Matemática</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="11" value="11">
                            <label class="form-check-label d-block" for="pedagogia">Pedagogia</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="12" value="12">
                            <label class="form-check-label d-block" for="processos_gerenciais">Processos Gerenciais</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="13" value="13">
                            <label class="form-check-label d-block" for="recursos_humanos">Recursos Humanos</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="14" value="14">
                            <label class="form-check-label d-block" for="saude">Saúde</label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="15" value="15">
                            <label class="form-check-label d-block" for="educacao-ead">Educação - EAD</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="16" value="16">
                            <label class="form-check-label d-block" for="gestao-negocios-ead">Gestão de negócios - EAD</label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="17" value="17">
                            <label class="form-check-label d-block" for="aba">ABA - PÓS Presencial</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="18" value="18">
                            <label class="form-check-label d-block" for="arteterapia">Arteterapia - PÓS Presencial</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="19" value="19">
                            <label class="form-check-label d-block" for="duo-neuropsicopedagogia">Duo Neuropsicopedagogia - PÓS Presencial</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="20" value="20">
                            <label class="form-check-label d-block" for="mba">MBA - PÓS Presencial</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="21" value="21">
                            <label class="form-check-label d-block" for="musicoterapia">Musicoterapia - PÓS Presencial</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="22" value="22">
                            <label class="form-check-label d-block" for="saude-pos">Saúde - PÓS Presencial </label>
                            <br/>
                            <input class="form-check-input" type="checkbox" id="outra-opcao" value="" onclick="habilitar_outros()">
                            <label class="form-check-label" for="outra-opcao">Outros</label>
                            <input type="text" class="form-control mt-2" name="other_course" id="outro-curso" style="display:none" value="{{Session::get('other_course')}}" />
                        </div>
                    </div>
                </div> 
                <div class="line-horizontal"></div>
                <div class="form-row">
                    <div class="form-group col-md-auto col-6">
                        <label class="h6" for="contact-date">Data contato</label>
                        <input type="date" class="form-control" id="date_contact" name="date_contact" value="{{Session::get('date_contact')}}" required />
                    </div>
                    <div class="form-group col-md-auto col-6">
                        <label class="h6" for="contact-date">Retorno agendado</label>
                        <input type="date" class="form-control" id="scheduled_return" name="scheduled_return" value="{{Session::get('scheduled_return')}}"/>
                    </div>
                    <div class="form-group col-md-auto col-6">
                        <label class="h6" for="contact-date">Horário</label>
                        <input type="time" class="form-control" id="schedule" name="schedule" value="{{Session::get('schedule')}}"/>
                    </div>
                </div>
                <div class="line-horizontal"></div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label class="h6" for="status-return">Status</label>
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
                </div>-->
                <div class="line-horizontal"></div>
                <div class="form-row">
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
 
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Novo contato<span class="text-5-title">* Campo obrigatório</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="contact-modal" action="{{ route('store') }}" method="post">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="who" id="who">

                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="name">Nome completo <span class="text-5">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" 
                               placeholder= "Informe o nome" value="{{Session::get('name')}}" required/>
                        @error('name') {{$message}} @enderror                                     
                    </div>
                    <div class="form-group col-md-7 col-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{Session::get('email')}}" 
                               placeholder="fulano@email.com"/>
                        @error('email') {{$message}} @enderror
                    </div>
                    <div class="form-group col-md-5 col-12">
                        <label for="phone">Telefone <span class="text-5">*</span></label>
                        <input type="text" class="form-control" id="phone" name="phone" 
                               placeholder= "(00) 0000-0000" value="{{Session::get('phone')}}" required/>   
                    </div>
                    <div class="form-group col-12">
                        <label for="schooling">Escolaridade <span class="text-5">*</span></label>
                        <select class="form-control" id="schooling" name="schooling" required>
                            <option value="" disabled selected hidden>Selecione a escolaridade</option>
                            <option value="Ensino médio incompleto">Ensino médio incompleto</option>
                            <option value="Ensino médio completo">Ensino médio completo</option>
                            <option value="Ensino superior incompleto">Ensino superior incompleto</option>
                            <option value="Ensino superior completo">Ensino superior completo</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="state">Estado <span class="text-5">*</span></label>
                        <select class="form-control" id="state" name="state" required>
                            <option value="" disabled selected hidden>Selecione o Estado</option>
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
                    <div class="form-group col-md-6 col-12">
                        <label for="city">Cidade <span class="text-5">*</span></label>
                        <select class="form-control" id="city" name="city" required></select>
                    </div>
                    <div class="form-group col-12">
                        <label for="contact_origin">Origem do contato <span class="text-5">*</span></label>
                        <input type="hidden" name="hiddenContact_origin" id="hiddenContact_origin" value="{{Session::get('hiddenContact_origin')}}">
                        <select class="form-control" id="contact_origin" name="contact_origin" required>
                            <option value="" disabled selected hidden>Selecione a origem do contato</option>
                            <option value="E-book">E-book</option>
                            <option value="Empresas Parceiras">Empresas parceiras</option>
                            <option value="ex-aluno">Ex-aluno</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Flayer">Flayer</option>
                            <option value="Indicação">Indicação</option>
                            <option value="Outdoor">Outdoor</option>
                            <option value="Palestra/Eventos">Palestra/Eventos</option>
                            <option value="Presencial pólo">Presencial pólo</option>
                            <option value="Prospecção externa">Prospecção externa</option>
                            <option value="Site">Site</option>
                            <option value="SMS">SMS</option>
                            <option value="Whatsapp">Whatsapp</option>
                            <option value="Visita">Visita</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label for="additional_information">Informações adicionais</label>
                        <textarea class="form-control" id="additional_information" name="additional_information">{{Session::get('additional_information')}}</textarea>
                    </div>
                </div>                
                <button type="submit" id="add" class="btn btn-outline-success" data-dismiss=" ">Salvar</button>            
            </form>
        </div>
    </div>
</div>

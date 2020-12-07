<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Editar Contato<span class="text-5">* Campo Obrigatório</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="contact-modal" action="{{ route('updateContact',$dados[0]->id) }}" method="post">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="name">Nome Completo <span>*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="namxe" name="name" 
                        placeholder= "Informe o nome" value="{{ $dados[0]->name }}" required autocomplete="name" autofocus/>
                        @error('name') {{$message}} @enderror                                     
                    </div>
                    <div class="form-group col-md-7 col-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="fulano@email.com" value="{{ $dados[0]->email }}" />
                        @error('email') {{$message}} @enderror
                    </div>
                    <div class="form-group col-md-5 col-12">
                        <label for="phone">Telefone <span>*</span></label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="(00)0000-0000" value="{{ $dados[0]->phone }}" required />    
                    </div>
                    <div class="form-group col-12">
                        <input type="hidden" id="schoolingData" value="{{ $dados[0]->schooling }}"/>    
                        <label for="schooling">Escolaridade <span>*</span></label>
                        <select class="form-control schooling" id="schooling" name="schooling" required>
                            <option value="" disabled selected hidden>Selecione a escolaridade</option>
                            <option value="Ensino médio incompleto">Ensino médio incompleto</option>
                            <option value="Ensino médio completo">Ensino médio completo</option>
                            <option value="Ensino superior incompleto">Ensino superior incompleto</option>
                            <option value="Ensino superior completo">Ensino superior completo</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <input type="hidden" id="stateData" value="{{ $dados[0]->state }}"/>  
                        <label for="state">Estado <span>*</span></label>
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
                        <input type="hidden" id="cityData" value="{{ $dados[0]->city }}"/> 
                        <label for="city">Cidade <span>*</span></label>
                        <select class="form-control" id="city" name="city" required></select>
                    </div>
                    <div class="form-group col-12">
                        <label for="contactOrigin">Origem do contato <span>*</span></label>
                        <input type="hidden" id="contactOriginData" value="{{ $dados[0]->contact_origin }}">
                        <select class="form-control" id="contactOrigin" name="contact_origin" required>
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
                        <textarea class="form-control" id="additional_information" name="additional_information">{{ $dados[0]->additional_information }}
                        </textarea>
                    </div>
                </div>                
                <button type="submit" id="add" class="btn btn-outline-success" data-dismiss=" ">Salvar</button>            
            </form>
        </div>
    </div>
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 

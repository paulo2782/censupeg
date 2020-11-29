<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Editar Mailing<span class="text-5">* Campo Obrigatório</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="contact-modal" action="#" method="post">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <div class="form-row">
                    <div class="form-group col-12">
                        <label class="text-4" for="name">Nome Completo <span>*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="namxe" name="name" 
                        placeholder= "Informe o nome" value="#" required autocomplete="name" autofocus/>
                        @error('name') {{$message}} @enderror                                     
                    </div>
                    <div class="form-group col-md-7 col-12">
                        <label class="text-4" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="fulano@email.com" value="#" />
                        @error('email') {{$message}} @enderror
                    </div>
                    <div class="form-group col-md-5 col-12">
                        <label class="text-4" for="phone">Telefone <span>*</span></label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="(00)0000-0000" value="#" required />    
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" >Origem do contato <span>*</span></label>
                        <input type="hidden" id="contactOriginData" value="#">
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
                </div>
                <div class="line-horizontal"></div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label class="text-4" for="name">Curso de interesse <span>*</span></label>
                        <input type="text" class="form-control" id="#" name="#" 
                        placeholder= "Informe o curso de interesse" value="#" required autofocus/>                         
                    </div>
                </div>
                <div class="line-horizontal"></div>
                <div class="form-row">
                    <div class="form-group col-md-6 col-12">
                        <label class="text-4" for="email">Data de contato</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="dd/mm/aaaa" value="#" />
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label class="text-4" for="phone">Data retorno <span>*</span></label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="dd/mm/aaaa" value="#" required />    
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="name">Status <span>*</span></label>
                        <input type="text" class="form-control" id="#" name="#" 
                        placeholder= "Selecione status" value="#" required autofocus/>                         
                    </div>
                </div>
                <div class="line-horizontal"></div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label class="text-4" for="observation">Informações adicionais</label>
                        <textarea class="form-control" id="additional_information" name="additional_information">#
                        </textarea>
                    </div>
                </div>                    
                <div class="line-horizontal"></div>
                <button type="submit" id="add" class="btn btn-outline-success" data-dismiss=" ">Salvar</button>            
            </form>
        </div>
    </div>
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 

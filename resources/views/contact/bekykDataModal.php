<div class="modal fade" id="myModalBekykData">
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
                <div class="form-row">
                    <div class="form-group col-12">
                        <label class="h6" for="name">Nome Completo</label>
                        <input type="text" class="form-control" id="bekykDataName" readonly />
                    </div>
                    <div class="form-group col-md-7 col-12">
                        <label class="h6" for="email">Email</label>
                        <input type="email" class="form-control" id="bekykDataEmail" readonly/>
                    </div>
                    <div class="form-group col-md-5 col-12">
                        <label class="h6" for="phone">Telefone</label>
                        <input type="text" class="form-control" id="bekykDataPhone" readonly/>    
                    </div>
                </div>
                <div class="line-horizontal"></div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label class="h6" for="contact-origin">Origem do contato</label>
                        <select class="form-control" id="bekykDataContact_origin" readonly>
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
                <div class="line-horizontal"></div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <input type="hidden" name="interest_course" id="interest_course">    
                        <label class="h6" for="interest-course">Curso de interesse</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="1" value="Administração" disabled="true">
                            <label class="form-check-label d-block" for="administracao">Administração</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="2" value="Análise e Desenvolvimento de Sistema" disabled="true">
                            <label class="form-check-label d-block" for="analise_desenvolvimento_sistema">Análise e Desenvolvimento de Sistema</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="3" value="Ciências Contábeis" disabled="true">
                            <label class="form-check-label d-block" for="ciencias_contabeis">Ciências Contábeis</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="4" value="Educação Especial" disabled="true">
                            <label class="form-check-label d-block" for="educacao_especial">Educação Especial</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="5" value="Gestão Ambiental" disabled="true">
                            <label class="form-check-label d-block" for="gestao_ambiental">Gestão Ambiental</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="6" value="Gestão Financeira" disabled="true">
                            <label class="form-check-label d-block" for="gestao_financeira">Gestão Financeira</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="7" value="História" disabled="true">
                            <label class="form-check-label d-block" for="historia">História</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="8" value="Letras - Língua Portuguesa" disabled="true">
                            <label class="form-check-label d-block" for="letras">Letras - Língua Portuguesa</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="9" value="Logística" disabled="true">
                            <label class="form-check-label d-block" for="logistica">Logística</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="10" value="Matemática" disabled="true">
                            <label class="form-check-label d-block" for="matematica">Matemática</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="11" value="Pedagogia" disabled="true">
                            <label class="form-check-label d-block" for="pedagogia">Pedagogia</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="12" value="Processos Gerenciais" disabled="true">
                            <label class="form-check-label d-block" for="processos_gerenciais">Processos Gerenciais</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="13" value="Recursos Humanos" disabled="true">
                            <label class="form-check-label d-block" for="recursos_humanos">Recursos Humanos</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="14" value="Saúde" disabled="true">
                            <label class="form-check-label d-block" for="saude">Saúde</label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="15" value="Educação - EAD" disabled="true">
                            <label class="form-check-label d-block" for="educacao-ead">Educação - EAD</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="16" value="Gestão de negócios - EAD" disabled="true">
                            <label class="form-check-label d-block" for="gestao-negocios-ead">Gestão de negócios - EAD</label>
                            <br />
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="17" value="ABA - PÓS Presencial" disabled="true">
                            <label class="form-check-label d-block" for="aba">ABA - PÓS Presencial</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="18" value="Arteterapia - PÓS Presencial" disabled="true">
                            <label class="form-check-label d-block" for="arteterapia">Arteterapia - PÓS Presencial</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="19" value="Duo Neuropsicopedagogia - PÓS Presencial" disabled="true">
                            <label class="form-check-label d-block" for="duo-neuropsicopedagogia">Duo Neuropsicopedagogia - PÓS Presencial</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="20" value="MBA - PÓS Presencial" disabled="true">
                            <label class="form-check-label d-block" for="mba">MBA - PÓS Presencial</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="21" value="Musicoterapia - PÓS Presencial" disabled="true">
                            <label class="form-check-label d-block" for="musicoterapia">Musicoterapia - PÓS Presencial</label>
                            <input class="form-check-input" type="checkbox" name="interest_course[]" id="22" value="Saúde - PÓS Presencial" disabled="true">
                            <label class="form-check-label d-block" for="saude-pos">Saúde - PÓS Presencial </label>
                            <br/>
                            <!-- <input class="form-check-input" type="checkbox" id="outra-opcao" value="" onclick="habilitar_outros()"> -->
                            <label class="form-check-label" for="outra-opcao" disabled="true">Outros</label>
                            <input type="text" class="form-control mt-2" name="other_course" id="outro-curso" value="" readonly />
                        </div>
                    </div>
                </div>
                <div class="line-horizontal"></div>
                <div class="form-row">
                    <div class="form-group col-md-4 col-6">
                        <label class="h6" for="contact-date">Data contato</label>
                        <input type="date" class="form-control" id="bekykDataDate_contact" readonly />
                    </div>
                    <div class="form-group col-md-4 col-6">
                        <label class="h6" for="contact-date">Retorno agendado</label>
                        <input type="date" class="form-control" id="bekykDataScheduled_return" readonly />
                    </div>
                    <div class="form-group col-md-3 col-6">
                        <label class="h6" for="contact-date">Horário</label>
                        <input type="time" class="form-control" id="bekykDataSchedule" readonly />
                    </div>
                </div>
                <div class="line-horizontal"></div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label class="h6" for="status-return">Status</label>
                        <select class="form-control" id="bekykDataStatus" readonly>
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
                </div>
                <div class="line-horizontal"></div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label class="h6" for="observation">Informações adicionais</label>
                        <textarea class="form-control" id="bekykDataAdditional_information" readonly></textarea>
                    </div>
                </div>                
                <div class="line-horizontal"></div>
                <!-- <button type="submit" id="add" class="btn-form"    data-dismiss=" ">Salvar</button> -->
                <!-- <button type="reset"  id="cancel" class="btn-form" data-dismiss="modal">Cancelar</button> -->
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
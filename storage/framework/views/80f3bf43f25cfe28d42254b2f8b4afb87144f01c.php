 <div class="modal fade" id="myModalEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Editar empresa parceira <span class="text-5-title">* Campo obrigatório</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="updatePartner" method="POST" action="<?php echo e(route('updatePartner')); ?>">
                <?php echo e(method_field('PUT')); ?>

                <?php echo csrf_field(); ?>

 
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="edtName">Nome da empresa <span class="text-5">*</span></label>
                        <input type="text" class="form-control" id="edtName" name="name" placeholder="Informe o nome da empresa" required />
                    </div>
                    <div class="form-group col-md-7 col-12">
                        <label for="edtEmail">Email </label>
                        <input type="email" class="form-control" id="edtEmail" name="email" placeholder="fulano@email.com" autocomplete="off" />
                    </div>
                    <div class="form-group col-md-5 col-12">
                        <label for="edtPhone">Telefone <span class="text-5">*</span></label>
                        <input type="text" class="form-control" id="edtPhone" name="phone" placeholder="(00) 00000-0000" required />
                    </div>
                    <div class="form-group col-12">
                        <label for="statusPartner">Status <span class="text-5">*</span></label>
                        <select class="form-control" id="edtStatus" name="status" required>
                            <option value="" disabled selected hidden>Selecione o status da parceria</option>
                            <option value="Contrato">Contrato</option>
                            <option value="Analisará proposta">Analisará proposta</option>
                            <option value="Não tem interesse">Não tem interesse</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label for="edtAdditional_information">Informações adicionais</label>
                        <textarea class="form-control" id="edtAdditional_information" name="additional_information"></textarea>
                    </div>
                </div>
                <input type="hidden" id="id_partner" name="id"> 
                <button type="submit" id="#" class="btn btn-outline-success" data-dismiss=" ">Salvar</button>                            
            </form>
        </div>
   </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo e(asset('js/partners.js')); ?>"></script><?php /**PATH C:\censupeg\resources\views/partners-business/edit_modal_partner.blade.php ENDPATH**/ ?>
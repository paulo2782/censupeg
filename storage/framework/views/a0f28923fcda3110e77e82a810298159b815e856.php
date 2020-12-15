<div class="modal fade" id="myModalAdd">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Novo usuário <span class="text-5-title">* Campo obrigatório</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="contact-modal" action="<?php echo e(route('register')); ?>" method="post">
                <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="id" value="<?php echo e(auth()->user()->id); ?>">
                <div class="form-row">       
                    <div class="form-group col-12">
                        <label for="level">Tipo de usuário <span class="text-5">*</span></label>
                        <select class="c-select form-control" id= "level" name="level" required>
                            <option value="" disabled selected hidden>Selecione tipo de usuário</option>
                            <option value="0">Operador</option>
                            <option value="1">Administrador</option>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label for="name"><?php echo e(__('Name')); ?> <span class="text-5">*</span></label>
                        <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required placeholder="Informe seu nome">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group col-12">
                        <label for="email"><?php echo e(__('E-Mail Address')); ?> <span class="text-5">*</span></label>
                        <input type="email"  id="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="off" placeholder="Informe seu email">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="password"><?php echo e(__('Password')); ?> <span class="text-5">*</span></label>
                        <input type="password" id="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="off" placeholder="Informe sua senha">
                        <span toggle="#password" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="password-confirm"><?php echo e(__('Confirm Password')); ?> <span class="text-5">*</span></label>
                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="off" placeholder="Confirme sua senha">
                        <span toggle="#password-confirm" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                    </div>
                </div>
                <button type="submit" id="#" class="btn btn-outline-success" data-dismiss=" ">Salvar</button>            
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo e(asset('/js/users.js')); ?>"></script>
<?php /**PATH C:\censupeg\resources\views/users/add_modal_user.blade.php ENDPATH**/ ?>


<?php $__env->startSection('content'); ?>
<div id="login">
    <div class="container">
        <img class="login-img my-4" src="<?php echo e(asset('img/logo-censupeg.png')); ?>" alt="Logo censupeg">
        <h1 class="my-2 text-center">Alterar senha </h1>
        <form method="POST" action="<?php echo e(route('updatePassword')); ?>">
            <?php echo csrf_field(); ?>
            <span id="message"><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <p><b><?php echo e($error); ?></b></p> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></span>
            <input type="hidden" name="token" value="<?php echo e($token); ?>">
            <div class="form-group">
                <label for="password">Nova senha</label>
                <input id="password" type="password" class="form-control" name="password" value="" required />
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirme nova senha</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme sua senha">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">
                    Salvar
                </button>
            </div>
            <div class="mt-2">
                <div class="d-flex justify-content-center text-4">
                    Voltar para a página de login? 
                    <a href="<?php echo e(route('home')); ?>" class="ml-2 login-a">Clique aqui</a>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\censupeg\resources\views/auth/alter_new_password.blade.php ENDPATH**/ ?>
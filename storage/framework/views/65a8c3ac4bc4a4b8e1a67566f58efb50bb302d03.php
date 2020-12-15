
<form method="POST" action="<?php echo e(route('login')); ?>">
<?php echo csrf_field(); ?>

<div id="login">
    <div class="container">
        <img class="login-img my-4" src="img/logo-censupeg.png" alt="Logo censupeg">
        <h1 class="my-2 text-center">Acesse sua conta </h1>
        <form name="frmLogin" id="frmLogin">
            <div class="form-group">
                <label for="email">Usuário</label>
                <?php if(isset($_COOKIE['user'])): ?>                  
                <input type="email" name="email" id="email" placeholder="Informe seu email" class="form-control" value="<?php echo e(Cookie::get('user')); ?>">
                <?php else: ?>
                <input type="email" name="email" id="email" placeholder="Informe seu email" class="form-control">
                <?php endif; ?> 
            </div>
            <div class="form-group">
                <label for="password" >Senha</label>
                <?php if(isset($_COOKIE['user'])): ?>
                <input type="password" id="password" class="form-control" name="password" value="<?php echo e(Cookie::get('password')); ?>" placeholder="Informe sua senha" />
                <span toggle="#password" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                <?php else: ?>
                <input type="password" id="password" class="form-control" name="password" placeholder="Informe sua senha" >
                <span toggle="#password" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary form-control"> 
                <?php echo e(__('Login')); ?>

            </button>
            <div class="form-group mt-2">
                <div class="form-check">
                <?php if(isset($_COOKIE['user'])): ?>
                    <input type="checkbox" class="form-check-input" id="checkLogin" name="remember" checked="true">
                <?php else: ?>
                    <input type="checkbox" class="form-check-input" id="checkLogin" name="remember">
                <?php endif; ?>

                    <label class="form=check-label" for="checkLogin">Lembrar senha</label>
                </div>
            </div>
            <div class="mt-2">
                <div class="d-flex justify-content-center text-4">
                    <a href="recovery-password" class="mt-2 login-a">Esqueceu sua senha?</a>
                </div>
            </div>                        
            <div id="message">
                <div class="text-center"> <?php $__errorArgs = ['messages'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></div>
            </div>  
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo e(asset('js/function.js')); ?>"></script>
<script src="<?php echo e(asset('js/login.js')); ?>"></script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\censupeg\resources\views/auth/login.blade.php ENDPATH**/ ?>
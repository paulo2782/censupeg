<?php $__env->startSection('content'); ?>
<script src="<?php echo e(asset('js/jquery.maskMoney.js')); ?>"></script> 
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Novo Curso <span class="text-5-title">* Campo Obrigatório</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="contact-modal" action="<?php echo e(route('storeCourse')); ?>" method="post">
                <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="id" value="<?php echo e(auth()->user()->id); ?>">
                <div class="form-row">
                    <div class="form-group col-12">
                        <div class="radio-course">
                            <label>
                                <input type="radio" name="level_course" id="level_course" value="Graduação" checked>
                                Graduação
                            </label>
                            <label>
                                <input type="radio" name="level_course" id="level_course" value="Pós-graduação">
                                Pós-graduação
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="course">Nome do Curso <span class="text-5">*</span></label>
                        <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="course" name="course" value="<?php echo e(Session::get('course')); ?>" 
                               placeholder="Informe o curso" required autocomplete="course" autofocus/>
                        <?php $__errorArgs = ['course'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                                     
                    </div>
                    <div class="form-group col-12">
                        <input type="hidden" name="course_type" id="course_type">    
                        <label for="course_type">Modalidade <span class="text-5">*</span></label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="course_type[]" id="1" value="EAD" >
                            <label class="form-check-label d-block" for="ead">EAD</label>
                            <input class="form-check-input" type="checkbox" name="course_type[]" id="2" value="Presencial">
                            <label class="form-check-label d-block" for="presencial">Presencial</label>
                            <input class="form-check-input" type="checkbox" name="course_type[]" id="3" value="Semipresencial">
                            <label class="form-check-label d-block" for="semipresencial">Semipresencial</label>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="price">Valor</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="R$ 0,00" value="<?php echo e(Session::get('price')); ?>" />
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="time_duration">Tempo de duração</label>
                        <input type="text" class="form-control" id="time_duration" name="time_duration" value="<?php echo e(Session::get('time_duration')); ?>" />    
                    </div>
                    <div class="form-group col-12">
                        <label for="link">Link curso</label>
                        <input type="url" class="form-control" id="link" name="link" placeholder="http://www.exemplo.com.br" value="<?php echo e(Session::get('link')); ?>"/>
                    </div>
                    <div class="form-group col-12">
                        <label for="additional_information">Informações adicionais</label>
                        <textarea class="form-control" id="additional_information" name="additional_information"><?php echo e(Session::get('additional_information')); ?></textarea>
                    </div>
                </div>
                <button type="submit" id="add" class="btn btn-outline-success" data-dismiss=" ">Salvar</button>            
            </form>
        </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo e(asset('js/course.js')); ?>"></script><?php /**PATH C:\censupeg\resources\views/course/add_modal_course.blade.php ENDPATH**/ ?>
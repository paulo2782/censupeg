
<?php echo $__env->make('course/add_modal_course', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('course/edit_modal_course', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<body id="body-container">
<?php echo $__env->make('includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="container-main">
    <div class="container">
        <div class="content-details">
            <div class="top-bar-block">
                <h1>Cursos</h1>
                <a href="#"><img src="<?php echo e(asset('img/button-add.png')); ?>" alt="Botão adicionar" id="btnAdd"></a>
                <span id="message"><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <p><b><?php echo e($error); ?></b></p> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></span>
            </div>
            <div class="show-details-block">
                <h2>Graduação</h2>
                <ul class="list-group list-group-flush">
                    <?php $__currentLoopData = $data_level_graduacao; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data_level1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item"><a href="#" onclick="callEditModal(id=`<?php echo e($data_level1->id); ?>`)"><?php echo e($data_level1->course); ?></a>
                        <div class="pull-right">
                            <a href="#" onclick="callEditModal(id=`<?php echo e($data_level1->id); ?>`)"  class="fa fa-pencil btnEdit" aria-hidden="true" title="<?php echo e($data_level1->course); ?>"></a>
                        <?php if(auth()->user()->level == 1): ?>
                            <a href="<?php echo e(route('destroyCourse',$data_level1->id)); ?>" class="fa fa-trash btnDelete" aria-hidden="true" title="<?php echo e($data_level1->course); ?>"></a>
                        <?php endif; ?>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </li>
                </ul>
            </div>
            <div class="show-details-block">
                <h2>Pós-graduação</h2>
                <ul class="list-group list-group-flush">
                    <?php $__currentLoopData = $data_level_pos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data_level2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item"><a href="#" onclick="callEditModal(id=`<?php echo e($data_level2->id); ?>`)"><?php echo e($data_level2->course); ?></a>
                        <div class="pull-right">
                            <a href="#" onclick="callEditModal(id=`<?php echo e($data_level2->id); ?>`)" class="fa fa-pencil " aria-hidden="true" title="<?php echo e($data_level1->course); ?>"></a>
                        <?php if(auth()->user()->level == 1): ?>
                            <a href="<?php echo e(route('destroyCourse',$data_level2->id)); ?>" class="fa fa-trash btnDelete" aria-hidden="true" title="<?php echo e($data_level2->course); ?>"></a>
                        <?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div class="content">
                <ul class="pagination"> </ul>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo e(asset('/js/course.js')); ?>"></script>
</body>  
</html>
<script src="<?php echo e(asset('js/function.js')); ?>"></script> 

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    var msg = '<?php echo e(Session::get('alert')); ?>';
    var exist = '<?php echo e(Session::has('alert')); ?>';
    if(exist){
      swal(
          "Censupeg",msg, 'error');
    }

    function callEditModal(id){
        $('#EAD').prop('checked',false)
        $('#Presencial').prop('checked',false)
        $('#Semipresencial').prop('checked',false)
        $.ajax({
            url: "<?php echo e(route('searchCourse')); ?>",
            method: 'GET',
            dataType: 'json',
            data: {id:id},
            success:function(data){
                $('#myModalEdit').modal('toggle')
                $('#edtCourse').val(data.course)
                $('#edtAdditional_information').val(data.additional_information)
                $('#idCourse').val(data.id)
                $('#edtLink').val(data.link)
                $('#edtPrice').val(data.price)
                $('#edtTime_duration').val(data.time_duration)

                if(data.level_course == 'Graduação'){
                    $('#level_courseG').attr('checked', true);
                }else{
                    $('#level_courseP').attr('checked', true);
                }

                let split = data.course_type.split(',');
                
                let i = split.length;

                for(x = 0 ; x <= i-1 ; x++){
                    let cType = split[x];
                    $('#'+cType).prop('checked',true)
                }


            }
        });
    }
</script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\censupeg\resources\views//course/course.blade.php ENDPATH**/ ?>
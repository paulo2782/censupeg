
 
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">

<body id="body-container">
<?php echo $__env->make('includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<?php echo $__env->make('mailing/delete_modal_mailing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

<form action="<?php echo e(route('csvMailing')); ?>">

<input type="hidden" name="user_id" id="user_id" value="<?php echo e(auth()->user()->id); ?>">
<input type="hidden" name="level"   id="level"   value="<?php echo e(auth()->user()->level); ?>">

<div id="container-main">
    <div class="container">
        <div class="content-details">
            <div class="top-bar-block">
                <h1>Mailing</h1>
                <a href="#"><img src="<?php echo e(asset('img/button-add.png')); ?>" alt="Botão adicionar" id="btnAdd"></a>
                <span id="message"><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <p><b><?php echo e($error); ?></b></p> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></span>
                <span id="alert" style="color:red"> <?php echo e(Session::get('alert')); ?> </span>

                <span class="export-file text-4">
                    <div class="dropdown">
                        <a href="" class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Exportar
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item text-4" type="submit">Registros total</button>
                            <button class="dropdown-item text-4" type="submit" name="month" value="mensal">Registros mensal</button>
                        </div>
                    </div>
                </span>
            </div>
            <div class="show-details-block">
                <div id="month">
                    <ul>
                        <li class="prev"><a href="#" id="btnPrev">&#10094;</a></li>
                        <li class="next"><a href="#" id="btnNext">&#10095;</a></li>
                        <li><span id="nameMonth"></span>
                            <input type="number" value="<?php echo e(date('Y')); ?>" id="year" style="border-style: none"> 
                        </div>
                        <span style="font-size:18px"> </span>
                        </li>
                    </ul>
                </div>
                <input type="hidden" id="value_month" name="value_month">
                <input type="hidden" id="value_year"  name="value_year">
                <div id="details"></div>
        </div>
    </div>
</div>
         

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="<?php echo e(asset('/js/mailing.js?102')); ?>"></script>
<script src="<?php echo e(asset('/js/moment.min.js')); ?>"></script>

</body>  
</html>
<script> 

var user_id = $('#user_id').val()
var level   = $('#level').val()
var month   = moment().format('M')
var auxMonth
var date_contact = []
var year         = $('#year').val()

$('#value_year').val(year);

$.get("<?php echo e(route('mailingAjax')); ?>", {user_id:user_id,level:level,month:month,year:year,btn:0}, function( data ) {
    console.log(data)

    if(data.month == 12){
        $('#btnNext').hide();
    }

    $('#value_month').val(data.month)
    object = JSON.parse(data.dataJson)
    dataDayMonth = data.dataDayMonth

    $('#nameMonth').html(data.nameMonth+' de ')

    auxMonth = data.month
    console.log(data.month)

    details(data.iCount,data.month, object, data.iCountDayMonth, dataDayMonth)
})

 
$('#btnPrev').click(function(event) {
    var year = $('#year').val()
    $('#value_year').val(year);

    $('#details').html('')
    
    auxMonth = $('#value_month').val()
    auxMonth = parseInt(auxMonth)-1
    
    $.get("<?php echo e(route('mailingAjax')); ?>", {user_id:user_id,level:level,month:auxMonth,year:year,btn:0}, function( data ) {
        $('#value_month').val(data.month)
        
        console.log(auxMonth)

        object = JSON.parse(data.dataJson);
        auxMonth = data.month

        $('#nameMonth').html(data.nameMonth+' de ')

        if(data.month >= 1){
            $('#btnNext').show();
        }
        if(data.month == 1){
            $('#btnPrev').hide();
        }
        details(data.iCount,data.month, object, data.iCountDayMonth, dataDayMonth)
    });
});

$('#btnNext').click(function(event) {
    var year = $('#year').val()
    $('#value_year').val(year);

    $('#details').html('')

    auxMonth = $('#value_month').val()
    auxMonth = parseInt(auxMonth)+1

    $.get("<?php echo e(route('mailingAjax')); ?>", {user_id:user_id,level:level,month:auxMonth,year:year,btn:1}, function( data ) {
        $('#value_month').val(data.month)

        object = JSON.parse(data.dataJson);
        auxMonth = data.month

        $('#nameMonth').html(data.nameMonth+' de ')

        if(data.month >= 12){
            $('#btnNext').hide();
        }
        if(data.month > 1){
           $('#btnPrev').show();
        }
        details(data.iCount,data.month, object, data.iCountDayMonth, dataDayMonth)
    });
});

$('#year').change(function(event) {
    var year = $('#year').val()
    $('#value_year').val(year);

    $('#details').html('')

    $.get("<?php echo e(route('mailingAjax')); ?>", {user_id:user_id,level:level,month:auxMonth,year:year,btn:2}, function( data ) {
        $('#value_month').val(data.month)
    
        object = JSON.parse(data.dataJson);
        auxMonth = data.month

        $('#nameMonth').html(data.nameMonth+' de ')

        
        details(data.iCount,data.month, object, data.iCountDayMonth, dataDayMonth)
    });
});



</script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\censupeg\resources\views/mailing/mailing.blade.php ENDPATH**/ ?>

<form name="dashboard" id="dashboard" method="GET" action="#">
<body id="body-container">
    <?php echo $__env->make('includes/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="container-main">
        <div class="container">
            <div class="content-details">
                <div class="top-bar-block">
                    <h1>Seja bem-vindo, <?php echo e(auth()->user()->name); ?>!</h1>
                </div>
                <div class="show-dashboard-general">
                    <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-dashboard card mb-4 box-shadow">
                                <div class="card-body my-3 mx-4">
                                    <h3 class="font-weight-normal">Contatos</h3>
                                    <h1 class="card-title"><?php echo e($iContacts); ?> <small class="text-muted">/ total</small></h1>
                                    <a href="<?php echo e(route('contactShow')); ?>" class="fa fa-arrow-right"> Contatos</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-dashboard card mb-4 box-shadow">
                                <div class="card-body my-3 mx-4">
                                    <h3 class="font-weight-normal">Cursos</h3>
                                    <h1 class="card-title"><?php echo e($iCourses); ?> <small class="text-muted">/ total</small></h1>
                                    <a href="<?php echo e(route('courseShow')); ?>" class="fa fa-arrow-right"> Cursos</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-dashboard card mb-4 box-shadow">
                                <div class="card-body my-3 mx-4">
                                    <h3 class="font-weight-normal">Empresas parceiras</h3>
                                    <h1 class="card-title"><?php echo e($iPartners); ?> <small class="text-muted">/ total</small></h1>
                                    <a href="<?php echo e(route('partnerShow')); ?>" class="fa fa-arrow-right"> Empresas parceiras</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-dashboard card mb-4">
                                <div class="card-body my-3 mx-4">
                                    <h3 class="font-weight-normal">Mailing</h3>
                                    <h1 class="card-title"><?php echo e($iCalls); ?> <small class="text-muted">/ mês</small></h1>
                                    <a href="<?php echo e(route('mailingShow')); ?>" class="fa fa-arrow-right"> Mailing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="show-details-general">
                        <div class="row">
                            <div class="col-4">
                                <input type="date" class="form-control" id="dateCurrent" name="dateCurrent" value="<?php echo e($dateCurrent); ?>">
                            </div>          
                            <div class="col-2">
                                <button type="submit" class="btn btn-outline-primary" id="search">Pesquisar</button>
                            </div>
                            <div class="col-12">&nbsp</div>
                        </div>
                    </div>
                </div>
                <div class="show-details-block">
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript" src="<?php echo e(asset('js/moment.min.js')); ?>"></script>

                    <input type="hidden" id="day" value="<?php echo e($day); ?>">
                    <input type="hidden" id="d1" value="<?php echo e($hourArray[0]); ?>">
                    <input type="hidden" id="d2" value="<?php echo e($hourArray[1]); ?>">
                    <input type="hidden" id="d3" value="<?php echo e($hourArray[2]); ?>">
                    <input type="hidden" id="d4" value="<?php echo e($hourArray[3]); ?>">
                    <input type="hidden" id="d5" value="<?php echo e($hourArray[4]); ?>">
                    <input type="hidden" id="d6" value="<?php echo e($hourArray[5]); ?>">
                    <input type="hidden" id="d7" value="<?php echo e($hourArray[6]); ?>">
                    <input type="hidden" id="d8" value="<?php echo e($hourArray[7]); ?>">
                    <input type="hidden" id="d9" value="<?php echo e($hourArray[8]); ?>">
                    <input type="hidden" id="d10" value="<?php echo e($hourArray[9]); ?>">
                    <input type="hidden" id="d11" value="<?php echo e($hourArray[10]); ?>">
                    <input type="hidden" id="d12" value="<?php echo e($hourArray[11]); ?>">
                    <input type="hidden" id="d13" value="<?php echo e($hourArray[12]); ?>">
                    <input type="hidden" id="d14" value="<?php echo e($hourArray[13]); ?>">
                    <input type="hidden" id="d15" value="<?php echo e($hourArray[14]); ?>">
                    <input type="hidden" id="d16" value="<?php echo e($hourArray[15]); ?>">
                    <input type="hidden" id="d17" value="<?php echo e($hourArray[16]); ?>">
                    <input type="hidden" id="d18" value="<?php echo e($hourArray[17]); ?>">
                    <input type="hidden" id="d19" value="<?php echo e($hourArray[18]); ?>">
                    <input type="hidden" id="d20" value="<?php echo e($hourArray[19]); ?>">
                    <input type="hidden" id="d21" value="<?php echo e($hourArray[20]); ?>">
                    <input type="hidden" id="d22" value="<?php echo e($hourArray[21]); ?>">
                    <input type="hidden" id="d23" value="<?php echo e($hourArray[22]); ?>">
                    <input type="hidden" id="d24" value="<?php echo e($hourArray[23]); ?>">
                    <div id="chart_div"></div>
                </div>
            </div>
        </div>
    </div>        
</body>  
</html>
<script>

MonthCurrent = moment().format('M')
 
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {
$('#search').trigger('click')

      var url = window.location.href
      var dateCurrent = url.split("=")[1]
      var i = dateCurrent.length
      iDateCurrent = dateCurrent.substr(0,i-1)

      var data = new google.visualization.DataTable();
      data.addColumn('timeofday', 'Hora do dia');
      data.addColumn('number', 'Ligações');
      data.addColumn({type: 'string', role: 'annotation'});

      data.addRows([
        [{v: [1, 0, 0], f: '01 am'}, parseInt($('#d1').val()),$('#d1').val()],
        [{v: [2, 0, 0], f: '02 am'}, parseInt($('#d2').val()),$('#d2').val()],
        [{v: [3, 0, 0], f: '03 am'}, parseInt($('#d3').val()),$('#d3').val()],
        [{v: [4, 0, 0], f: '04 am'}, parseInt($('#d4').val()),$('#d4').val()],
        [{v: [5, 0, 0], f: '05 am'}, parseInt($('#d5').val()),$('#d5').val()],
        [{v: [6, 0, 0], f: '06 pm'}, parseInt($('#d6').val()),$('#d6').val()],
        [{v: [7, 0, 0], f: '07 pm'}, parseInt($('#d7').val()),$('#d7').val()],
        [{v: [8, 0, 0], f: '08 pm'}, parseInt($('#d8').val()),$('#d8').val()],
        [{v: [9, 0, 0], f: '09 pm'}, parseInt($('#d9').val()),$('#d9').val()],
        [{v: [10, 0, 0], f: '10 pm'},parseInt($('#d10').val()),$('#d10').val()],
        [{v: [11, 0, 0], f: '11 pm'},parseInt($('#d11').val()),$('#d11').val()],

        [{v: [12, 0, 0], f: '12 am'},parseInt($('#d12').val()),$('#d12').val()],
        [{v: [13, 0, 0], f: '13 am'},parseInt($('#d13').val()),$('#d13').val()],
        [{v: [14, 0, 0], f: '14 am'},parseInt($('#d14').val()),$('#d14').val()],
        [{v: [15, 0, 0], f: '15 am'},parseInt($('#d15').val()),$('#d15').val()],
        [{v: [16, 0, 0], f: '16 am'},parseInt($('#d16').val()),$('#d16').val()],
        [{v: [17, 0, 0], f: '17 pm'},parseInt($('#d17').val()),$('#d17').val()],
        [{v: [18, 0, 0], f: '18 pm'},parseInt($('#d18').val()),$('#d18').val()],
        [{v: [19, 0, 0], f: '19 pm'},parseInt($('#d19').val()),$('#d19').val()],
        [{v: [20, 0, 0], f: '20 pm'},parseInt($('#d20').val()),$('#d20').val()],
        [{v: [21, 0, 0], f: '21 pm'},parseInt($('#d21').val()),$('#d21').val()],
        [{v: [22, 0, 0], f: '22 pm'},parseInt($('#d22').val()),$('#d22').val()],
        [{v: [23, 0, 0], f: '23 pm'},parseInt($('#d23').val()),$('#d23').val()],
        [{v: [24, 0, 0], f: '24 pm'},parseInt($('#d24').val()),$('#d24').val()],

      ]);

      var options = {
        title: 'Ligações no dia - '+moment(iDateCurrent).format('DD-MM-Y'),
        hAxis: {
          title: 'Hora do Dia',
          format: 'H:mm',
          viewWindow: {
            min: [0, 30, 0],
            max: [24, 30, 0]
          }
        },
        vAxis: {
          title: 'Escala'
        }
      };
 
      var chart = new google.visualization.ColumnChart(
        document.getElementById('chart_div'));

      chart.draw(data, options);
    }
</script>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\censupeg\resources\views/dashboards/dashboard.blade.php ENDPATH**/ ?>
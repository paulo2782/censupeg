@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<body id="body-container">
  @include('includes/header')
  <div id="container-main">
    <div class="container">
        <div class="content-details">
            <div class="top-bar-block">
                <h1>Seja bem-vindo, {{ auth()->user()->name }}!</h1>
            </div>
            <div class="show-dashboard-general">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-dashboard card mb-4 box-shadow">
                            <div class="card-body my-3 mx-4">
                                <h3 class="font-weight-normal">Contatos</h3>
                                <h1 class="card-title pricing-card-title">{{ $iContacts }} <small class="text-muted">/ total</small></h1>
                                <a href="{{ route('contactShow') }}" class="fa fa-arrow-right"> Contatos</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-dashboard card mb-4 box-shadow">
                            <div class="card-body my-3 mx-4">
                                <h3 class="font-weight-normal">Cursos</h3>
                                <h1 class="card-title pricing-card-title">{{ $iCourses }} <small class="text-muted">/ total</small></h1>
                                <a href="{{ route('courseShow') }}" class="fa fa-arrow-right"> Cursos</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-dashboard card mb-4 box-shadow">
                            <div class="card-body my-3 mx-4">
                                <h3 class="font-weight-normal">Empresas parceiras</h3>
                                <h1 class="card-title pricing-card-title">{{ $iPartners }} <small class="text-muted">/ total</small></h1>
                                <a href="{{ route('partnerShow') }}" class="fa fa-arrow-right"> Empresas parceiras</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-dashboard card mb-4">
                            <div class="card-body my-3 mx-4">
                                <h3 class="font-weight-normal">Mailing</h3>
                                <h1 class="card-title pricing-card-title">{{ $iCalls }} <small class="text-muted">/ mês</small></h1>
                                <a href="{{ route('mailingShow') }}" class="fa fa-arrow-right"> Mailing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- INFO GRAPHICS -->
            <!-- INFO MAILING -->
            <input type="hidden" value="{{ $arrayMonth[0] }}" id="month1">
            <input type="hidden" value="{{ $arrayMonth[1] }}" id="month2">
            <input type="hidden" value="{{ $arrayMonth[2] }}" id="month3">
            <input type="hidden" value="{{ $arrayMonth[3] }}" id="month4">
            <input type="hidden" value="{{ $arrayMonth[4] }}" id="month5">
            <input type="hidden" value="{{ $arrayMonth[5] }}" id="month6">
            <input type="hidden" value="{{ $arrayMonth[6] }}" id="month7">
            <input type="hidden" value="{{ $arrayMonth[7] }}" id="month8">
            <input type="hidden" value="{{ $arrayMonth[8] }}" id="month9">
            <input type="hidden" value="{{ $arrayMonth[9] }}" id="month10">
            <input type="hidden" value="{{ $arrayMonth[10] }}" id="month11">
            <input type="hidden" value="{{ $arrayMonth[11] }}" id="month12">


            <div class="show-details-block">
                <h2>Mailing</h2>
                <div id="chartdiv" width="20%"></div>
            </div>
        </div>
    </div>
</body>  
</html>
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.XYChart);

// Add data
chart.data = [{
  "month": "Jan",
  "visits": $('#month1').val()
}, {
  "month": "Fev",
  "visits": $('#month2').val()
}, {
  "month": "Mar",
  "visits": $('#month3').val()
}, {
  "month": "Abr",
  "visits": $('#month4').val()
}, {
  "month": "Mai",
  "visits": $('#month5').val()
}, {
  "month": "Jun",
  "visits": $('#month6').val()
}, {
  "month": "Jul",
  "visits": $('#month7').val()
}, {
  "month": "Ago",
  "visits": $('#month8').val()
}, {
  "month": "Set",
  "visits": $('#month9').val()
}, {
  "month": "Out",
  "visits": $('#month10').val()
}, {
  "month": "Nov",
  "visits": $('#month11').val()
}, {
  "month": "Dez",
  "visits": $('#month12').val()
}];

// Create axes

var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "month";
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.renderer.minGridDistance = 30;

categoryAxis.renderer.labels.template.adapter.add("dy", function(dy, target) {
  if (target.dataItem && target.dataItem.index & 2 == 2) {
    return dy + 25;
  }
  return dy;
});

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

// Create series
var series = chart.series.push(new am4charts.ColumnSeries());
series.dataFields.valueY = "visits";
series.dataFields.categoryX = "month";
series.name = "Visits";
series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/]";
series.columns.template.fillOpacity = .8;

var columnTemplate = series.columns.template;
columnTemplate.strokeWidth = 2;
columnTemplate.strokeOpacity = 1;

}); // end am4core.ready()
</script>
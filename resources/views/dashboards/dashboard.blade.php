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
                                <h1 class="card-title pricing-card-title">4500 <small class="text-muted">/ total</small></h1>
                                <a href="{{ route('contactShow') }}" class="fa fa-arrow-right"> Contatos</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-dashboard card mb-4 box-shadow">
                            <div class="card-body my-3 mx-4">
                                <h3 class="font-weight-normal">Cursos</h3>
                                <h1 class="card-title pricing-card-title">30 <small class="text-muted">/ total</small></h1>
                                <a href="{{ route('courseShow') }}" class="fa fa-arrow-right"> Cursos</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-dashboard card mb-4 box-shadow">
                            <div class="card-body my-3 mx-4">
                                <h3 class="font-weight-normal">Empresas parceiras</h3>
                                <h1 class="card-title pricing-card-title">5 <small class="text-muted">/ total</small></h1>
                                <a href="{{ route('partnerShow') }}" class="fa fa-arrow-right"> Empresas parceiras</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-dashboard card mb-4">
                            <div class="card-body my-3 mx-4">
                                <h3 class="font-weight-normal">Mailing</h3>
                                <h1 class="card-title pricing-card-title">30 <small class="text-muted">/ mês</small></h1>
                                <a href="{{ route('mailingShow') }}" class="fa fa-arrow-right"> Mailing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- INFO GRAPHICS -->
            <!-- INFO MAILING -->
            <div class="show-details-block">
                <h2>Mailing</h2>
                <div id="chartdiv"></div>
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
  "visits": 200
}, {
  "month": "Fev",
  "visits": 200
}, {
  "month": "Mar",
  "visits": 200
}, {
  "month": "Abr",
  "visits": 200
}, {
  "month": "Mai",
  "visits": 200
}, {
  "month": "Jun",
  "visits": 200
}, {
  "month": "Jul",
  "visits": 200
}, {
  "month": "Ago",
  "visits": 200
}, {
  "month": "Set",
  "visits": 200
}, {
  "month": "Out",
  "visits": 200
}, {
  "month": "Nov",
  "visits": 200
}, {
  "month": "Dez",
  "visits": 200
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
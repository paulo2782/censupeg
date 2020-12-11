// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
    var data = google.visualization.arrayToDataTable([
    ['Task', 'Escolaridade'],
    ['Ensino superior completo',     11],
    ['Ensino superior incompleto',      2],
    ['Ensino médio completo',  2],
    ['Ensino médio incompleto', 2],
    ['Outros',    7]
]);

// Optional; add a title and set the width and height of the chart
var options = {'width':350, 'height':350};

// Display the chart inside the <div> element with id="escolaridade"
var chart = new google.visualization.PieChart(document.getElementById('escolaridade'));
chart.draw(data, options);
}
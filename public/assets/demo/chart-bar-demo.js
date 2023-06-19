// Set new default font family and font color to mimic Bootstrap's default styling
// Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
// Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example

var ctx = document.getElementById("myChart");
var myLineChart = new Chart(ctx, {
  type: 'polarArea',
  data: {
    labels: [
        'Gol de chilena',
        'Gol de cabeza',
        'Pases asertados',
        'Pases largos',
        'Asistencias de gol',
        'Posibilidad de gol'
      ],
    datasets: [{
        labels: 'estadisticas jugador',
        data: [2, 4, 20, 40, 10, 15],
        backgroundColor: ["#FD3D05","#F95A20 ","#05EEFD","#FEEC8E ","#9D8EFE  ","#05FDA7"],
        borderColor: "#05EEFD ",
        pointHoverBackgroundColor: '#FF020D',
        // pointBackgroundColor: 'rgb(20, 112, 106 )',
        pointHoverBorderColor: '#9B0DE2 ',
        pointBorderColor: '#fff',
        Point:'triangle',

    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 15000,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});




function CargarDatosGraficos(id) {

$.ajax({
    url: '../../Controllers/GenerarReportesController.php?c=6&id='+id,
    type: 'POST'
}).done(function(resp){

    $(document).ready(function () {

    var estadisticas = new Array();
    $.getJSON(consultas, function (data) {
    $.each(data, function(key, val) {
        estadisticas.push([] ['']);
        fechas.push(val.fecha);
    })
    })
    alert(estadisticas);
    
    });
});

}









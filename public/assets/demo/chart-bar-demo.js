// Set new default font family and font color to mimic Bootstrap's default styling
// Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
// Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
// alert('estamos conectados');
// return
// var ctx = document.getElementById("myChart");
// var myLineChart = new Chart(ctx, {
//   type: 'polarArea',
//   data: {
//     labels: [
//         'Gol de chilena',
//         'Gol de cabeza',
//         'Pases asertados',
//         'Pases largos',
//         'Asistencias de gol',
//         'Posibilidad de gol'
//       ],
//     datasets: [{
//         labels: 'estadisticas jugador',
//         data: [2, 4, 20, 40, 10, 15],
//         backgroundColor: ["#FD3D05","#F95A20 ","#05EEFD","#FEEC8E ","#9D8EFE  ","#05FDA7"],
//         borderColor: "#05EEFD ",
//         pointHoverBackgroundColor: '#FF020D',
//         // pointBackgroundColor: 'rgb(20, 112, 106 )',
//         pointHoverBorderColor: '#9B0DE2 ',
//         pointBorderColor: '#fff',
//         Point:'triangle',

//     }],
//   },
//   options: {
//     scales: {
//       xAxes: [{
//         time: {
//           unit: 'month'
//         },
//         gridLines: {
//           display: false
//         },
//         ticks: {
//           maxTicksLimit: 6
//         }
//       }],
//       yAxes: [{
//         ticks: {
//           min: 0,
//           max: 15000,
//           maxTicksLimit: 5
//         },
//         gridLines: {
//           display: true
//         }
//       }],
//     },
//     legend: {
//       display: false
//     }
//   }
// });


function CargarDatosGraficos(id) {

$.ajax({
    url: '../../Controllers/GenerarReportesController.php?c=6&id='+id,
    type: 'POST'
}).done(function(resp){ 
  
  var data =JSON.stringify(resp);
  var datos = []
  datos.push(data)
  var consultas = datos
  // alert(consultas);

  consultas.forEach(function (valor,indice) {
    if (valor == substring("pre_"= [1,2,3,4])) {
      alert(valor);
    
      
      preNombre.push(valor)
    }
  });
  // var preNombre = []
  // var grupo= datos
  // var partidos =[];
  // var minutos =[];
  // var promedio =[];
  // var preNombre =[];
  // var preValor =[];
  // var por =[];
  // var nueva=[];
//  for (var i = 0; i < data.length; i++) {
    // partidos.push(datos[i][0])
    // minutos.push(datos[i][0])
    // promedio.push(datos[i][0])
    // preNombre.push(data[i ="pre_" == substr($key, 0, 4)][1])
    // preValor.push(data[i][2])
    // pre.push(grupo[i ="por_" == substr($key, 0, 4)][1])
    // por.push(datos[i]["por_" == substr($key, 0, 4)])
    // nueva.push(datos[i]["nueva_" == substr($key, 0, 6)])
// alert(  preNombre+  preValor);
// return
  
//  }

 var ctx = document.getElementById("myChart");
 var myLineChart = new Chart(ctx, {
   type: 'polarArea',
   data: {
     labels: 
     preNombre
       ,
     datasets: [{
         labels: 'estadisticas jugador',
         data: preValor,
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
 
 
 

});

  }
  

  

    
  
 

//   datos.forEach(myFunction);

// function myFunction(item) {
//   if (item = "pre_" == substr($key, 0, 4)) {
   
//   } 
//   }

  




  
  
   













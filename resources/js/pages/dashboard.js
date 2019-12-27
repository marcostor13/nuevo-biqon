require('bootstrap-table');
import 'bootstrap-table/dist/bootstrap-table.css';


var path = window.location.pathname;


if (path == '/dashboard') {
    
       $(function () {

           getDataDashboard();

           $('#byLanding').change(function(){
               
                getDataDashboard();
                return false;
               
           });
           $('#byRut').change(function () {

               getDataDashboard();
               return false;

           });

           $('#byPhone').change(function () {

               getDataDashboard();
               return false;

           });

           $('#startDate').change(function () {

               getDataDashboard();
               return false;

           });

           $('#endDate').change(function () {

               getDataDashboard();
               return false;

           });

           $('#report').click(function(){
               console.log('ree');
               downloadReport();
           });



       });



       document.addEventListener("DOMContentLoaded", function () {
           tail.select("select", {
               search: true,
               descriptions: true,
               locale: "es",
               multiSelectAll: true,
           });
       });

       $('.datepicker').datepicker({
           dateFormat: 'dd/mm/yy'
       });

    let downloadReport = function(){
        
        let data = {
            'byLanding': $('#byLanding').val(),
            'byRut': $('#byRut').val(),
            'byPhone': $('#byPhone').val(),
            'startDate': $('#startDate').val(),
            'endDate': $('#endDate').val()
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.post("/getReport", data, function () {
            
        })
            .done(function (e) {

                window.location.href="/storage/"+e.data;
                console.log(e);  
            })
            .fail(function () {
                console.log("error");
            });
    }


       let getDataDashboard = function () {

           let data = {
               'byLanding': $('#byLanding').val(),
               'byRut': $('#byRut').val(),
               'byPhone': $('#byPhone').val(),
               'startDate': $('#startDate').val(),
               'endDate': $('#endDate').val()
           }

           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               }
           });
           $.post("/getDataDashboard", data, function () {
                   console.log(data);
               })
               .done(function (e) {
                   console.log(e);
                   $('#totalLandings').text(e.totalLandings);
                   $('#totalVisitas').text(e.totalVisitas);
                   $('#totalFormularios').text(e.totalFormularios);
                   $('#totalEventos').text(e.totalEventos);

                   var num = 1;
                   var num2 = 1;
                   var num3 = 1;
                   var num4 = 1;
                   var rows = [];
                   var rows2 = [];
                   var rows3 = [];
                   var rows4 = [];
                   e.landings.forEach(element => {


                       rows.push({
                           id: num,
                           name: element.name,
                           client: element.name,
                           url: element.url
                       })

                       num++;
                   });

                   e.visitas.forEach(element => {
                      //se borra
                       //let dataJson = JSON.parse(element.datos);


                       rows2.push({
                           //id: num2,
                           //name: element.name,
                           //fecha: element.fecha,
                           //datosRut: dataJson.rut,
                           //datosId: dataJson.id,
                           //datosTelefono: String('dataJson.telefono'),
                           //datosNombre: dataJson.nombre

                           id: num2,
                           name: element.name,
                           fecha: element.fecha,
                           datos: element.datos
                           datosNombre: dataJson.nombre,
                           datosRut: dataJson.rut
                       })

                       num2++;
                   });

                   e.formularios.forEach(element => {


                       rows3.push({
                           id: num3,
                           name: element.name,
                           fecha: element.fecha,
                           datos: element.datos
                       })

                       num3++;
                   });

                   e.eventos.forEach(element => {


                       rows4.push({
                           id: num4,
                           event: element.evento,
                           name: element.name,
                           fecha: element.fecha,
                           datos: element.datos
                       })

                       num4++;
                   });


                   $('#tablaLandings').bootstrapTable('load', rows);
                   $('#tablaVisitas').bootstrapTable('load', rows2);
                   $('#tablaFormularios').bootstrapTable('load', rows3);
                   $('#tablaEventos').bootstrapTable('load', rows4);

                   charBar('chart1', 'Cantidad Visitas', '', e.cantXvisitas.cat, 'Cant. Visitas', e.cantXvisitas.series);
                   charBar('chart2', 'Cantidad Formularios', '', e.cantXFormularios.cat, 'Cant. Formularios', e.cantXFormularios.series);

               })
               .fail(function () {
                   console.log("error");
               });


       }



       let charBar = function (container, title, subtitle, cat, yAxisTitle, series) {

           Highcharts.chart(container, {
               chart: {
                   type: 'column',
                   margin: 100
               },
               colors: ['#1DA9CC', '#628E99', '#3EFFBD', '#FF837D', '#CC1D5A'],
               title: {
                   text: title
               },
               subtitle: {
                   text: subtitle
               },
               xAxis: {
                   // categories: [
                   //     'Jan',
                   //     'Feb',
                   //     'Mar',
                   //     'Apr',
                   //     'May',
                   //     'Jun',
                   //     'Jul',
                   //     'Aug',
                   //     'Sep',
                   //     'Oct',
                   //     'Nov',
                   //     'Dec'
                   // ],

                   categories: cat,
                   crosshair: true
               },
               yAxis: {
                   min: 0,
                   tickInterval: 1,
                   title: {
                       text: yAxisTitle
                   }
               },
               tooltip: {
                   headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                   pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                       '<td style="padding:0"><b>{point.y:1f}</b></td></tr>',
                   footerFormat: '</table>',
                   shared: true,
                   useHTML: true
               },
               plotOptions: {
                   column: {
                       pointPadding: 0.2,
                       borderWidth: 0,
                   }
               },
               // series: [{
               //     name: 'Tokyo',
               //     data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
               // }]
               series: [series]
           });


       }
    
}
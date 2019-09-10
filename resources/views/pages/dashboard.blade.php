@extends('layouts.url')


@section('title', 'Dashboard')

@section('content')

<?php 
    $date = date('d/m/Y');
    $newDate = strtotime ( '-7 day' , strtotime ( $date ) ) ;
    $newDate = date ( 'd/m/Y' , $newDate );
?>
        
    
    <div id="dashboard-content">

        <div class="header">
            <h2 class="text-color1 mt-5 ml-5 rounded bg-white p-4 som">Panel de control landings</h2>
        </div>

        <div class="d-flex justify-content-end mt-5">

            @if($role == '1')
            <div class="pSelect d-flex justify-content-center align-items-center mr-5">
                <label for="byLanding" class="mr-3 mt-2 text-color1">LANDING</label>
                <select id="byLanding" class="som select mr-5" multiple>
                    <option>My Option</option>
                    <option>My Option</option>
                    <option>My Optio2</option>
                    <option>My Optio3</option>
                    <option>My Option5</option>
                    <option>My Option</option>
                </select> 

            </div>
            @endif
            
            <div class="pSelect d-flex justify-content-center align-items-center mr-5">
                <label for="byRut" class="mr-3 mt-2 text-color1">RUT</label>
                <select id="byRut" class="som select mr-5" multiple>
                    <option>My Option</option>
                    <option>My Option</option>
                    <option>My Optio2</option>
                    <option>My Optio3</option>
                    <option>My Option5</option>
                    <option>My Option</option>
                </select> 

            </div>

            <div class="pSelect d-flex justify-content-center align-items-center mr-5">
                <label for="byPhone" class="mr-3 mt-2 text-color1">TELÉFONO</label>
                <select id="byPhone" class="som select mr-5" multiple>
                    <option>My Option</option>
                    <option>My Option</option>
                    <option>My Optio2</option>
                    <option>My Optio3</option>
                    <option>My Option5</option>
                    <option>My Option</option>
                </select> 

            </div>
            
             

            <input id="startDate" type="text" class="datepicker som mr-5" value="<?php echo $newDate; ?>"/>
            <input id="endDate" type="text" class="datepicker som mr-5" value="<?php echo $date; ?>"/>            
        </div>
        
        <div class="d-flex justify-content-between p-5 flex-wrap">
            <div class="pcard som col-2 rounded p-5 bg-white">
                <h3 class="text-right ">Total de landings</h3>
                <div class="d-flex justify-content-between">
                    <img class="mt-3" width="50" height="50" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABmJLR0QA/wD/AP+gvaeTAAAFPklEQVR42u2a628UZRTGm4ho4p9g0niJa2lJTVtl273UdqHSrRcgbcWiLhWx1bYgRkSjttlE0t1WILWiJoK2FkIUFYgkigHipfEP0Fht5FvbJUa/GT6QUHw8pztjt7Nzn7OJY+Ykv+zse8553mfOzu7OFsrKgggiiCCCCMIwqtJYXd6HkfIBXC7vB3xCjsiyd88DuIOEbu8D/Mhtfch4HsBdzyJH4M4+ROz2hHqR4h7it7JO3GA3JxWhHsSUPXKexSp6AcZRE50Y9cxy3xo6Yds5wXDlW/czoAdgHPfRySm9l5rSWGU3J/bZ5dJ3UVTvBBinfZ30SlPfrNKfspuTCre+i6LmaYBx1bsDKaW/6JU2y0mEF98r4t4dAOOml19p6p1VNFJ2cxLhxfeKqO8G/IznAUS3A37G8wAaUwBT5rMQ8938BMD4bQBivjc8DjB+G4CY741dAOO3AYj5bnsMYPw2ADHfj2wFGL8NQMz3lk6AMVo3Q9vT/ijaaH3eTq9N5jd3IOnEt+Po6AAYo3UzdHrm7fQ5ob0dc058O46t7QAjcVlKalnpie21bQvASBiW1LLSE9vryc0AY7RuhpXW0DR+IFDI6xeAFz/MM3hxZU5h2sqbVc5RPLUJYIzWzbDSGvsGKCT7KdCzbbn/GTrOfrayhrHyZpVzFDsfBhiJS1ar9dF5QGXyHLC7O58vZBfdz098tVzH2PEm5rv3IYCRGIBW6ws6MZXRoXzuuU24pNYNdOAyP3KusNaONzHffW0AY7RuhpXW9FmAOXMU6H9wKXd9IImoWtffhjA9/k2POH0kX8tYebPKOYpdSboMk8VC6roZVlozpzH9E73Hh7pwTclltXW7kxjh40G6r/+RaqnneytvVjlHsacVYCTeAnpae+gEee35VvyabsLN2jo6iZvo+Gd+/sLG/IDseBPzvfcBgJEYgFaLjsPEInH9pRZEvdaVxPfLLQBjtG6GTs+8Qe2I1Z5co9e7r0X/VtjIg+N4dQPAGK2bUdSTQJLW5zR1v6iXvtmeXMO1mt65V9aj1YlvxzGYoA+ghOzP4cFmhElzcQk6Vtd76nDj0HqMqnvyMZ34Kqu+kvpONwOM1MnzK0l6M4ruiks/ncABdb8CRjV+RpT1Ge2VUxLfbzQBjNQASCuraBZd+rT2J+f2JxDZ34SYUveHdoDcq+SyJfedaQQYiZMfacQa0lpkhmPFlzCt53ivLJ388P2IK3sX/RM39/6r04SKkvoejdOtaFxmAG/GMajoHdHNNyKr7qdCPcO6w4zh6FI+htdK6vtgFGAkBnAggn2K3ind920VVh+MIEv5HHMoigyvGfg6pWjtLanvsQj9BI3IDOBQA24da8AV1nsriu1udbh3yRdpsWZJfb/dADDvhBGTGMJ4A7oUzSvjYVQ67T+8DqHDDfiLNcbr0a27RxRx1bdnw++GAUlY870wJpTn11xo5HvqMWnHn+cBvL8OUPi94Ng1rDlVjVvo+KoHnausofEHPa+eB/DBfQBTJhxude32ifmerEOOwFSdzGdAgS6YUvRN1CKu1C14NjpVg8yxWkAKVfdYHebdakzVLv8CNKs7XqN/D+EoTtL38AkaApEj4BVV9+MaJOn5nAuNuRO1y78ADWoWiOGTVQL/VbbU8ck9ACNV57v4vBpgpOp8F2fW0l+F11qfmN0638XZKoCRqvNdfFkJMFJ1vouvK5AjcD5kfJ9xrhJxriEW/ncDuFiBzIW7AVuEBL7X/2sxQ9/V34WQ+TaEHAEDFojhGT98rwcRRBBBBOGj+Ad4km69ExwUPgAAAABJRU5ErkJggg==" alt="">
                    <p class="mt-2">{{ $info['totalLandings'] }}</p>
                </div>
            </div>

            <div class="pcard som col-2 rounded p-5 bg-white">
                <h3 class="text-right ">Total de visitas</h3>
                <div class="d-flex justify-content-between">
                    <img class="mt-3" width="50" height="50" src="data:image/png;base64,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" alt="">
                    <p class="mt-2">{{ $info['totalVisitas'] }}</p>
                </div>
            </div>

            <div class="pcard som col-2 rounded p-5 bg-white">
                <h3 class="text-right ">Total de formularios</h3>
                <div class="d-flex justify-content-between">
                    <img class="mt-3" width="50" height="50" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABmJLR0QA/wD/AP+gvaeTAAACcklEQVR42u2az0tbQRDHd0ye/gMKteZYcwl4F81VsNRDT4JQe8ylHlXsxR89NP0D4h+Qo4cSKPRSLxrx0HvJxRZySKDUm4ggxOm86AMJ7HP3md03SWbhc9qd3Xlfdnbm7XtjasTbmAggAogAIoAIYNEKezie+4BfiDaBTGjlNrAc+uZcgOt/6iCDaouYJhQTXmbu1PbVpdp3LgAt9I5QWVQLzQoAB0iAYuhT0FHr7gUgtenh1e9DOOcSx38O4Sz7sBN8CNCFW0vqV5IQ6MJOgIR+yQ6wNcje3cOtJfVLdkA/Y23+PaIPUj0DwnSTxfg+19j65S0E6lUAH0ga5BoCqWYBbyEghZA+1lZWEU2wHa+zT+cMiFnI9PXVdrzOnl0lWDsCMKF3LlO7uLUHshK0nYvFDog7bNbeIprQO5epXdzaA1UJPrdyZJsGqzUAE2zH6+zlPoBbGiy9QTTBdrzOnl0ajPqewna8zp5dGqx8BzChdy5TO/Zp0PVc7NPg5hKiCb1zmdqxT4NR31PYjtfZs0uD5WMAE2zH6+zTyQJyISIXIvJdQKd0uYjog4F/Gxza7wJRX/DJDewrwajv1Y0bBuZCpHnghqGpBJ8L2zRY+gngA7b3AalWgvKDBIMrsZGvBEfiXUDeBh+U/lrARS4PX5vDovc0GNAfMd8KiBzIdNSp9zRIav9Neq3dbx774m0HvG7Ai+UGAAdCX3ymwXa40I88nzPgOE9nwL0ALR9ZoBputXFU9ZNZRA4EqE67odBRVecCTAZql5QuRzuBCS3i89SE2nMuQOEX3C5ewA4xQwATcsTH0DfnAgxbEwFEABFgtNt/i9lP2z8HxBgAAAAASUVORK5CYII=" alt="">
                    <p class="mt-2">{{ $info['totalFormularios'] }}</p>
                </div>
            </div>

            <div class="pcard som col-2 rounded p-5 bg-white">
                <h3 class="text-right ">Total de Eventos</h3>
                <div class="d-flex justify-content-between">
                    <img class="mt-3" width="50" height="50" src="https://img.icons8.com/nolan/64/000000/event-accepted.png" alt="">
                    <p class="mt-2">{{ $info['totalEventos'] }}</p>
                </div>
            </div>

            <div id="chart1" class="col-5 mt-5 p-0 som"></div>
            <div id="chart2" class="col-5 mt-5 p-0 som"></div>

            <div class="responsive-table col-12 mt-5 p-0">
                <table class="p-0" data-toggle="table" data-height="500" data-pagination=true data-search=true>
                    <thead>
                        <tr>
                        <th>Item ID</th>
                        <th>Item Name</th>
                        <th>Item Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1</td>
                        <td>Item 1</td>
                        <td>$1</td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Item 2</td>
                        <td>$2</td>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Item 1</td>
                        <td>$1</td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Item 2</td>
                        <td>$2</td>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Item 1</td>
                        <td>$1</td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Item 2</td>
                        <td>$2</td>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Item 1</td>
                        <td>$1</td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Item 2</td>
                        <td>$2</td>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Item 1</td>
                        <td>$1</td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Item 2</td>
                        <td>$2</td>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Item 1</td>
                        <td>$1</td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Item 2</td>
                        <td>$2</td>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Item 1</td>
                        <td>$1</td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Item 2</td>
                        <td>$2</td>
                        </tr>
                        <tr>
                        <td>1</td>
                        <td>Item 1</td>
                        <td>$1</td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Item 2</td>
                        <td>$2</td>
                        </tr>

                    </tbody>
                </table>
            </div>


        </div>

    </div>

    <script>   

        $(function(){
            charBar('chart1', 'Cantidad Visitas', '', {!! json_encode($info["cantXvisitas"]["cat"]) !!}, 'Cant. Visitas', {!! json_encode($info["cantXvisitas"]["series"]) !!}); 
            charBar('chart2', 'Cantidad Formularios', '', {!! json_encode($info["cantXFormularios"]["cat"]) !!}, 'Cant. Formularios', {!! json_encode($info["cantXFormularios"]["series"]) !!}); 
        });
    
        

        document.addEventListener("DOMContentLoaded", function(){
                tail.select("select", {
                    search: true,
                    descriptions: true,
                    locale: "es",            
                    multiSelectAll: true,
                 });
            });

        $('.datepicker').datepicker();

               
        
        
        

        let charBar = function (container, title, subtitle, cat, yAxisTitle, series) {

            Highcharts.chart(container, {
                chart: {
                    type: 'column',
                    margin: 100
                },
                colors: ['#1DA9CC','#628E99', '#3EFFBD', '#FF837D', '#CC1D5A'],
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



    </script>


@endsection
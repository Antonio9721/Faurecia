@extends('layouts.plantilla')

@section('title', 'Gráfica de accesorios')

@section('content')

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <figure class="highcharts-figure">
        <div id="container"></div>
        <p class="highcharts-description">
            Accesorios registrados.
        </p>
    </figure>

    <figure class="highcharts-figure">
        <div id="container2"></div>
        <p class="highcharts-description">
            Accesorios por modelo.
        </p>
    </figure>

    <figure class="highcharts-figure">
        <div id="container3"></div>
        <p class="highcharts-description">
            Accesorios por número de serie.
        </p>
    </figure>

    <script type="text/javascript">
        var accesories = <?php echo json_encode($accesories)?>;

        Highcharts.chart('container', {
            chart: {
                type: 'area'
            },
            title: {
                text: 'Accesorios'
            },
            subtitle: {
                name: 'Nuevos accesorios'
            },
            xAxis: {
                categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de accesorios'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'Accesorios',
                data: accesories
            }],
            responsive: {

            }
        });
    </script>

 {{-- Gráfica para mostrar accesorios agrupados por modelos --}}
    <script type="text/javascript">
        var accesories2 = <?php echo json_encode($accesories2)?>;

        Highcharts.chart('container2', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Accesorios'
            },
            subtitle: {
                name: 'Accesorios por modelos'
            },
            xAxis: {
                categories: ['model 02', 'model 03', 'model 04', 'model 05', 'model 06', 'model 07', 'model 08', 'model 09', 'model 010']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de accesorios'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'Accesorios',
                data: accesories2
            }],
            responsive: {

            }
        });
    </script>

    {{-- Gráfica para mostrar accesorios agrupados por número de serie--}}
    <script type="text/javascript">
        var accesories2 = <?php echo json_encode($accesories2)?>;

        Highcharts.chart('container3', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Accesorios'
            },
            subtitle: {
                name: 'Accesorios por número de serie'
            },
            xAxis: {
                categories: ['0001', '0002', '0003', '0004', '0005', '0006', '0007', '0008', '0009']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de accesorios'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'Accesorios',
                data: accesories2
            }],
            responsive: {

            }
        });
    </script>

@endsection

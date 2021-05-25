@extends('layouts.plantilla')

@section('title', 'Gráfica de autopartes')

@section('content')

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <figure class="highcharts-figure">
        <div id="container"></div>
        <p class="highcharts-description">
            Autopartes registradas.
        </p>
    </figure>

    <figure class="highcharts-figure">
        <div id="container2"></div>
        <p class="highcharts-description">
            Autopartes por costo unitario.
        </p>
    </figure>

    <figure class="highcharts-figure">
        <div id="container3"></div>
        <p class="highcharts-description">
            Autopartes por costo unitario.
        </p>
    </figure>

    <script type="text/javascript">
        var parts = <?php echo json_encode($parts)?>;

        Highcharts.chart('container', {
            chart: {
                type: 'area'
            },
            title: {
                text: 'Autopartes'
            },
            subtitle: {
                name: 'Nuevas Autopartes'
            },
            xAxis: {
                categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de Autopartes'
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
                name: 'Autopartes',
                data: parts
            }],
            responsive: {

            }
        });
    </script>

 {{-- Gráfica para mostrar autopartes agrupados por costo unitario --}}
    <script type="text/javascript">
        var parts2 = <?php echo json_encode($parts2)?>;

        Highcharts.chart('container2', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Autopartes'
            },
            subtitle: {
                name: 'Autopartes por costo unitario'
            },
            xAxis: {
                categories: ['2 000 ', '3 0000', '4 000', '5 000', '6 000', '7 000', '8 000', '9 000', '10 000']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de autopartes'
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
                name: 'Autopartes',
                data: parts2
            }],
            responsive: {

            }
        });
    </script>

    {{-- Gráfica para mostrar autopartes agrupados por costo unitario en columnas--}}
    <script type="text/javascript">
        var parts2 = <?php echo json_encode($parts2)?>;

        Highcharts.chart('container3', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Autopartes'
            },
            subtitle: {
                name: 'Autopartes por costo unitario'
            },
            xAxis: {
                categories: ['2 000 ', '3 0000', '4 000', '5 000', '6 000', '7 000', '8 000', '9 000', '10 000']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de autopartes'
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
                name: 'Autopartes',
                data: parts2
            }],
            responsive: {

            }
        });
    </script>

@endsection

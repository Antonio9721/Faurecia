@extends('layouts.plantilla')

@section('title', 'Gráfica de Clientes')

@section('content')

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <figure class="highcharts-figure">
        <div id="container"></div>
        <p class="highcharts-description">
            Clientes registrados.
        </p>
    </figure>

    <figure class="highcharts-figure">
        <div id="container2"></div>
        <p class="highcharts-description">
            Clientes por nombre de banco.
        </p>
    </figure>

    <figure class="highcharts-figure">
        <div id="container3"></div>
        <p class="highcharts-description">
            Clientes por nombre de banco.
        </p>
    </figure>

    <script type="text/javascript">
        var clients = <?php echo json_encode($clients)?>;

        Highcharts.chart('container', {
            chart: {
                type: 'area'
            },
            title: {
                text: 'Clientes'
            },
            subtitle: {
                name: 'Nuevos clientes'
            },
            xAxis: {
                categories: ['Antonio', 'Juan', 'Miguel', 'Erik', 'José', 'Ángel', 'María', 'Guadalupe', 'Susana', 'Joel']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de clientes'
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
                name: 'Clientes',
                data: clients
            }],
            responsive: {

            }
        });
    </script>

 {{-- Gráfica para mostrar clientes agrupados por nombre de bancos --}}
    <script type="text/javascript">
        var clients2 = <?php echo json_encode($clients2)?>;

        Highcharts.chart('container2', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Clientes'
            },
            subtitle: {
                name: 'Clientes por nombre de bancos'
            },
            xAxis: {
                categories: ['Banco Azteca', 'Bancomer', 'Banorte', 'HSBC', 'Telegrafos', 'Coppel', 'Santander', 'Scotiabank', 'Soriana', 'Ahorro']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de clientes'
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
                name: 'Clientes',
                data: clients2
            }],
            responsive: {

            }
        });
    </script>

    {{-- Gráfica para mostrar clientes agrupados por el nombre de sus bancos--}}
    <script type="text/javascript">
        var clients2 = <?php echo json_encode($clients2)?>;

        Highcharts.chart('container3', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Clientes'
            },
            subtitle: {
                name: 'Clientes por el nombre de sus bancos'
            },
            xAxis: {
                categories: ['Banco Azteca', 'Bancomer', 'Banorte', 'HSBC', 'Telegrafos', 'Coppel', 'Santander', 'Scotiabank', 'Soriana', 'Ahorro']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de clientes'
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
                name: 'Clientes',
                data: clients2
            }],
            responsive: {

            }
        });
    </script>

@endsection

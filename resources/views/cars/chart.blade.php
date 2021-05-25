@extends('layouts.plantilla')

@section('title', 'Gráfica de vehículos')

@section('content')

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <figure class="highcharts-figure">
        <div id="container"></div>
        <p class="highcharts-description">
            Vehículos registrados.
        </p>
    </figure>

    <figure class="highcharts-figure">
        <div id="container2"></div>
        <p class="highcharts-description">
            Veículos por número de asientos.
        </p>
    </figure>

    <figure class="highcharts-figure">
        <div id="container3"></div>
        <p class="highcharts-description">
            Veículos por número de asientos.
        </p>
    </figure>

    <script type="text/javascript">
        var cars = <?php echo json_encode($cars)?>;

        Highcharts.chart('container', {
            chart: {
                type: 'area'
            },
            title: {
                text: 'Vehículos'
            },
            subtitle: {
                name: 'Nuevos vehículos'
            },
            xAxis: {
                categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de vehículos'
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
                name: 'Vehículos',
                data: cars
            }],
            responsive: {

            }
        });
    </script>

 {{-- Gráfica para mostrar vehículos agrupados por número de puertas --}}
    <script type="text/javascript">
        var cars2 = <?php echo json_encode($cars2)?>;

        Highcharts.chart('container2', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Vehículos'
            },
            subtitle: {
                name: 'Vehículos por número de asientos'
            },
            xAxis: {
                categories: ['2 puertas', '3 puertas', '4 puertas', '5 puertas', '6 puertas', '7 puertas', '8 puertas', '9 puertas', '10 puertas']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de vehículos'
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
                name: 'Vehículos',
                data: cars2
            }],
            responsive: {

            }
        });
    </script>

    {{-- Gráfica para mostrar vehículos agrupados por número de puertas en columnas--}}
    <script type="text/javascript">
        var cars2 = <?php echo json_encode($cars2)?>;

        Highcharts.chart('container3', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Vehículos'
            },
            subtitle: {
                name: 'Vehículos por número de asientos'
            },
            xAxis: {
                categories: ['1 puertas', '2 puertas', '3 puertas', '4 puertas', '5 puertas', '6 puertas', '7 puertas', '8 puertas', '9 puertas']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de vehículos'
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
                name: 'Vehículos',
                data: cars2
            }],
            responsive: {

            }
        });
    </script>

@endsection

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
            Empleados registrados.
        </p>
    </figure>

    <figure class="highcharts-figure">
        <div id="container2"></div>
        <p class="highcharts-description">
            Empleados por área de trabajo.
        </p>
    </figure>

    <figure class="highcharts-figure">
        <div id="container3"></div>
        <p class="highcharts-description">
            Empleados por área de trabajo.
        </p>
    </figure>

    <script type="text/javascript">
        var employes = <?php echo json_encode($employes)?>;

        Highcharts.chart('container', {
            chart: {
                type: 'area'
            },
            title: {
                text: 'Empleados'
            },
            subtitle: {
                name: 'Nuevos empleados'
            },
            xAxis: {
                categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de empleados'
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
                name: 'Empleados',
                data: cars
            }],
            responsive: {

            }
        });
    </script>

 {{-- Gráfica para mostrar empleados agrupados por área de trabajo --}}
    <script type="text/javascript">
        var employes2 = <?php echo json_encode($employes2)?>;

        Highcharts.chart('container2', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Empleados'
            },
            subtitle: {
                name: 'Empleados por área de trabajo'
            },
            xAxis: {
                categories: ['Contador', 'Administrador', 'Programador', 'Director', 'Subdirector', 'Gerente', 'Coordinador', 'Secretario', 'Documentador']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de empleados'
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
                name: 'Empleados',
                data: employes2
            }],
            responsive: {

            }
        });
    </script>

    {{-- Gráfica para mostrar empleados agrupados por área de trabajo--}}
    <script type="text/javascript">
        var employes2 = <?php echo json_encode($employes2)?>;

        Highcharts.chart('container3', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Empleados'
            },
            subtitle: {
                name: 'Empleados por área de trabajo'
            },
            xAxis: {
                categories: ['Contador', 'Administrador', 'Programador', 'Director', 'Subdirector', 'Gerente', 'Coordinador', 'Secretario', 'Documentador']
            },
            yAxis: {
                title: {
                    text: 'Cantidad de empleados'
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
                name: 'Empleados',
                data: employes2
            }],
            responsive: {

            }
        });
    </script>

@endsection

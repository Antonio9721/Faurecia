<body>
	<div class="container"></div>

</body>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">

	var cars = <?php echo json_encode($cars) ?>;
	Highcharts.chart('container', {

		title:{
			text: 'Clientes en el sistema'
		},

		subtitle: {
			text: 'Grafica'
		},

		xAxis: {
			categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun',
			'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
		},

		yAxis: {
			title: {
				text: 'Nuevos clientes'
			}
		},

		legend: {
			layout: 'vertical', 
			align: 'right',
			verticalAlign:'middle'
		},

		plotOptions: {
			series: {
				allowPointSelect: true
			}
		},

		series: [{
			name: 'Nuevos clientes',
			data: clients
		}],

	responsive: {
		rules: [{
			condition: {
				maxWidth: 500
			},
			chartOptions: {
				legend: {
					layout:	'horizontal',
					align: 'center',
					verticalAlign: 'bottom'
						}
					}
				}]
		}
	});
</script>
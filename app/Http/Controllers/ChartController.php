<body>
 <div id="container"></div>
</div>
 
 <script src="https://code.highcharts.com/highcharts.js"></script>
 
 <script type="text/javascript">
var users = <?php echo json_encode($users)?>;
 
Highcharts.chart('container', {
 title: {
 text: 'Usuarios en 2021'
 },
 subtitle: {
 name: 'Nuevos usuarios',
 }, 
 xAxis: {
 categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
 'Octubre', 'Noviembre', 'Deciembre'
 ]
 },
 yAxis: {
 title: {
 text: 'Cantidad de usuarios'
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
 name: 'Nuevos usuarios',
 data: users
 }],
 responsive: {
 rules: [{
 condition: {
 maxWidth: 500
 },
 chartOptions: {
 legend: {
 layout: 'horizontal',
 align: 'center',
 verticalAlign: 'bottom'
 }
 }
 }]
 }
});
 </script>





























<!-- <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class ChartController extends Controller
{
    public function index()
    {
    	$users = User::select(DB::raw("COUNT(*) as count"))
    		->whereYear('created_at',date('Y'))
    		->groupBy(BD::raw("Month(created_at)"))
    		->pluck('count');
    	$months = User::select(DB::raw("Month(created_at) as month"))
    		->whereYear('created_at',date('Y'))
    		->groupBy(BD::raw("Month(created_at)"))
    		->pluck('count');

    	$dates = array(0,0,0,0,0,0,0,0,0,0,0,0);
    	foreach($months as $index =>$month)
    	{
    		$datas[$month] = $users[$index];
    	}

    	return view('chart',compact('datas'));
    }
}
 -->
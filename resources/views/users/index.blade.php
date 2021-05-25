@extends('layouts.plantilla')

@section('content')

<div class="">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a class="btn btn-outline-info" href="{{ route('users.create') }}"><i class="fas fa-plus-circle"></i></a>
                </div>

                <div class="col-md-7">
                    <h2 class="card-title">Listado de usuarios registrados en la base de datos</h2>
                </div>

                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    			             <a class="btn btn-outline-info mr-2" href="{{ url('/users/import') }}"><i class="fas fa-file-import"></i></a>
                          <a class="btn btn-outline-info mr-2" href="{{ url('/users/cards') }}"><i class="fas fa-border-all"></i></a>
                            <a class="btn btn-outline-info mr-2" href="{{ url('/users/chart') }}"><i class="fas fa-chart-bar"></i></a>
                               <a class="btn btn-outline-info mr-2" href="{{ url('/users/exportToXlsx') }}"><i class="fas fa-file-excel"></i></a>
                                 <span onclick="exportUsersToCSV(event.target)" data-href="/exportPartsToCSV" id="export" class="btn btn-outline-info mr-2"><i class="fas fa-file-csv"></i></span>
                                  <a class="btn btn-outline-info mr-2" href="{{ route('users.pdf') }}"><i class="fas fa-file-pdf"></i></a>
                                   <a class="btn btn-outline-info mr-2" href="{{ url('/users/xml') }}"><i class="fas fa-file-code"></i></a>
  		                          </div>
                           </div>
                     </div>
                </div>

  <div class="card-body">

  	<table id="example"  class="table table-striped table-responsive">

  		<thead>
  			<tr>
  				<th><h5>Nombre</h5></th>
          <th><h5>Correo</h5></th>
  			</tr>

  		</thead>

            <tbody>
                    @forelse ($users as $user)
                    <tr>
                        <td style="width: 15%">
                            <a href="{{ route('users.show', $user->id) }}">
                                <h4 class="text-left"> <span class="badge bg-info">{{ $user->name }}</span></h4></td>
                            </a>

                            <td style="width: 10%">
                            <p>{{ $user->email }}</p>
                            </p>
                        </td>          
                    @empty
                        <h1>La tabla no tiene datos</h1>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
      </div>
</div>

<!-- DataTables -->
<script src="{{ asset('assets/js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>

<script>
	$(function() {
		$('#example').DataTable({
      dom: 'Blfrtip',
      buttons: [
      'pdf', 'print'
      ],
    });
	} );
</script>

<script>
	function exportUsersToCSV(_this){
		let _url = $(_this).data('href');
		window.location.href = _url;
	}
</script>
@endsection
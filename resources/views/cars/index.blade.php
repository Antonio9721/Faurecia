@extends('layouts.plantilla')

@section('title', 'Vehículos')

@section('content')

<div class="">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a class="btn btn-outline-info" href="{{ route('cars.create') }}"><i class="fas fa-plus-circle"></i></a>
                </div>
                <div class="col-md-7">
                    <h2 class="card-title">Listado de vehículos registrados en la base de datos</h2>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-outline-info mr-2" href="{{ url('/cars/import') }}"><i class="fas fa-file-import"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/cars/cards') }}"><i class="fas fa-border-all"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/cars/chart') }}"><i class="fas fa-chart-bar"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/cars/exportToXlsx') }}"><i class="fas fa-file-excel"></i></a>
                    	 <span onclick="exportCarsToCSV(event.target)" data-href="/exportCarsToCSV" id="export" class="btn btn-outline-info mr-2"><i class="fas fa-file-csv"></i></span>
                    	<a class="btn btn-outline-info mr-2" href="{{ route('cars.pdf') }}"><i class="fas fa-file-pdf"></i></a> 
    					<a class="btn btn-outline-info mr-2" href="{{ url('/cars/xml') }}"><i class="fas fa-file-code"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">

            <table id="example" class="table table-striped table-responsive">

                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Vehículo</th>
                        <th>Información</th>
                        <th>Descripción</th>

                    </tr>

                </thead>

                <tbody>
                    @forelse ($cars as $car)
                    <tr>
                        <td>
                            <img style="width: 200px; height: 100; object-fit: cover" src="/imagenes/cars/{{ $car->image }}" alt="{{ $car->brand }} {{ $car->model}}" />
                        </td>
                        <td style="width: 30%">
                            <a href="{{ route('cars.show', $car->id) }}">
                                <h4 class="text-left"> <span class="badge bg-info">{{ $car->brand }} {{ $car->model }}</span></h4></td>
                            </a>
                        <td style="width: 35%">
                            <p>{{ $car->comentary }}</p>
                            </p>
                        </td>
                        <td style="width: 35%"><p>{{ $car->description }}</p></td>

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

<!-- Aplicación de DataTable -->
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
    function exportCarsToCSV(_this) {
        let _url = $(_this).data('href');
        window.location.href = _url;
    }
</script>

@endsection

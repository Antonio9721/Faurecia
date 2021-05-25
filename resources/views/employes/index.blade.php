@extends('layouts.plantilla')
@section('title', 'Empleados')

@section('content')

<div class="">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a class="btn btn-outline-info" href="{{ route('employes.create') }}"><i class="fas fa-plus-circle"></i></a>
                </div>
                <div class="col-md-7">
                    <h2 class="card-title">Listado de empleados registrados en la base de datos</h2>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-outline-info mr-2" href="{{ url('/employes/import') }}"><i class="fas fa-file-import"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/employes/cards') }}"><i class="fas fa-border-all"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/employes/chart') }}"><i class="fas fa-chart-bar"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/employes/exportToXlsx') }}"><i class="fas fa-file-excel"></i></a>
                         <span onclick="exportEmployesToCSV(event.target)" data-href="/exportEmployesToCSV" id="export" class="btn btn-outline-info mr-2"><i class="fas fa-file-csv"></i></span>
                         <a class="btn btn-outline-info mr-2" href="{{ route('employes.pdf') }}"><i class="fas fa-file-pdf"></i></a> 
                        <a class="btn btn-outline-info mr-2" href="{{ url('/employes/xml') }}"><i class="fas fa-file-code"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">

            <table id="example" class="table table-striped table-responsive">

                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Empleado</th>
                        <th>Información</th>
                        <th>Detalles</th>

                    </tr>

                </thead>

                <tbody>
                    @forelse ($employes as $employe)
                    <tr>
                        <td>
                            <img style="width: 200px; height: 100; object-fit: cover" src="/imagenes/employes/{{ $employe->image }}" alt="{{ $employe->Firstname }} {{ $employe->Secondname}}" />
                        </td>
                        <td style="width: 25%">
                            <a href="{{ route('employes.show', $employe->id) }}">
                                <h4 class="text-left"> <span class="badge bg-info">{{ $employe->Firstname }} {{ $employe->Secondname }}</span></h4></td>
                            </a>
                        <td style="width: 60%">
                            <p><b>Área de Trabajo: </b>{{ $employe->Area }}</p>
                            <p><b>Sueldo: </b>{{ $employe->Salary }}</p>
                            <p><b>Matrícula: </b>{{ $employe->Keycode }}</p>
                            </p>
                        </td>
                        <td style="width: *">
                        	<p><b>Teléfono</b>{{ $employe->Phone }}</p>
                        	<p><b>Correo</b>{{ $employe->Email }}</p>
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
    function exportEmployesToCSV(_this) {
        let _url = $(_this).data('href');
        window.location.href = _url;
    }
</script>

@endsection

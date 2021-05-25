@extends('layouts.plantilla')

@section('title', 'Clientes')

@section('content')

<div class="">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a class="btn btn-outline-info" href="{{ route('clients.create') }}"><i class="fas fa-plus-circle"></i></a>
                </div>
                <div class="col-md-7">
                    <h2 class="card-title">Listado de clientes registrados en la base de datos</h2>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-outline-info mr-2" href="{{ url('/clients/import') }}"><i class="fas fa-file-import"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/clients/cards') }}"><i class="fas fa-border-all"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/clients/chart') }}"><i class="fas fa-chart-bar"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/clients/exportToXlsx') }}"><i class="fas fa-file-excel"></i></a>
                         <span onclick="exportClientsToCSV(event.target)" data-href="/exportClientsToCSV" id="export" class="btn btn-outline-info mr-2"><i class="fas fa-file-csv"></i></span>
                        <a class="btn btn-outline-info mr-2" href="{{ route('clients.pdf') }}"><i class="fas fa-file-pdf"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/clients/xml') }}"><i class="fas fa-file-code"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">

            <table id="example" class="table table-striped table-responsive">

                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Cliente</th>
                        <th>Información</th>
                        <th>Detalles</th>

                    </tr>

                </thead>

                <tbody>
                    @forelse ($clients as $client)
                    <tr>
                        <td>
                            <img style="width: 200px; height: 100; object-fit: cover" src="/imagenes/clients/{{ $client->image }}" alt="{{ $client->Firstname }} {{ $client->Secondname}}" />
                        </td>
                        <td style="width: 20%">
                            <a href="{{ route('clients.show', $client->id) }}">
                                <h4 class="text-left"> <span class="badge bg-info">{{ $client->Firstname }} {{ $client->Secondname }}</span></h4></td>
                            </a>
                        <td style="width: 25%">
                            <p><b>Empleo: </b>{{ $client->Job }}</p>
                            <p><b>Sueldo: </b>{{ $client->Salary }}</p>
                            <p><b>Banco: </b>{{ $client->Bank }}</p>
                            <p><b>No.Cuenta: </b>{{ $client->Numcount }}</p>
                            </p>
                        </td>
                        <td style="width: 25%">
                        	<p><b>Domicilio: </b>{{ $client->Address }}</p>
                        	<p><b>Teléfono: </b>{{ $client->Phone }}</p>
                        	<p><b>Correo: </b>{{ $client->Email }}</p>
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
    function exportClientsToCSV(_this) {
        let _url = $(_this).data('href');
        window.location.href = _url;
    }
</script>

@endsection

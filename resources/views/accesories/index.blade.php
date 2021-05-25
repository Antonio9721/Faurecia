@extends('layouts.plantilla')

@section('title', 'Accesorios')

@section('content')

<div class="">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a class="btn btn-outline-info" href="{{ route('accesories.create') }}"><i class="fas fa-plus-circle"></i></a>
                </div>
                <div class="col-md-7">
                    <h2 class="card-title">Listado de accesorios registrados en la base de datos</h2>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-outline-info mr-2" href="{{ url('/accesories/import') }}"><i class="fas fa-file-import"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/accesories/cards') }}"><i class="fas fa-border-all"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/accesories/chart') }}"><i class="fas fa-chart-bar"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/accesories/exportToXlsx') }}"><i class="fas fa-file-excel"></i></a>
                         <span onclick="exportAccesoriesToCSV(event.target)" data-href="/exportAccesoriesToCSV" id="export" class="btn btn-outline-info mr-2"><i class="fas fa-file-csv"></i></span>
                        <!-- <a class="btn btn-outline-info mr-2" href="{{ route('accesories.pdf') }}"><i class="fas fa-file-pdf"></i></a> -->
                        <a class="btn btn-outline-info mr-2" href="{{ url('/accesories/xml') }}"><i class="fas fa-file-code"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">

            <table id="example" class="table table-striped table-responsive">

                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Accesorio</th>
                        <th>Detalles</th>
                        <th>Comentario</th>
                       
                    </tr>

                </thead>

                <tbody>
                    @forelse ($accesories as $accesory)
                    <tr>
                        <td>
                            <img style="width: 200px; height: 100; object-fit: cover" src="/imagenes/accesories/{{ $accesory->image }}" alt="{{ $accesory->Name }} {{ $accesory->Model }}" />
                        </td>
                        <td style="width: 25%">
                            <a href="{{ route('accesories.show', $accesory->id) }}">
                                <h4 class="text-left"> <span class="badge bg-info">{{ $accesory->Name }} {{ $accesory->Model }}</span></h4></td>
                            </a>
                        <td style="width: 35%">
                            <p><b>Número de Serie:</b> {{ $accesory->Numserie }}</p>
                            <p><b>Precio:</b> {{ $accesory->Price }}</p>
                            </p>
                        </td>
                        <td style="width: 40%">
                        	<p>{{ $accesory->Comentary }}</p></td>

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
    function exportAccesoriesToCSV(_this) {
        let _url = $(_this).data('href');
        window.location.href = _url;
    }
</script>

@endsection

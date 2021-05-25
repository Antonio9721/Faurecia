@extends('layouts.plantilla')
@section('title', 'Autopartes')

@section('content')

<div class="">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-1">
                    <a class="btn btn-outline-info" href="{{ route('parts.create') }}"><i class="fas fa-plus-circle"></i></a>
                </div>
                <div class="col-md-7">
                    <h2 class="card-title">Listado de autopartes registradas en la base de datos</h2>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-outline-info mr-2" href="{{ url('/parts/import') }}"><i class="fas fa-file-import"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/parts/cards') }}"><i class="fas fa-border-all"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/parts/chart') }}"><i class="fas fa-chart-bar"></i></a>
                        <a class="btn btn-outline-info mr-2" href="{{ url('/parts/exportToXlsx') }}"><i class="fas fa-file-excel"></i></a>
                         <span onclick="exportPartsToCSV(event.target)" data-href="/exportPartsToCSV" id="export" class="btn btn-outline-info mr-2"><i class="fas fa-file-csv"></i></span>
                        <a class="btn btn-outline-info mr-2" href="{{ route('parts.pdf') }}"><i class="fas fa-file-pdf"></i></a> 
                        <a class="btn btn-outline-info mr-2" href="{{ url('/parts/xml') }}"><i class="fas fa-file-code"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">

            <table id="example" class="table table-striped table-responsive">

                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Autoparte</th>
                        <th>Descripción</th>
                        <th>Comentario</th>

                    </tr>

                </thead>

                <tbody>
                    @forelse ($parts as $part)
                    <tr>
                        <td>
                            <img style="width: 200px; height: 100; object-fit: cover" src="/imagenes/parts/{{ $part->image }}" alt="{{ $part->Name }} {{ $part->Mark}}" />
                        </td>
                        <td style="width: 20%">
                            <a href="{{ route('parts.show', $part->id) }}">
                                <h4 class="text-left"> <span class="badge bg-info">{{ $part->Name }} {{ $part->Mark }}</span></h4></td>
                            </a>
                        <td style="width: 25%">
                            <p>{{ $part->Description }}</p>
                            </p>
                        </td>
                        <td style="width: 25%"><p>{{ $part->Comentary }}</p></td>

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
            dom:'Blfrtip',
            buttons:[
            'pdf', 'print'
            ],
        });
    } );
</script>

<script>
    function exportPartsToCSV(_this) {
        let _url = $(_this).data('href');
        window.location.href = _url;
    }
</script>

@endsection

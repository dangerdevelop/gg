@extends('admin.layout.main')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                {{ $title }}
                @if (isset($createButton))
                    <a href="{{ $createButton }}" class="btn btn-primary position-absolute end-0">
                        <i class="fa fa-plus"></i> Yeni Ekle
                    </a>
                @endif
                @if (isset($page) && $page == 'login-log')
                    <a href="{{ route('admin.resetdb') }}" class="btn btn-primary position-absolute end-0 mx-2 resetDB">
                        <i class="fa fa-plus"></i> TABLOYU BOŞALT
                    </a>
                @endif
            </div>

            <div class="card-body">
                {!! $dataTable->table() !!}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- Buttons JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <!-- JSZip for Excel button -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js"></script>
    <!-- PDFMake for PDF button -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>
    <!-- Buttons for Excel, PDF, Print -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    <script type="text/javascript" src="{{ asset('admin/script.js') }}"></script>
@endpush

@push('styles')
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!-- Buttons CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endpush

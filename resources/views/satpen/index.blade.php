@extends('layouts.master')
@section('content')
<div class="page-heading">
    <h1 class="page-title">Satuan Pendidikan</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
        <li class="breadcrumb-item">Data Satpen</li>
    </ol>
</div>
<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">List Data</div>
            <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#addRowModal"> <i class="fa fa-plus"></i> Add</button>
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Nama Satuan Pendidikan</th>
                        <th style="width: 10%">Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title">
                    <span>Tambah Data Baru</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" id="form-kriteria" method="post">
                    @csrf 
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                            <input class="form-control" type="text" placeholder="Satuan Pendidikan">
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="submit" id="addRowButton"id="btn" class="btn btn-success">Kirim</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('css')
<link href="./assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
@endpush
@push('js')
        <script src="./assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
        <script type="text/javascript">
        let table;
        $(document).ready(function() {
            // Add Row
            table = $('#table').DataTable({
            pageLength: 5,
            responsive: true,
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: {
                url: '{{ route('satpen.data') }}',
            },
            columns:[
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'name'},
                {data: 'aksi', searchable: false, sortable: false},
            ]
            });
        });
        </script>
@endpush
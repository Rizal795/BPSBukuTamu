@extends('layouts.master')
@section('content')
<div class="page-heading">
    <h1 class="page-title">Data Tamu</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
        <li class="breadcrumb-item">List Data Tamu</li>
    </ol>
</div>
<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">List Data</div>
            <div class="btn-group m-b-10">
                {{-- <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#addRowModal"><i class="fa fa-plus"></i> Tambah</button> --}}
                <a href="{{ route('cetak.tamu') }}" class="btn btn-danger btn-sm"><i class="fa fa-solid fa-download"></i> Dwonload PDF</a>
                <a href="{{ route('export.exell') }}" class="btn btn-success btn-sm"><i class="fa fa-solid fa-download"></i> Dwonload Excel</a>
                {{-- <button class="btn btn-info btn-sm"><i class="fa fa-solid fa-download"></i> Download exel</button> --}}
            </div>
            {{-- <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#addRowModal"> <i class="fa fa-plus"></i> Add</button> --}}
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="table-row" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th style="width: 1%">#</th>
                        <th>Nama</th>
                        <th>Keperluan</th>
                        <th>Tujuan</th>
                        <th>Kontak</th>
                        <th>Hari/Tanggal</th>
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
                    <span>Tambah Data Tamu</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" id="form-devisi" method="post">
                    @csrf 
                    <div class="form-group">
                        <label>Nama devisi</label>
                        <input class="form-control" type="text" name="nama" placeholder="Nama Tamu" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat Tamu</label>
                        <textarea placeholder="alamat" class="form-control" name="alamat" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Keperluan Tamu</label>
                        <textarea placeholder="Keperluan" class="form-control" name="keperluan" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tujuan Tamu</label>
                          <select class="form-control" name="tujuan">
                            <option selected disabled>--Pilih Tujuan---</option>
                            @foreach ($devisi as $key => $item)
                            <option value="{{ $key }}">{{ $item }}</option>
                            @endforeach
                        </select>                 
                    </div>
                    <div class="form-group">
                        <label>Kontak Tamu</label>
                        <input class="form-control" type="text" name="kontak" placeholder=" Kontak" required>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="submit" id="addRowButton"id="btn" class="btn btn-success">Simpan</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Edit Modal --}}
<div class="modal fade editRowModal" id="editRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title">
                    <span>Edit Data Tamu</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" id="edit_form_devisi" method="post">
                    @csrf 
                    <input type="hidden" name="emp_id" id="emp_id">
                    <div class="form-group">
                        <label>Nama Tamu</label>
                        <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Tamu" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat Tamu</label>
                        <textarea placeholder="alamat" class="form-control" name="alamat" id="alamat" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Keperluan Tamu</label>
                        <textarea placeholder="Keperluan" class="form-control" name="keperluan" id="keperluan" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tujuan Tamu</label>
                          <select class="form-control" id="tujuan" name="tujuan">
                            <option selected disabled>--Pilih Tujuan---</option>
                            @foreach ($devisi as $key => $item)
                            <option value="{{ $key }}">{{ $item }}</option>
                            @endforeach
                        </select>                 
                    </div>
                    <div class="form-group">
                        <label>Kontak Tamu</label>
                        <input class="form-control" type="text" id="kontak" name="kontak" placeholder="Kontak Tamu" required>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="submit" id="addRowButton"id="edit_btn" class="btn btn-primary">Update</button>
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
    table = $('#table-row').DataTable({
    pageLength: 5,
    responsive: true,
    processing: true,
    serverSide: true,
    autoWidth: false,
    ajax: {
        url: '{{ route('admintamu.data') }}',
    },
    columns:[
        {data: 'DT_RowIndex', searchable: false, sortable: false},
        {data: 'nama'},
        {data: 'keperluan'},
        {data: 'nama_devisi'},
        {data: 'kontak'},
        {data: 'hari'},
        {data: 'aksi', searchable: false, sortable: false},
    ]
    });
});

$("#form-devisi").submit(function(e) {
    e.preventDefault();
    const fd = new FormData(this);
    $("#btn").text('Menyimpan...');
    $.ajax({
    url: '{{ route('admintamu.store') }}',
    method: 'post',
    data: fd,
    cache: false,
    contentType: false,
    processData: false,
    dataType: 'json',
        success: function(result){
        $.notify({
            icon: 'flaticon-alarm-1',
            title: 'Mantap!',
            message: 'Data Tamu Berhasil Ditambahkan.',
        },{
            type: 'success',
            placement: {
                from: "bottom",
                align: "center"
            },
            time: 1000,
        });
        table.ajax.reload();
        $("#btn").text('Simpan');
        $("#form-devisi")[0].reset();
        $("#addRowModal").modal('hide');
        },
        error:function(result){
            $.notify({
            icon: 'flaticon-alarm-1',
            title: 'Gagal!',
            message: 'Data Tamu Gagal Ditambahkan.',
        },{
            type: 'danger',
            placement: {
                from: "bottom",
                align: "center"
            },
            time: 1000,
        });
        }
    });
});

$(document).on('click', '.editIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        $.ajax({
          url: '{{ route('admintamu.edit') }}',
          method: 'GET',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          success: function(response) {
            $("#nama").val(response.nama);
            $("#alamat").val(response.alamat);
            $("#keperluan").val(response.keperluan);
            $("#tujuan").val(response.tujuan);
            $("#kontak").val(response.kontak);
            $("#emp_id").val(response.id);
          }
        });
      });


$("#edit_form_devisi").submit(function(e) {
    e.preventDefault();
    const fd = new FormData(this);
    $("#edit_btn").text('Perbarui');
    $.ajax({
        url: '{{ route('admintamu.update') }}',
        method: 'POST',
        data: fd,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(result){
            if(result.errors)
            {

            }
            else
            {
                $.notify({
                    icon: 'flaticon-alarm-1',
                    title: 'Mantap!',
                    message: 'Data Tamu Berhasil Diperbarui.',
                },{
                    type: 'success',
                    placement: {
                        from: "bottom",
                        align: "center"
                    },
                    time: 1000,
                });

                table.ajax.reload();
                $("#edit_btn").text('Perbarui');
                $("#edit_form_devisi")[0].reset();
                $("#editRowModal").modal('hide');
            }
        }
    }); 
});

$(document).on('click', '.deleteIcon', function(e) {
    e.preventDefault();
    let id = $(this).attr('id');
    let csrf = '{{ csrf_token() }}';
    Swal.fire({
        title: 'Apakah Kamu Yakin?',
        text: "Data Tidak Dapat Dikembalikan.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#716aca',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
        $.ajax({
            url: '{{ route('admintamu.destroy') }}',
            method: 'delete',
            data: {
            id: id,
            _token: csrf
            },
            success: function(response) {
            console.log(response);

            $.notify({
                icon: 'flaticon-alarm-1',
                title: 'Mantap!',
                message: 'Data Tamu Berhasil Dihapus.',
            },{
                type: 'success',
                placement: {
                    from: "bottom",
                    align: "center"
                },
                time: 1000,
            });
            table.ajax.reload();
            }
        });
        }
    })
});
</script>

@endpush
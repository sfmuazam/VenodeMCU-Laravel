@extends('app')
@section('content')

<main class="content container mx-auto">

    <div class="content-header">
        <h4 class="content-title ~mx-auto">User</h4>

    </div>

    <div class="content-body">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <div
                                class="w-12 h-12 bg-success me-4 rounded-3 d-flex align-items-center justify-content-center text-white">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                                  </svg>


                            </div>
                        </div>
                        <div>
                            <div class="mb-1">
                                <span class="text-secondary">Jumlah User</span>
                            </div>
                            <span id="jumlah" class="h3 mb-0 lh-1">{{ $jumlah }} User</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-header">
            <h5 class="content-title">Data {{ $title }}</h5>
            <div class="ms-auto">
                <button id="createNewUser" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#modal-kelas">Tambah User</button>
            </div>
        </div>
        <div class="card mb-4">
            <table id="table-tabungan" class="table table-hover mb-0 align-middle">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 5px;">
                            <div data-toggle="tooltip" data-original-title="Delete"
                                class="btn btn-sm btn-icon btn-danger btn-circle mr-2 delete_all">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="w-5 h-5">
                                    <path
                                        d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                </svg>
                            </div>
                        </th>
                        <th>UID</th>
                        <th>Nama</th>
                        <th>Saldo</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="modal-kelas" tabindex="-1" aria-labelledby="exampleModalFormLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex">
                    <h5 class="mt-1 mb-4 me-auto" id="tambahDataTitle">Tambah User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form mb-0" id="formUser" name="formUser">
                    @csrf
                    <div>
                        <input type="hidden" name="id_kelas" id="id_kelas">
                        <div class="mb-4">
                            <label class="form-label required" for="uid">UID</label>
                            <div>
                                <input type="text" id="uid" class="form-control" name="uid"
                                    placeholder="Masukkan UID ...." readonly required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="nama" class="form-label required">Nama</label>
                            <div>
                                <input type="text" id="nama" class="form-control" name="nama"
                                    placeholder="Masukkan Nama ...." required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="saldo" class="form-label required">Saldo</label>
                            <div>
                                <input type="number" id="saldo" class="form-control" name="saldo"
                                    placeholder="Masukkan Saldo Awal ...." required>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-default me-2">Reset</button>
                <button type="submit" class="btn btn-primary" id="saveBtn">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-edit-kelas" tabindex="-1" aria-labelledby="exampleModalFormLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="d-flex">
                    <h5 class="mt-1 mb-4 me-auto" id="tambahDataTitle">Ubah User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form mb-0" id="formEditUser" name="formEditUser">
                    @csrf
                    <div>
                        <input type="hidden" name="id_kelas" id="edit_id_kelas">
                        <div class="mb-4">
                            <label class="form-label required" for="edit_uid">UID</label>
                            <div>
                                <input type="text" id="edit_uid" class="form-control" name="uid"
                                    placeholder="Masukkan UID ...." readonly required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="nama" class="form-label required">Nama</label>
                            <div>
                                <input type="text" id="edit_nama" class="form-control" name="nama"
                                    placeholder="Masukkan Nama ...." required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="saldo" class="form-label required">Saldo</label>
                            <div>
                                <input type="number" id="edit_saldo" class="form-control" name="saldo"
                                    placeholder="Masukkan Saldo Awal ...." required>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-default me-2">Reset</button>
                <button type="submit" class="btn btn-primary" id="saveEditBtn">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('script')
<script type="text/javascript">
    $('document').ready(function () {
        function getUID() {
                $.ajax({
                    url: "{{ route('getUID') }}",
                    method: 'GET',
                    success: function(response) {
                        $('#uid').val(response.uid);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }

          setInterval(function() {
              getUID();
          }, 1000);

            $('#table-tabungan thead tr')
            .clone(true)
            .addClass('filters')
            .appendTo('#table-tabungan thead');

            // table serverside
            let table = $('#table-tabungan').DataTable({
                dom: '<"container-fluid mt-3"l<"row mt-3"<"col"B><"col"f>>>r<"mx-3"t><"container-fluid mb-3"<"row"<"col"i><"col"p>>>',
                orderCellsTop: true,
                buttons: [{
                    extend: 'csv',
                    title: '',
                    exportOptions: {
                        columns: [1, 2, 3]
                    },
                    footer: true,
                },
                {
                    extend: 'excel',
                    title: '',
                    exportOptions: {
                        columns: [1, 2, 3]
                    },
                    footer: true,
                },
                {
                    extend: 'pdf',
                    title: '',
                    exportOptions: {
                        columns: [1, 2, 3]
                    },
                    footer:true,
                }],
                lengthMenu: [
                    [25, 50, 100, -1],
                    [25, 50, 100, "All"]
                ],
                processing: false,
                serverSide: true,
                responsive: false,
                order: [[1, 'desc']],
                ajax: {
                    url: "{{ route('user.index') }}"
                },
                autoWidth: false,
                columns: [
                    {data: 'checkbox', className: 'dt-center', name: 'checkbox', orderable: false, searchable: false},
                    {data: 'uid', name: 'uid'},
                    {data: 'nama', name: 'nama'},
                    {data: 'saldo', name: 'saldo'},
                    {data: 'aksi', name: 'aksi', orderable: false, searchable: false,},
                ],
                initComplete: function() {
                var api = this.api();
                // For each column
                api.columns().eq(0).each(function(colIdx) {
                    // Set the header cell to contain the input element
                    var cell = $('.filters th').eq($(api.column(colIdx).header()).index());
                    var title = $(cell).text();
                    $(cell).html( '<input type="text" class="form-control" placeholder="' + title + '" />' );
                    // On every keypress in this input
                    $('input', $('.filters th').eq($(api.column(colIdx).header()).index()) )
                        .off('keyup change')
                        .on('keyup change', function (e) {
                            e.stopPropagation();
                            // Get the search value
                            $(this).attr('title', $(this).val());
                            var regexr = '({search})'; //$(this).parents('th').find('select').val();
                            var cursorPosition = this.selectionStart;
                            // Search the column for that value
                            api
                                .column(colIdx)
                                .search((this.value != "") ? regexr.replace('{search}', '((('+this.value+')))') : "", this.value != "", this.value == "")
                                .draw();
                            $(this).focus()[0].setSelectionRange(cursorPosition, cursorPosition);
                        });
                });
                api.columns(0).eq(0).each(function(colIdx) {
                    // Set the header cell to contain the input element
                    var cell = $('.filters th').eq($(api.column(colIdx).header()).index());
                    var title = $(cell).text();
                    $(cell).html( '<input type="checkbox" id="master" name="select_all">' );
                });
                $('#master').click(function (e) {
                        $('#table-tabungan tbody :checkbox').prop('checked', $(this).is(':checked'));
                        e.stopImmediatePropagation();
                    });
                api.columns(-1).eq(0).each(function(colIdx) {
                    // Set the header cell to contain the input element
                    var cell = $('.filters th').eq($(api.column(colIdx).header()).index());
                    var title = $(cell).text();
                    $(cell).html( '' );
                });
            },
            });

            // initialize btn add
        $('#createNewUser').click(function () {
            $('#saveBtn').val("Simpan");
            $('#id_kelas').val('');
            $('#formKelas').trigger("reset");
            $('#modal-kelas').modal('show');
            $('#tambahDataTitle').html('Tambah User');
        });

        // initialize btn edit
        $('body').on('click', '.editUser', function () {
            var id_kelas = $(this).data('id');
            $.get("{{route('user.index')}}" + '/' + id_kelas + '/edit', function (data) {
                $('#saveBtn').val("Ubah Kelas");
                $('#modal-edit-kelas').modal('show');
                $('#tambahDataTitle').html('Ubah User');
                $('#edit_id_kelas').val(data.id);
                $('#edit_uid').val(data.uid);
                $('#edit_nama').val(data.nama);
                $('#edit_saldo').val(data.saldo);
            })
        });
        // initialize btn save
        $('#saveBtn').click(function (e) {
            e.preventDefault();
            $(this).html('Simpan');
            $.ajax({
                data: $('#formUser').serialize(),
                url: "{{ route('user.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    if($.isEmptyObject(data.errors)){
                        $('#formUser').trigger("reset");
                        $('#modal-kelas').modal('hide');
                        swal_success();
                        table.draw();
                        $('#jumlah').html(data.jumlah + ' User');
                    }else{
                        $.each(data.errors, function(key,value){
                        $('#' + key)
                            .closest('.form-control')
                            .addClass('is-invalid')
                            .closest('div')
                            .append('<div class="invalid-feedback"></i>' + value + '</div>');
                    })
                    }
                },
                error: function (data) {
                    swal_error();
                    console.log(data);
                }
            });
        });
        $('#saveEditBtn').click(function (e) {
            e.preventDefault();
            $(this).html('Simpan');
            $.ajax({
                data: $('#formEditUser').serialize(),
                url: "{{ route('user.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    if($.isEmptyObject(data.errors)){
                        $('#formEditUser').trigger("reset");
                        $('#modal-edit-kelas').modal('hide');
                        swal_success();
                        table.draw();
                        $('#jumlah').html(data.jumlah + ' User');
                    }else{
                        $.each(data.errors, function(key,value){
                        $('#' + key)
                            .closest('.form-control')
                            .addClass('is-invalid')
                            .closest('div')
                            .append('<div class="invalid-feedback"></i>' + value + '</div>');
                    })
                    }
                },
                error: function (data) {
                    swal_error();
                    console.log(data);
                }
            });

        });
        // initialize btn delete
        $('body').on('click', '.deleteUser', function () {
            var id_kelas = $(this).data("id");

            Swal.fire({
                title: 'Yakin untuk menghapus?',
                text: "Data yang sudah dihapus tidak dapat dipulihkan, lanjutkan?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('user.store') }}" + '/' + id_kelas,
                        success: function (data) {
                            swal_success();
                            table.draw();
                            $('#jumlah').html(data.jumlah + ' User');
                        },
                        error: function (data) {
                            swal_error();
                        }
                    });
                }
            })
        });

        $('.delete_all').on('click', function(e) {
        var allVals = [];
        $(".sub_chk:checked").each(function() {
            allVals.push($(this).attr('data-id'));
        });

        if(allVals.length <=0)
        {
            alert("Pilih data yang akan dihapus!");
        }  else {
            Swal.fire({
            title: 'Yakin untuk menghapus?',
            text: "Data yang sudah dihapus tidak dapat dipulihkan, lanjutkan?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
            if (result.isConfirmed) {
                var join_selected_values = allVals.join(",");
                $.ajax({
                    url: "{{ route('user.deleteAll') }}",
                    type: 'DELETE',
                    data: 'ids='+join_selected_values,
                    success: function (data) {
                        if (data['success']) {
                            $(".sub_chk:checked").each(function() {
                                $(this).parents("tr").remove();
                            });
                            table.draw();
                            swal_success();
                            $('#jumlah').html(data.jumlah + ' User');
                        } else if (data['error']) {
                            swal_error();
                        } else {
                            alert('Whoops Something went wrong!!');
                        }
                    },
                    error: function (data) {
                        alert(data.responseText);
                        console.log(data);
                    }
                });


            $.each(allVals, function( index, value ) {
                $('table tr').filter("[data-row-id='" + value + "']").remove();
            });
            }
        })
        }
        });

        });
</script>
@endsection

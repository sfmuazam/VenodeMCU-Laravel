@extends('app')
@section('content')

<main class="content container mx-auto">

    <div class="content-header">
        <h4 class="content-title ~mx-auto">Transaksi</h4>

    </div>

    <div class="content-body">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <div
                                class="w-12 h-12 bg-success me-4 rounded-3 d-flex align-items-center justify-content-center text-white">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                            </div>
                        </div>
                        <div>
                            <div class="mb-1">
                                <span class="text-secondary">Harga Barang</span>
                            </div>
                            <span id="harga" class="h3 mb-0 lh-1">{{ $harga }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <div
                                class="w-12 h-12 bg-success me-4 rounded-3 d-flex align-items-center justify-content-center text-white">
                                <svg class="h-6 w-6 text-white"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                    <path strokeLinecap="round" strokeLinejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                  </svg>

                            </div>
                        </div>
                        <div>
                            <div class="mb-1">
                                <span class="text-secondary">Total Transaksi</span>
                            </div>
                            <span id="jumlah_transaksi" class="h3 mb-0 lh-1">{{ $jumlah }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="card mb-4">
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <div
                                class="w-12 h-12 bg-success me-4 rounded-3 d-flex align-items-center justify-content-center text-white">
                                <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                  </svg>

                            </div>
                        </div>
                        <div>
                            <div class="mb-1">
                                <span class="text-secondary">Transaksi Hari Ini</span>
                            </div>
                            <span id="jumlah_hari_ini" class="h3 mb-0 lh-1">{{ $jumlah_hari_ini }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-header">
            <h5 class="content-title">Data Transaksi</h5>
            <div class="ms-auto">
                <button id="createNewUser" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#modal-kelas">Ganti Harga</button>
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
                        <th>Tanggal</th>
                        <th>Pembeli</th>
                        <th>Saldo Awal</th>
                        <th>Besar Transaksi</th>
                        <th>Saldo Akhir</th>
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
                <form class="form mb-0" id="form-total-bayar" name="form-total-bayar">
                    @csrf
                    <div>
                        <input type="hidden" value="1" name="id_kelas" id="id_kelas">
                        <div class="mb-4">
                            <label for="harga" class="form-label required">Harga Barang</label>
                            <div>
                                <input type="number" id="harga" class="form-control" name="harga"
                                    placeholder="Masukkan Harga Barang ...." value="{{ $harga }}">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-default me-2">Reset</button>
                <button type="submit" class="btn btn-primary" id="save">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $('document').ready(function () {
            function updateJumlahTransaksi() {
                $.ajax({
                    url: "{{ route('jumlahTransaksi') }}",
                    method: 'GET',
                    success: function(response) {
                        $('#jumlah_transaksi').html(response.jumlah);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }

            function updateJumlahTransaksiToday() {
                $.ajax({
                    url: "{{ route('jumlahTransaksiToday') }}",
                    method: 'GET',
                    success: function(response) {
                        $('#jumlah_hari_ini').html(response.jumlah);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }

          setInterval(function() {
              table.draw();
              updateJumlahTransaksi();
              updateJumlahTransaksiToday();
          }, 1000);

            $('#table-tabungan thead tr')
            .clone(true)
            .addClass('filters')
            .appendTo('#table-tabungan thead');
            // table serverside
            var table = $('#table-tabungan').DataTable({
                dom: '<"container-fluid mt-3"l<"row mt-3"<"col"B><"col"f>>>r<"mx-3"t><"container-fluid mb-3"<"row"<"col"i><"col"p>>>',
                orderCellsTop: true,
                buttons: [{
                    extend: 'csv',
                    title: '',
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6]
                    },
                    footer: true,
                },
                {
                    extend: 'excel',
                    title: '',
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6]
                    },
                    footer: true,
                },
                {
                    extend: 'pdf',
                    title: '',
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6]
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
                    url: "{{ route('transaksi.index') }}"
                },
                autoWidth: false,
                columns: [
                    {data: 'checkbox', className: 'dt-center', name: 'checkbox', orderable: false, searchable: false},
                    {data: 'created_at', name: 'created_at', width: '5%'},
                    {data: 'user.nama', name: 'user.nama'},
                    {data: 'saldo_awal', name: 'saldo_awal'},
                    {data: 'besar_transaksi', name: 'besar_transaksi'},
                    {data: 'sisa_saldo', name: 'sisa_saldo'},
                    {data: 'aksi', name: 'aksi', width: '12%', orderable: false, searchable: false,},
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
                api.columns(1).eq(0).each(function(colIdx) {
                    // Set the header cell to contain the input element
                    var cell = $('.filters th').eq($(api.column(colIdx).header()).index());
                    var title = $(cell).text();
                    $(cell).html( '<input type="date" class="form-control" placeholder="' + title + '" />' );
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
                            // $(this).focus()[0].setSelectionRange(cursorPosition, cursorPosition);
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

            // initialize btn save
          $('#save').click(function (e) {
              e.preventDefault();

              $.ajax({
                  data: $('#form-total-bayar').serialize(),
                  url: "{{ route('barang.store') }}",
                  type: "POST",
                  dataType: 'json',
                  success: function (data) {

                      $('#form-total-bayar').trigger("reset");
                      $('#modal-kelas').modal('hide');
                      swal_success();
                      table.draw();
                      $('#harga').html(rupiah(data.harga));
                  },
                  error: function (data) {
                      swal_error();
                      console.log(data)
                  }
              });

          });

          // initialize btn delete
        $('body').on('click', '.deleteTransaksi', function () {
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
                        url: "{{ route('transaksi.store') }}" + '/' + id_kelas,
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
                    url: "{{ route('transaksi.deleteAll') }}",
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

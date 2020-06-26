@extends('layouts.adminmain')
@section('content')
<section class="section">

    <div class="section-header">
        <h1>Manejemen Pembayaran</h1>
    </div>

    <div class="section-body" id="manajemenpembayaran">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <form method="GET" class="form-inline">
                        <div class="form-group">
                            <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                    <a href="{{ route('pembayaran.index') }}" class="pull-right">
                        <button type="button" class="btn btn-info">All Data</button>
                    </a>
                </div>
                <div class="card-body" style="overflow: scroll">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col"><b>Nomor Invoice</b></th>
                                <th scope="col"><b>Jumlah Bayar</b> </th>
                                <th scope="col">Nama Komunitas </th>
                                <th scope="col">Koordinator</th>
                                <th scope="col">Nama Atlet</th>
                                <th scope="col">Bukti Pembayaran</th>
                                <th scope="col">Status </th>
                                <th scope="col" style="width: 300px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data['pembayaran'] as $pembayaran)
                            @php
                            $komunitas = '-';
                            $koordinator = '-';
                            $atlet = '-';
                            // if($pembayaran->no_invoice == 11) dd($pembayaran->detailPembayaran()->count());
                            if( $pembayaran->detailPembayaran()->count() > 1){
                            $komunitas = $pembayaran->detailPembayaran[0]->atletAktif->koordinator->nama_komunitas;
                            $koordinator = $pembayaran->detailPembayaran[0]->atletAktif->koordinator->nama_koordinator;
                            }else{
                            if( $pembayaran->detailPembayaran()->count() != 0) {
                            $atlet = $pembayaran->detailPembayaran[0]->atletAktif->atlet->nama;
                            $status = $pembayaran->detailPembayaran[0]->atletAktif->atlet->pendaftaran->status->value;
                            $get = $pembayaran->detailPembayaran[0]->atletAktif->atlet->nik_id;
                            $validasi = $pembayaran->detailPembayaran[0]->atletAktif->atlet->pendaftaran->pendaftaran_status_id;
                            }
                            }
                            @endphp
                            <tr>
                                <td>{{ $pembayaran->no_invoice }}</td>
                                <td>Rp.{{ number_format($pembayaran->total_bayar,0, ',' , '.') }}</td>
                                <td>{{ $komunitas }}</td>
                                <td>{{ $koordinator }}</td>
                                <td>{{ $atlet }}</td>
                                <td>
                                    @if( $pembayaran->bukti_pembayaran != '')
                                    <img src="{{ asset('bukti_bayar/'. $pembayaran->bukti_pembayaran) }}" width='75' height='75' class="perbesar">
                                    @else
                                    -
                                    @endif
                                </td>
                                <td>{{ $status }}</td>

                                <td>
                                    <a href="#detailpembayaran">
                                        <button type="button" class="btn btn-sm btn-primary" onclick="loadInvoice('{{ $pembayaran->no_invoice }}')">Detail</button>
                                    </a>
                                    @if($validasi == 1)
                                    <a href="{{ route('pembayaran.proses', ['nik_id' => $get]) }}" onclick="return confirm('Yakin Akan Proses Pembayaran?');">
                                        <button type="button" class="btn btn-sm btn-warning">Proses</button>
                                        @endif

                                        @if($validasi == 2)
                                    </a>
                                    <a href="{{ route('pembayaran.verifikasi', ['nik_id' => $get]) }}" onclick="return confirm('Silahkan cek kembali bukti pembayaran, apakah sudah benar?');">
                                        <button type="button" class="btn btn-sm btn-success">Verifikasi</button>
                                        @endif

                                        @if($validasi == 1)
                                    </a>
                                    <a href="{{ route('pembayaran.tolak', ['nik_id' => $get]) }}" onclick="return confirm('Yakin Akan Tolak Pembayaran?');">
                                        <button type="button" class="btn btn-sm btn-danger">Tolak</button>
                                    </a>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">
                                    <center>Data kosong</center>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-right">
                    <nav class="d-inline-block">
                        {!! $data['pembayaran']->appends(request()->except('page'))->render() !!}
                    </nav>
                </div>
                <!-- ======================popup pembayaran dan perbesar gambar========================= -->
                <!-- ===popup detail pembayaran=== -->
                <form class="popup-pembayaran" id="detailpembayaran">
                    <div title="keluar" class="close bg-danger">
                        <a href="">X</a>
                    </div>
                    <div class="detail-pembayaran">
                        <div class="keterangan-pembayaran">
                            Konfirmasi pembayaran No Pendaftaran<span>?</span>
                        </div>
                        <div class="group-input">
                            <table border="1" cellpadding="5" cellspacing="0">
                                <tr>
                                    <th>Nama Atlit</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Kategori</th>
                                    <th>Biaya Pendaftaran</th>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </table>
                        </div>
                        <div class="group-input">
                            <div class="total-pembayaran bg-danger">
                                <h1>GRAND TOTAL</h1>
                                <h2>1.000.000</h2>
                            </div>
                        </div>
                        <div class="group-input">
                            <table border="1" cellpadding="5" cellspacing="0">
                                <tr>
                                    <th>Nama Bank</th>
                                    <th>No Rekening</th>
                                    <th>Nama Pemilik</th>
                                    <th>Bukti Pembayaran</th>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>
                                        <div class="images"><img src="" alt="" class="perbesar"></div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>
                <!-- ===popup gambar=== -->
                <form action="" class="popup-pembayaran" id="perbesargambar">
                    <div title="keluar" class="close bg-danger">
                        <a href="">X</a>
                    </div>
                    <div class="gambar">
                        <img src="" alt="">
                    </div>
                </form>
                <!-- ======================popup pembayaran dan perbesar gambar akhir========================= -->
            </div>
        </div>
    </div>

</section>
@endsection()

<script src="{{ asset('assets_frontend/js/style.js') }}"></script>
<script type="text/javascript">
    function loadInvoice(no_invoice) {
        $.ajax({
            url: "{{ url('panel/pembayaran/detail') }}/" + no_invoice,
            type: "GET",
            success: function(data) {
                $('#detailpembayaran').html(data);
            }
        });
    }
    // function saveData() {
    //     var id = $('#id').val();
    //     // alert("{{ url('konfirmasi/save') }}/" + id);
    //     console.log($('#tambah').serialize());
    //     $.ajax({
    //         url: "{{ url('konfirmasi/save') }}/" + id,
    //         type: "PUT",
    //         data: $('#tambah').serialize(),
    //         success: function(response) {
    //             alert("Data Disimpan!");
    //             $('#buttonback').click();
    //         },
    //         error: function(error) {
    //             alert("Gagal menyimpan data");
    //             console.error();
    //         }
    //     });
    // }
</script>
</body>
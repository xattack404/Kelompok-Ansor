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
                                <th scope="col"><b>Kode Pendaftaran</b></th>
                                <th scope="col">Jumlah Bayar </th>
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
                            }
                            }
                            @endphp
                            <tr>
                                <td>{{ $pembayaran->no_invoice }}</td>
                                <td>{{ $pembayaran->detailPembayaran[0]->atletAktif->atlet->pendaftaran->kode_pendaftaran }}</td>
                                <td>Rp.{{ number_format($pembayaran->total_bayar,0, ',' , '.') }}</td>
                                <td>{{ $komunitas }}</td>
                                <td>{{ $koordinator }}</td>
                                <td>{{ $atlet }}</td>
                                <td>
                                    @if( $pembayaran->bukti_pembayaran != '')
                                    <a href="#perbesargambar"><img src="{{ asset('bukti_bayar/'. $pembayaran->bukti_pembayaran) }}" onclick="loadImage('{{ $pembayaran->no_invoice }}')" width='75' height='75' class=""></a>
                                    @else
                                    -
                                    @endif
                                </td>
                                <td>{{ $pembayaran->detailPembayaran[0]->atletAktif->atlet->pendaftaran->status->value }}</td>

                                <td>
                                    <a href="#detailpembayaran">
                                        <button type="button" class="btn btn-sm btn-primary" onclick="loadInvoice('{{ $pembayaran->no_invoice }}')">Detail</button>
                                    </a>
                                    @if($pembayaran->detailPembayaran[0]->atletAktif->atlet->pendaftaran->pendaftaran_status_id == 1)
                                    <a href="{{ route('pembayaran.proses', ['kode' => $pembayaran->detailPembayaran[0]->atletAktif->atlet->pendaftaran->kode_pendaftaran]) }}" onclick="return confirm('Yakin Akan Proses Pembayaran?');">
                                        <button type="button" class="btn btn-sm btn-warning">Proses</button>
                                        @endif

                                        @if($pembayaran->detailPembayaran[0]->atletAktif->atlet->pendaftaran->pendaftaran_status_id == 2)
                                    </a>
                                    <a href="{{ route('pembayaran.verifikasi', ['kode' => $pembayaran->detailPembayaran[0]->atletAktif->atlet->pendaftaran->kode_pendaftaran]) }}" onclick="return confirm('Silahkan cek kembali bukti pembayaran, apakah sudah benar?');">
                                        <button type="button" class="btn btn-sm btn-success">Verifikasi</button>
                                        @endif

                                        @if($pembayaran->detailPembayaran[0]->atletAktif->atlet->pendaftaran->pendaftaran_status_id == 1)
                                    </a>
                                    <a href="{{ route('pembayaran.tolak', ['kode' => $pembayaran->detailPembayaran[0]->atletAktif->atlet->pendaftaran->kode_pendaftaran]) }}" onclick="return confirm('Yakin Akan Tolak Pembayaran?');">
                                        <button type="button" class="btn btn-sm btn-danger">Tolak</button>
                                    </a>
                                    @endif
                                    @if($pembayaran->detailPembayaran[0]->atletAktif->atlet->pendaftaran->pendaftaran_status_id == 4)
                                    </a>
                                    <a href="{{ route('pembayaran.hapus', ['no_invoice' => $pembayaran->no_invoice]) }}" onclick="return confirm('Hapus Data?');">
                                        <button type="button" class="btn btn-sm btn-danger">Hapus</button>
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
            </div>
        </div>
    </div>

</section>
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

    function loadImage(no_invoice) {
        $.ajax({
            url: "{{ url('panel/pembayaran/popgambar') }}/" + no_invoice,
            type: "GET",
            success: function(data) {
                $('#perbesargambar').html(data);
            }
        });
    }
</script>
</body>
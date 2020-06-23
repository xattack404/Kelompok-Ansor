@extends('layouts.adminmain')
@section('content')
<section class="section">

    <div class="section-header">
        <h1>Manejemen Pembayaran</h1>
    </div>

    <div class="section-body">
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
                                    <a href="">
                                        <button type="button" class="btn btn-sm btn-primary">Detail</button>
                                    </a>
                                    <a href="{{ route('pembayaran.proses', ['nik_id' => $get]) }}" onclick="return confirm('Yakin Akan Proses Pembayaran?');">
                                        <button type="button" class="btn btn-sm btn-warning">Proses</button>
                                    </a>
                                    <a href="{{ route('pembayaran.verifikasi', ['nik_id' => $get]) }}" onclick="return confirm('Silahkan cek kembali bukti pembayaran, apakah sudah benar?');">
                                        <button type="button" class="btn btn-sm btn-success">Verifikasi</button>
                                    </a>
                                    <a href="{{ route('pembayaran.tolak', ['nik_id' => $get]) }}" onclick="return confirm('Yakin Akan Tolak Pembayaran?');">
                                        <button type="button" class="btn btn-sm btn-danger">Tolak</button>
                                    </a>
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
@endsection()
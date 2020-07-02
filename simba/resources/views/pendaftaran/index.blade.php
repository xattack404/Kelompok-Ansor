@extends('layouts.adminmain')
@section('content')
<section class="section">

    <div class="section-header">
        <h1>Data Pendaftaran</h1>
    </div>

    <div class="section-body" id="index">
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
                        <div class="form-group">
                            <a href="{{ route('manejemenatlet.index') }}" class="pull-right">
                                <button type="button" class="btn btn-info">Semua Data</button>
                            </a>
                        </div>
                    </form>
                </div>
                <div class="card-body" style="overflow: scroll">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Kode Pendaftaran </th>
                                <th scope="col">Nama Koordinator </th>
                                <th scope="col">Nama Atlet </th>
                                <th scope="col" style="width: 250px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $pendaftaran)
                            @php
                            $koordinator = '-';
                            $atlet = '-';
                            if( $pendaftaran->koordinator_id != 0){
                            $koordinator = $pendaftaran->relasiKomunitas->nama_koordinator;
                            }else{
                            $atlet = $pendaftaran->relasiAtlet->nama;
                            }
                            @endphp
                            <tr>
                                <td>{{ $pendaftaran->kode_pendaftaran }}</td>
                                <td>{{ $koordinator }}</td>
                                <td>{{ $atlet }}</td>
                                <td>
                                    <a href="#detailpembayaran">
                                        <button type="button" class="btn btn-sm btn-primary" onclick="loadData('{{ $pendaftaran->kode_pendaftaran }}')">Detail</button>
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
                        {!! $data->appends(request()->except('page'))->render() !!}
                    </nav>
                </div>
            </div>
        </div>
    </div>

</section>
<form class="popup-pembayaran" id="detailpembayaran">
    <div title="keluar" class="close bg-danger">
        <a href="">X</a>
    </div>
    <div class="detail-pembayaran">
        <div class="keterangan-pembayaran">
            No Pendaftaran<span>?</span>
        </div>
        <div class="group-input">
            <table border="1" cellpadding="5" cellspacing="0">
                <tr>
                    <th>Nama Komunitas</th>
                    <th>Nama Koordinator</th>
                    <th>No telepon</th>
                    <th>Email</th>
                    <th>jumlah atlit</th>
                </tr>
                <tr>
                    <td>Komunitas aseek</td>
                    <td>Nanda Cihuy</td>
                    <td>0987654432</td>
                    <td>Nanda@rockmail.com</td>
                    <td>1</td>
                </tr>
            </table>
        </div>
        <div class="group-input">
            <table border="1" cellpadding="5" cellspacing="0">
                <tr>
                    <th>Nama Atlit</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Kategori</th>
                    <th>Lomba</th>
                </tr>
                <tr>
                    <td>Tahaj</td>
                    <td>26feb2781</td>
                    <td>L</td>
                    <td>berenang</td>
                    <td>
                        <ul>
                            <li>berenag</li>
                            <li>lari</li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</form>
@endsection()
<script src="{{ asset('assets_frontend/js/style.js') }}"></script>
<script type="text/javascript">
    function loadData(kode_pendaftaran) {
        $.ajax({
            url: "{{ url('panel/pendaftaran/detail') }}/" + kode_pendaftaran,
            type: "GET",
            success: function(data) {
                $('#detailpembayaran').html(data);
            }
        });
    }
</script>
</body>
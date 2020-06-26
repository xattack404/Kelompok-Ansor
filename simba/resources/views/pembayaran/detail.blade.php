<div title="keluar" class="close bg-danger">
    <a href="">X</a>
</div>
<div class="detail-pembayaran">
    <div class="keterangan-pembayaran">
        Konfirmasi No Invoice Pembayaran<span># {{ $data[0]->no_invoice }}</span>
    </div>
    <div class="group-input">
        @php
        $koordinator = $data[0]->detailPembayaran->atletAktif->koordinator;
        @endphp
        @if( ! empty($koordinator))
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>Nama Komunitas</th>
                <th>Nama Koordinator</th>
                <th>No Telepon</th>
                <th>Email</th>
                <th>Jumlah Atlet</th>
            </tr>
            <tr>
                <td>{{ $koordinator->nama_komunitas }}</td>
                <td>{{ $koordinator->nama_koordinator }}</td>
                <td>{{ $koordinator->no_hp }}</td>
                <td>{{ $koordinator->email }}</td>
                <td>{{ $pembayaran->detailPembayaran()->count()  }}</td>
            </tr>
            @endif
            <table border="1" cellpadding="5" cellspacing="0">
                <tr>
                    <th>Nama Atlit</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Kategori</th>
                    <th>Biaya Pendaftaran</th>
                </tr>
                @foreach($data[0]->detailPembayaran as $DetailPembayaran)
                <tr>
                    <td>{{ $DetailPembayaran->atletAktif->atlet->nama }}</td>
                    <td>{{ $DetailPembayaran->atletAktif->atlet->tgl_lahir }}</td>
                    <td>{{ $DetailPembayaran->atletAktif->atlet->jenis_kelamin }}</td>
                    <td>{{ $DetailPembayaran->kategoriRelasi->nama_kategori }}</td>
                    <td> Rp.{{ number_format($DetailPembayaran->harga,0, ',' , '.') }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
    </div>
    <div class="group-input">
        <div class="total-pembayaran bg-danger">
            <h1>GRAND TOTAL</h1>
            <h2>Rp.{{ number_format($data[0]->total_bayar,0, ',' , '.') }}</h2>
        </div>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>Nama Bank</th>
                <th>No Rekening</th>
                <th>Nama Pemilik</th>
                <th>Bukti Pembayaran</th>
            </tr>
            <tr>
                <td>{{ $pembayaran->nama_bank }}</td>
                <td>{{ $pembayaran->no_rekening }}</td>
                <td>{{ $pembayaran->nama_pemilik }}</td>
                <td>
                    @if( $pembayaran->bukti_pembayaran != '')
                    <img src="{{ asset('bukti_bayar/'. $pembayaran->bukti_pembayaran) }}" width='75' height='75' class="perbesar">
                    @else
                    -
                    @endif
                </td>
            </tr>
        </table>
    </div>

</div>
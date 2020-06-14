<form class="popup-pembayaran" action="{{ route('frontend.konfirmasi.submit', ['no_invoice' => $data->no_invoice]) }}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="keterangan-popup">
        Konfirmasi pembayaran No Invoice <span>{{ $data->no_invoice}}</span>
    </div>
    @php
    $koordinator = $data->detailPembayaran[0]->atletAktif->koordinator;
    @endphp
    @if( ! empty($koordinator))
    <div class="input">
        <label for="">nama lengkap</label>
        <div class="ket"> {{ $koordinator->nama_koordinator }}</div>
    </div>

    <div class="input-boxpopup">
        <div class="input">
            <label for="">No Telepon</label>
            <div class="ket"> {{ $koordinator->no_hp }}</div>
        </div>

        <div class="input">
            <label for="">Email</label>
            <div class="ket"> {{ $koordinator->email }}</div>
        </div>
    </div>

    <div class="input-boxpopup">
        <div class="input">
            <label for="">Nama Komunitas</label>
            <div class="ket"> {{ $koordinator->nama_komunitas }}</div>
        </div>

        <div class="input">
            <label for="">Jumlah Atlit</label>
            <div class="ket"> {{ $data->detailPembayaran()->count() }}</div>
        </div>
    </div>
    @endif
    <div class="input">
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>Nama Atlit</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Kategori</th>
            </tr>
            @foreach($data->detailPembayaran as $detail)
            <tr>
                <td>{{ $detail->atletAktif->atlet->nama }}</td>
                <td>{{ $detail->atletAktif->atlet->tgl_lahir }}</td>
                <td>{{ $detail->atletAktif->atlet->jenis_kelamin }}</td>
                <td>reguler</td>
                <td>{{ $detail->kategoriRelasi->nama_kategori }}</td>
            </tr>
            @endforeach

        </table>
    </div>

    <div class="input-boxpopup2">
        <div class="input">
            <label for="">Nama Bank</label>
            <div class="ket"> BNI</div>
        </div>

        <div class="input">
            <label for="">No Rekening</label>
            <div class="ket"> 123456789</div>
        </div>

        <div class="input">
            <label for="">Nama Rekening</label>
            <div class="ket"> Tahajjudin Fajri </div>
        </div>
    </div>

    <div class="input-boxpopup">
        <div class="input">
            <label for="">Total yang harus dibayar</label>
            <div class="ket"> {{ $data->total_bayar }}</div>
        </div>

        <div class="input">
            <label for="">upload bukti pembayaran</label>
            <div class="upload-box">
                <input type="file" name="" id="upload">
            </div>
        </div>
    </div>

    <p>
        Pembayaran dapat dilakukan melalui: <br>
        *Nama bank: BCA <br>
        *Nomor Rekening: 8950299399 <br>
        *Atas Nama: Agus Prasetyo
    </p>

    <div class="input">
        <label for="">Status Pembayaran</label>
        <div class="ket"> Silakhan Upload bukti pembayaran dulu</div>
    </div>

    <div class="submit-pembayran">
        <a href="#box-pemby"><button type="button">keluar</button></a>
        <button type="submit" class=".blue">Simpan Perubahan</button>
    </div>
</form>
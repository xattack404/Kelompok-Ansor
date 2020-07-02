<div title="keluar" class="close bg-danger">
    <a href="">X</a>
</div>
<div class="detail-pembayaran">
    <div class="keterangan-pembayaran">
        NIK ID <span>( {{ $data[0]->nik_id }} )</span>
    </div>
    <div class="group-input">
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
            <tr>
                <th>Nama Atlit</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat/Kecamatan/Kab-Kot/Provinsi</th>
                <th>Warga Negara</th>
                <th>No telepon</th>
                <th>Email</th>
            </tr>
            </tr>
            @foreach($data as $atlet)
            <tr>
                <td>{{ $atlet->nama }}</td>
                <td>{{ $atlet->tgl_lahir }}</td>
                <td>{{ $atlet->jenis_kelamin }}</td>
                <td>{{ $atlet->alamat }},{{ $atlet->kecamatan }},{{ $atlet->kabupaten_kota }},{{ $atlet->provinsi }}</td>
                <td>{{ $atlet->warga_negara }}</td>
                <td>{{ $atlet->no_hp }}</td>
                <td>{{ $atlet->email }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
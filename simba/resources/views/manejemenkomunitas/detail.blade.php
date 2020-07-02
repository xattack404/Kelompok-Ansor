<div title="keluar" class="close bg-danger">
    <a href="">X</a>
</div>
<div class="detail-pembayaran">
    <div class="keterangan-pembayaran">
        Komunitas ID<span>( {{ $data[0]->id }} )</span>
    </div>
    <div class="group-input">
        <table border="1" cellpadding="5" cellspacing="0">
            @php
            $jumlahAtlet = $data[0]->atletAktif()->count();
            @endphp
            <tr>
                <th>Nama Komunitas</th>
                <th>Nama Koordinator</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat/Kecamatan/Kab-Kot/Provinsi</th>
                <th>Warga Negara</th>
                <th>No telepon</th>
                <th>Email</th>
                <th>jumlah atlit</th>
            </tr>
            <tr>
                <td>{{ $data[0]->nama_komunitas }}</td>
                <td>{{ $data[0]->nama_koordinator }}</td>
                <td>{{ $data[0]->tgl_lahir }}</td>
                <td>{{ $data[0]->jenis_kelamin }}</td>
                <td>{{ $data[0]->alamat }}, {{ $data[0]->kecamatan }}, {{ $data[0]->kabupaten_kota }}, {{ $data[0]->provinsi }}</td>
                <td>{{ $data[0]->warga_negara }}</td>
                <td>{{ $data[0]->no_hp }}</td>
                <td>{{ $data[0]->email }}</td>
                <td>{{ $jumlahAtlet }}</td>
            </tr>
        </table>
    </div>
    <div class="group-input">
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th><b>NIK ID</b></th>
                <th>Nama Atlit</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat/Kecamatan/Kab-Kot/Provinsi</th>
                <th>Warga Negara</th>
                <th>No telepon</th>
                <th>Email</th>
            </tr>
            @foreach( $data[0]->atletAktif as $getData)
            <tr>
                <td>{{ $getData->atlet->nik_id }}</td>
                <td>{{ $getData->atlet->nama }}</td>
                <td>{{ $getData->atlet->tgl_lahir }}</td>
                <td>{{ $getData->atlet->jenis_kelamin }}</td>
                <td>{{ $getData->atlet->alamat }}, {{ $getData->atlet->kecamatan }}, {{ $getData->atlet->kabupaten_kota }}, {{ $getData->atlet->provinsi }}</td>
                <td>{{ $getData->atlet->warga_negara }}</td>
                <td>{{ $getData->atlet->no_hp }}</td>
                <td>{{ $getData->atlet->email }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
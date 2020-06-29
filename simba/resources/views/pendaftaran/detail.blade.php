<div title="keluar" class="close bg-danger">
</div>
<div class="detail-pembayaran">
    <div class="keterangan-pembayaran">
        No Pendaftaran<span>( {{ $data[0]->no_pendaftaran }} )</span>
    </div>
    <div class="group-input">
        @php
        $koordinator = $data[0]->relasiKomunitas;
        $jumlahAtlet = $data[0]->atletAktif()->count();
        @endphp
        @if( ! empty($koordinator))
        <table border="1" cellpadding="5" cellspacing="0">
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
                <td>{{ $koordinator->nama_komunitas }}</td>
                <td>{{ $koordinator->nama_koordinator }}</td>
                <td>{{ $koordinator->tgl_lahir }}</td>
                <td>{{ $koordinator->jenis_kelamin }}</td>
                <td>{{ $koordinator->alamat }}, {{ $koordinator->kecamatan }}, {{ $koordinator->kabupaten_kota }}, {{ $koordinator->provinsi }}</td>
                <td>{{ $koordinator->warga_negara }}</td>
                <td>{{ $koordinator->no_hp }}</td>
                <td>{{ $koordinator->email }}</td>
                <td>{{ $jumlahAtlet }}</td>
            </tr>
            @endif
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
                <th>Kategori</th>
                <th>Lomba</th>
            </tr>
            @foreach( $data[0]->atletAktif as $getData)
            <tr>
                <td>{{ $getData->atlet->nama }}</td>
                <td>{{ $getData->atlet->tgl_lahir }}</td>
                <td>{{ $getData->atlet->jenis_kelamin }}</td>
                <td>{{ $getData->atlet->alamat }}, {{ $koordinator->kecamatan }}, {{ $koordinator->kabupaten_kota }}, {{ $koordinator->provinsi }}</td>
                <td>{{ $getData->atlet->warga_negara }}</td>
                <td>{{ $getData->atlet->no_hp }}</td>
                <td>{{ $getData->atlet->email }}</td>
                <td>{{ $getData->detailPembayaran[0]->kategoriRelasi[0]->nama_kategori }}</td>
                <td>
                    <ul>
                        <li>{{ $getData->event->sub_kategori_id }}</li>
                    </ul>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
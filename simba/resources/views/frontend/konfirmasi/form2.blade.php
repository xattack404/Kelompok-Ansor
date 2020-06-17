<form action="" class="popup-tambah" id="tambah">
    @csrf
    <div class="no-atlit">Nomor Lomba Atlit Aktif (ID: <span>{{ $data['atlet']->nik_id}})</span></div>
    <div class="aksi-popup">
        <button type="submit" style="background-color: #90e98b;">Tambah Lomba</button>
        <button type="submit" style="background-color: #2980b9;">Simpan Perubahan</button>
        <a href="#poppembayaran" style="background-color: #e74c3c;">Kembali</a>
    </div>

    <div class="tabel-tambah">
        <table border="0" cellpadding="5" cellspacing="0">
            <tr>
                <th style="min-width: 100px;">Nama Atlit</th>
                <th style="min-width: 100px;">Tanggal Lahir</th>
                <th style="min-width: 80px;">Jenis Kelamin</th>
                <th style="min-width: 100px;">Kelas</th>
                <th style="min-width: 100px;">Kategori</th>
                <th style="min-width: 100px;">Pilih Lomba</th>
            </tr>
            @php
            $atlet = $data['atlet'];
            @endphp
            <tr>
                <td>{{ $atlet->nama }}</td>
                <td>{{ $atlet->tgl_lahir }}</td>
                <td>{{ $atlet->jenis_kelamin }}</td>
                <td>kelas </td>
                <td></td>
                <td>
                    <select name="lomba" id="lomba">
                        <option value="">--pilih--</option>
                        @foreach($data['sub_kategori'] as $subkat)
                        <option value="{{ $subkat->id }}">{{ $subkat->nama_subkat }}</option>
                        @endforeach
                    </select>
                    <button href="#" style="background-color: #e74c3c; color:white;">X</button>
                <td>
            </tr>
        </table>
    </div>
</form>
@for ($i = 1; $i <= $jumlah; $i++) <div class="box">
    <div class="keterangan">
        <h1>Identitas Anggota #<?= $i; ?></h1>
    </div>
    <div class="input">
        <label for="nik">NIK Anggots</label>
        <input type="number" name="nik_id" id="nik_id" placeholder="masukan NIK" required>
    </div>
    <div class="input">
        <label for="namaanggota">Nama Anggota</label>
        <input type="text" id="namaanggota" placeholder="masukan nama anggota komunitas">
    </div>
    <div class="input">
        <label for="namakom">Tanggal lahir</label>
        <input type="date" id="namakom">
    </div>
    <div class="input">
        <label for="">jenis kelamin</label>
        <select name="jenis_kelamin" id="">
            <option value="">--pilih--</option>
            <option value="L">laki - laki</option>
            <option value="P">perempuan</option>
        </select>
    </div>
    <div class="input">
        <label for="">Status kewarganegaraan</label>
        <select name="" id="">
            <option value="">--pilih--</option>
            <option value="WNI">Warga negara indonesia</option>
            <option value="WNA">Warga negara asing</option>
        </select>
    </div>
    <div class="input">
        <label for="">provinsi</label>
        <input type="text" name="prov" id="prov" placeholder="masukan nama Provinsi" required>
    </div>
    <div class="input">
        <label for="">Kabupaten_kota</label>
        <input type="text" name="kabkot" id="kabkot" placeholder="masukan nama Kabupaten/Kota" required>
    </div>
    <div class="input">
        <label for="">kecamatan</label>
        <input type="text" name="kec" id="kec" placeholder="masukan nama Kecamatan" required>
    </div>
    <div class="input">
        <label for="">alamat</label>
        <textarea name="alamat" id="alamat" placeholder="Max 50 karakter" required style="height: 200px"></textarea>
    </div>
    <div class="input">
        <label for="email">email</label>
        <input type="email" name="email" id="email" placeholder="masukan email aktif" required>
    </div>
    <div class="input">
        <label for="telp">no telepon</label>
        <input type="tel" name="no_hp" id="telp" placeholder="masukan no teleopn aktif" required>
    </div>

    </div>
    @endfor
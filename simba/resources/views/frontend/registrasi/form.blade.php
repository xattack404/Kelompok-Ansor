@for ($i = 1; $i <= $jumlah; $i++)
<div class="bungkus"> 
    <div class="keterangan">
            <h1>Identitas Anggota #<?= $i; ?></h1>
    </div>
    <div class="box">
        <div class="input">
            <label for="nik">NIK Anggota</label>
            <input type="number" name="anggota_nik_id[]" id="nik_id" placeholder="masukan NIK" required>
        </div>
        <div class="input">
            <label for="namaanggota">Nama Anggota</label>
            <input type="text" id="namaanggota" name="anggota_namaanggota[]" placeholder="masukan nama anggota komunitas" required>
        </div>
        <div class="input">
            <label for="namakom">Tanggal lahir</label>
            <input type="date" id="namakom" name="anggota_tanggal_lahir[]" required>
        </div>
        <div class="input">
            <label for="">jenis kelamin</label>
            <select name="anggota_jenis_kelamin[]" id="" required>
                <option value="">--pilih--</option>
                <option value="L">laki - laki</option>
                <option value="P">perempuan</option>
            </select>
        </div>
        <div class="input">
            <label for="email">email</label>
            <input type="email" name="anggota_email[]" id="email" placeholder="masukan email araktif" required>
        </div>
        <div class="input">
            <label for="telp">no telepon</label>
            <input type="tel" name="anggota_no_hp[]" id="telp" placeholder="masukan no teleopn aktif" required>
        </div>
        <div class="input">
            <label>Nama Kategori</label>
            <select id="kategori_usia_id_{{$i}}" name="anggota_kategori_usia_id[]" class="form-control" data-live-search="true" required>
                <option value="">--pilih--</option>
                @foreach($data['kategori'] as $kategori)
                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="input">
            <label for="">Biaya Daftar</label>
            <input type="text" name="anggota_harga[]" id="harga_{{ $i }}" readonly>
        </div>
    </div>
    <div class="box">
        <div class="input">
            <label for="">Status kewarganegaraan</label>
            <select name="anggota_warga_negara[]" id="" required>
                <option value="">--pilih--</option>
                <option value="WNI">Warga negara indonesia</option>
                <option value="WNA">Warga negara asing</option>
            </select>
        </div>
        <div class="input">
            <label for="">provinsi</label>
            <input type="text" name="anggota_prov[]" id="prov" placeholder="masukan nama Provinsi" required>
        </div>
        <div class="input">
            <label for="">Kabupaten_kota</label>
            <input type="text" name="anggota_kabkot[]" id="kabkot" placeholder="masukan nama Kabupaten/Kota" required>
        </div>
        <div class="input">
            <label for="">kecamatan</label>
            <input type="text" name="anggota_kec[]" id="kec" placeholder="masukan nama Kecamatan" required>
        </div>
        <div class="input">
            <label for="">alamat</label>
            <textarea name="anggota_alamat[]" id="alamat" placeholder="Max 50 karakter" required style="height: 200px"></textarea>
        </div>
    </div>
</div>
    <script src="{{ asset('assets_frontend/js/style.js') }}"></script>
    @endfor
    <script type="text/javascript">
        function getHarga() {
            $('select[name="anngota_kategori_usia_id"]').each(function() {
                alert($(this).val());
            });
            alert('test');
            var kategoriID = that;
            if (kategoriID) {
                $.ajax({
                    url: "{{ url('ajax') }}/" + kategoriID,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="subkat"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="subkat"]').append('<option value="' + value.id + '">' + value.nama_subkat + '</option>');
                        });
                    }
                });
            } else {
                $('select[name="subkat"]').empty();
            }
        }
        // $( document ).on( "change", 'select[name*="kategori_usia_id"]', function() {
        // alert($(this).val());
        // console.log($(this).attr('id'));
        // $('select[name="kategori_usia_id[]"]').map( function(key){
        //     console.log(key+':'+$(this).attr('id'));
        // $('input[name="myText"]')[0].id
        // })
        // });
    </script>
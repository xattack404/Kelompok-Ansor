<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="{{ asset('assets_frontend/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_frontend/fontawesome/css/all.min.css') }}">
    <!-- jquery -->
    <script src="{{ asset('assets_frontend/js/jquery-3.4.1.min.js') }}"></script>
</head>

<body>
    @include('layouts.frontendnavbar')
    <div class="all-boxregister">

        <!-- ====== form registrasi komunitas====== -->
        <form class="box-registrasi" action="{{ route('frontend.registrasi.store') }}" id="registrasikomunitas" method="POST">
            @csrf
            <div class="box">
                <!-- <div class="keterangan">
                    <h1>Penanggung Jawab</h1>
                </div> -->
                <div class="input">
                    <label for="namapen">Nama penanggung jawab</label>
                    <input type="text" id="nama_koordinator" name="nama_koordinator" placeholder="masukan nama penanggung jawab">
                </div>
                <div class="input">
                    <label for="tglhr">tanggal lahir</label>
                    <input type="date" name="tgl_lahir" id="tglhr" required>
                </div>
                <div class="input">
                    <label for="email">email</label>
                    <input type="email" name="email" id="email" placeholder="masukan email aktif" required>
                </div>
                <div class="input">
                    <label for="telp">no telepon</label>
                    <input type="tel" name="no_hp" id="telp" placeholder="masukan no teleopn aktif" required>
                </div>
                <div class="input">
                    <label for="jkel">jenis kelamin</label>
                    <select name="jenis_kelamin" id="jkel" required>
                        <option value="">--pilih--</option>
                        <option value="L">laki-laki</option>
                        <option value="P">wanita</option>
                    </select>
                </div>
                <div class="input">
                    <label for="namakom">nama komunitas</label>
                    <input type="text" id="nama_komunitas" name="nama_komunitas" placeholder="masukan nama komunitas anda">
                </div>
            </div>
            <div class="box">
                <div class="input">
                    <label for="jumlahanggota">jummlah anggota</label>
                    <input value="" type="number" id="jumlahanggota" name="jumlahanggota" placeholder="masukan jumlah anggota komunitas">
                </div>
                <div class="input">
                    <label for="">Status kewarganegaraan</label>
                    <select name="warga_negara" id="">
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
                    <textarea name="alamat" id="alamat" placeholder="Max 50 karakter" required style="height: 80px"></textarea>
                </div>
            </div>
            <!-- <div class="box-btn" >
                <a href=""><button type="button" class="red">selanjutnya</button></a>
            </div> -->
            <input class="bayar" type="checkbox" name="bayar" id="bayar" style="display: none">
            <!------------ konfirmasi ------------>
            <div class="box-keterangan" id="konfirmasi">
                <div class="judul-keterangan"><label for="bayar" onclick="calculate_total_bayar()">ringkasan total pembayaran</label></div>
                <div class="keterangan-konten">
                    <table border="1" cellpadding="5" cellspacing="0">
                        <tr>
                            <th>Ringkasan</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                        </tr>
                        <tr>
                            <td>kode unik simulasi</td>
                            <td>Harga</td>
                            <td><input type="number" name="unique_code" id="unique_code" class="form-control bg-white text-white" style="color: #fff" readonly="true" value="101"></td>
                        </tr>
                        <tr>
                            <td>Total keseluruhan</td>
                            <td>Harga</td>
                            <td><input type="number" name="total_bayar" id="total_bayar" class="form-control bg-white text-white" style="color: #fff" readonly="true"></td>
                        </tr>
                    </table>

                    <h2>total yang harus di bayar</h2>
                    <div class="total">
                        <h3><input type="number" name="grand_total" id="grand_total" class="form-control bg-white" readonly="true"></h3>
                    </div>

                    <div class="ikut-serta">
                        <h1>konfirmasi</h1>
                        <p>Dengan menekan tombol Konfirmasi Pemesanan dibawah ini saya menyatakan bahwa semua data yang saya berikan dalam formulir ini adalah benar dan saya setuju untuk mematuhi semua peraturan dan ketentuan yang ditetapkan oleh penyelenggara. Selanjutnya, saya menyatakan bahwa saya dalam keadaan sehat dan membebaskan penyelenggara dan pihak lain yang terlibat dalam penyelenggaraan kegiatan IT SPORT Online dari segala tanggung jawab atas segala cedera, kehilangan, atau kerusakan pada diri saya atau harta benda saya dalam hubungannya dengan kegiatan tersebut. Saat saya mengikuti kegiatan ini, maka saya telah menyetujui deklarasi ini</p>
                        <div class="persetujuan">
                            <label for="">* Saya setuju dengan pernyataan di atas</label>
                            <select name="" id="">
                                <option value="">--pilih--</option>
                                <option value="">IYA</option>
                                <option value="">TIDAK</option>
                            </select>
                        </div>
                        <button type="submit">konfirmasi</button>
                    </div>
                </div>
            </div>
            <!------------ konfirmasi akhir ------------>
        </form>

        <!-- ====== form registrasi Individu/Atlet ====== -->
        <form class="box-registrasi" id="registrasi" action="{{ route('frontend.registrasi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="box">
                <div class="input">
                    <label for="nik">nik</label>
                    <input type="number" name="nik_id" id="nik_id" placeholder="masukan NIK" required>
                </div>
                <div class="input">
                    <label for="nama">nama</label>
                    <input type="text" name="nama" id="nama" placeholder="masukan nama anda" required>
                </div>
                <div class="input">
                    <label for="email">email</label>
                    <input type="email" name="email" id="email" placeholder="masukan email aktif" required>
                </div>
                <div class="input">
                    <label for="telp">no telepon</label>
                    <input type="tel" name="no_hp" id="telp" placeholder="masukan no teleopn aktif" required>
                </div>
                <div class="input">
                    <label for="jkel">jenis kelamin</label>
                    <select name="jenis_kelamin" id="jkel" required>
                        <option value="">--pilih--</option>
                        <option value="L">laki-laki</option>
                        <option value="P">wanita</option>
                    </select>
                </div>
                <div class="input">
                    <label for="tglhr">tanggal lahir</label>
                    <input type="date" name="tgl_lahir" id="tglhr" required>
                </div>
                <div class="input">
                    <label>Nama Kategori</label>
                    <select name="kategori_id" class="form-control" data-live-search="true" required>
                        <option value="">--pilih--</option>
                        @foreach($data['kategori'] as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="input">
                    <label for="title">Kelas</label>
                    <select name="subkat" class="">
                    </select>
                </div>
            </div>

            <div class="box">
                <div class="input">
                    <label for="">Biaya Daftar</label>
                    <input type="text" name="harga" id="harga" readonly>
                </div>
                <div class="input">
                    <label for="">Status kewarganegaraan</label>
                    <select name="warga_negara" id="">
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
            </div>
            <div class="box-btn">
                <a href=""><button type="button" class="red">back</button></a>
                <button type="submit" class="blue">Registrasi</button>
            </div>
        </form>

        <!-- ====== form registrasi akhir ====== -->

        <!-- ====== button registrasi===== -->
        <div class="box2">
            @include('layouts.partials.alert')
            <a href="#registrasi">registrasi</a>
            <a href="#registrasikomunitas">komunitas</a>
        </div>
        <!-- ====== button registrasi===== -->


    </div>

    <script src="{{ asset('assets_frontend/js/style.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on("change", 'select[name*="kategori_usia_id"]', function() {
                var kategoriID = $(this).val();
                var id = $(this).attr('id');
                id = id.split("_");
                if (kategoriID) {
                    $.ajax({
                        url: "{{ url('ajaxkat') }}/" + kategoriID,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('input[name="harga"]').empty();
                            $.each(data, function(key, value) {
                                $('input[id="harga_' + id[3] + '"]').val('' + value.harga + '');
                            });
                        }
                    });
                } else {
                    $('select[name="subkat"]').empty();
                }
            });
        });

        $(document).ready(function() {
            $('select[name="kategori_id"]').on('change', function() {
                var kategoriID = $(this).val();
                if (kategoriID) {
                    $.ajax({
                        url: "{{ url('ajaxkat') }}/" + kategoriID,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('input[name="harga"]').empty();
                            $.each(data, function(key, value) {
                                $('input[name="harga"]').val('' + value.harga + '');
                            });
                        }
                    });
                } else {
                    $('select[name="harga"]').empty();
                }
            });
        });


        // new calculate grand total
        function calculate_total_bayar() {
            $('input[name="total_bayar"]').empty();
            var harga = 0;
            $('input[name="anggota_harga[]"]').map(function(key) {
                // var id = $(this).attr('id');
                // id = id.split("_");
                // var harga = $('input[id="harga_'+id[3]+'"]').val();
                harga += parseInt($(this).val());
                console.log(harga);
                // $('input[name="myText"]')[0].id
            })
            $('#total_bayar').val(harga);
            $('#grand_total').val(harga + parseInt($('input[name="unique_code"]').val()));
        }
        //Hitung Grand Total
        $(document).ready(function() {
            var grand_total = function() {
                var sum = 0;
                $('select[name*="harga"]').each(function() {
                    var num = $(this).val();
                    if (num != 0) {
                        sum = +parseFloat(num);
                    }
                });
                $('input[name="grandtotal"]').val(sum.toFixed(2));
            }
            $('select[name*="harga"]').keyup(function() {
                grand_total();
            });
        });
        $('input[name="jumlahanggota"]').keyup('change', function() {
            var jumlah = $(this).val();
            if (jumlah) {
                $.ajax({
                    url: "{{ url('form') }}/" + jumlah,
                    type: "GET",
                    success: function(data) {
                        $('#form').html(data);
                    }
                });
            } else {
                for (var i = 1; i <= data.target.value; i++) {
                    get_paragraph()
                }

                function remove_paragraph() {
                    $('#form p:last-child').remove();
                }
            }
        });
    </script>

</body>

</html>
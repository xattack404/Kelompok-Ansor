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
    <form class="box-registrasi2" action="" id="registrasikomunitas">
        <?php ?>
        <div class="box"> 
            <div class="keterangan"><h1>Penanggung Jawab</h1></div>
            <div class="input">
                <label for="namapen">nama penanggung jawab</label>
                <input type="text" id="namapen" placeholder="masukan nama penanggung jawab">
            </div>            
            <div class="input">
                <label for="namakom">nama komunitas</label>
                <input type="text" id="namakom" placeholder="masukan nama komunitas anda">
            </div>                        
            <div class="input">
                <label for="jumlahanggota">jummlah anggota</label>
                <input value="" type="number" id="jumlahanggota" name="jumlahanggota" placeholder="masukan jumlah anggota komunitas">
            </div>                        
            <div class="input">
                <label for="">Status kewarganegaraan</label>
                <select name="" id="">
                    <option value="">--pilih--</option>
                    <option value="">Warga negara indonesia</option>
                    <option value="">Warga negara asing</option>
                </select>
            </div>
        </div>
        <?php ?>
       <div id="form"> 
       </div>
            <!-- <div class="box-btn" >
                <a href=""><button type="button" class="red">selanjutnya</button></a>
            </div> -->
        <input class="bayar" type="checkbox" name="bayar" id="bayar" style="display: none">
        <!------------ konfirmasi ------------>
        <div class="box-keterangan" id="konfirmasi">
            <div class="judul-keterangan"><label for="bayar">ringkasan total pembayaran</label></div>
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
                        <td>Rp. 913000</td>
                    </tr>
                    <tr>
                        <td>Total keseluruhan</td>
                        <td>Harga</td>
                        <td>Rp. 913000</td>
                    </tr>
                </table>

                <h2>total yang harus di bayar</h2>
                <div class="total">
                    <h3>Rp. 913000</h3>
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
<!-- ====== form registrasi komunitas akhir ====== -->










<!-- ====== form registrasi Individu/Atlet ====== -->
    <form class="box-registrasi" action="" id="registrasi">
        <div class="box">
            <div class="input">
                <label for="nik">nik</label>
                <input type="text" name="nik" id="nik" placeholder="masukan NIK" required>
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
                <select name="jenis_kelamin" id="jkel"required>
                    <option value="">--pilih--</option>
                    <option value="">laki-laki</option>
                    <option value="">wanita</option>
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
          </div>


        <div class="box">
            <div class="input">
                <label for="">provinsi</label>
                <select name="provinsi" id="" required>
                    <option value="">--pilih provinsi--</option>
                </select>
            </div>
            <div class="input">
                <label for="">Kabupaten_kota</label>
                <select name="kabupaten_kota" id="" required>
                    <option value="">--pilih kota--</option>
                </select>    
            </div>
            <div class="input">
                <label for="">kecamatan</label>
                <select name="kecamatan" id="" required>
                    <option value="">--pilih kecamatan--</option>
                </select>    
            </div>
            <div class="input">
                <label for="title">Kelas</label>
                <select name="subkat" class="">
                    <option value="">--pilih--</option>
                    <option value="">Senior</option>
                    <option value="">Dewasa</option>
                    <option value="">Bocah</option>
                </select>
            </div> 
            <div class="input">
                <label for="">alamat</label>
                <textarea name="alamat" id="" placeholder="" required>isi alamat rumah anda
                </textarea>    
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
        <a href="#registrasi">registrasi</a>
        <a href="#registrasikomunitas">komunitas</a>
    </div>
<!-- ====== button registrasi===== -->


</div>

<script src="{{ asset('assets_frontend/js/style.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="kategori_id"]').on('change', function() {
            var kategoriID = $(this).val();
            if(kategoriID) {
                $.ajax({
                    url: "{{ url('ajax') }}/"+kategoriID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        
                        $('select[name="subkat"]').empty();
                        $.each(data, function(key,value) {
                            $('select[name="subkat"]').append('<option value="'+ value.id +'">'+ value.nama_subkat +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="subkat"]').empty();
            }
        });
    });
    
    $('input[name="jumlahanggota"]').on('change', function() {
            var kategoriID = $(this).val();
            if(kategoriID) {
                $.ajax({
                    url: "{{ url('form') }}/"+kategoriID,
                    type: "GET",
                    success:function(data) {
                    $('#form').append(data);
                       
                    }
                });
            }else{
                $('select[name="subkat"]').empty();
            }
        });
</script>

</body>
</html>

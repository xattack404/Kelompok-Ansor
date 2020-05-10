<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <!-- jquery -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
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
                <input value="" type="number" id="jumlahanggota" placeholder="masukan jumlah anggota komunitas">
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
        <?php for ($i = 1; $i < 5; $i++){ ?>
        <div class="box">
        <div class="keterangan"><h1>Identitas Anggota <?php echo $i; ?> </h1></div>                       
            <div class="input">
                <label for="namaanggota">nama anggota</label>
                <input type="text" id="namaanggota" placeholder="masukan nama anggota komunitas">
            </div>            
            <div class="input">
                <label for="namakom">Tanggal lahir</label>
                <input type="date" id="namakom">
            </div>                          
            <div class="input">
                <label for="">jenis kelamin</label>
                <select name="" id="">
                    <option value="">--pilih--</option>
                    <option value="">laki - laki</option>
                    <option value="">perempuan</option>
                </select>
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
        <?php }?>
            <div class="box-btn">
                <a href=""><button type="button" class="red">back</button></a>
                <button type="submit" class="blue">Registrasi</button>   
            </div>
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
                <select name="kategori_id" id="kategori_id" class="form-control" data-live-search="true" required>
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
                <label for="">alamat</label>
                <textarea name="alamat" id="" cols="30" rows="10" placeholder="isi alamat rumah anda" required>
                </textarea>    
            </div>
            <div class="input">
                <label for="nama">Kelas</label>
                <input type="text" name="kelas" id="kelas" readonly>    
            </div>

            <div class="box-btn">
                    <a href=""><button type="button" class="red">back</button></a>
                    <button type="submit" class="blue">Registrasi</button>   
            </div>   
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
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
      //apabila terjadi event onchange terhadap object <select id=kategori_id>
      $("#kategori_id").change(function(){
        var subkat = $("#kategori_id").val();
        $.ajax({
            url: "{{ route('frontend.registrasi.subkat', ['id' => $kategori->id]) }}",
            data: "kategori_id="+subkat,
            cache: false,
            success: function(msg){
                //jika data sukses diambil dari server kita tampilkan
                //di <select id=kelas>
                $("#kelas").html(msg);
            }
        });
      });
}
</script>
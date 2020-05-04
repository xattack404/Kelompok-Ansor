@extends('layouts.adminmain')
@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>Cabang Olahraga <small>Tambah Data</small></h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('cabangolahraga.index') }}"> 
              <button type="button" class="btn btn-outline-info">
                <i class="fas fa-arrow-circle-left"></i> Back
              </button>
          </a>
          </div>
          <div class="card-body">
            <form action="{{ route('cabangolahraga.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Name Olahraga</label>
                <input type="text" name="nama_or" class="form-control" required>
                <div class="form-group"><label>Deskripsi Lomba</label>
            <textarea class="form-control" rows="10" id="deskripsi" name="deskripsi"></textarea>
                <select required name="kategori" class="form-control" data-live-search="true">
                @foreach($data['kategori'] as $kategori)
                <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }} </option>
                @endforeach
                </select>
                <label>Tanggal Pelaksanaan</label>
                <input type="date" name="tanggal_pelaksanaan" class="form-control" required>
                <div class="form-group"><label>* Foto Baru</label><br />
            <input type="file" name="foto" id="foto" onchange="tampilkanPreview(this,'preview')" required />
            </div>  
            <br><b>Preview Gambar</b><br>
            <img id="preview" src="" alt="" width="35%" />
                      </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">SAVE</button>
              </div>
              </form>
          </div>
        </div>
      </div>  
  </div>
  <script>
function tampilkanPreview(foto,idpreview)
{ //membuat objek gambar
  var gb = foto.files;
  //loop untuk merender gambar
  for (var i = 0; i < gb.length; i++)
  { //bikin variabel
    var gbPreview = gb[i];
    var imageType = /image.*/;
    var preview=document.getElementById(idpreview);            
    var reader = new FileReader();
    if (gbPreview.type.match(imageType)) 
    { //jika tipe data sesuai
      preview.file = gbPreview;
      reader.onload = (function(element) 
      {
        return function(e) 
        {
          element.src = e.target.result;
        };
      })(preview);
      //membaca data URL gambar
      reader.readAsDataURL(gbPreview);
    }
      else
      { //jika tipe data tidak sesuai
        alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
      }
  }    
}
</script>
</section>
@endsection()
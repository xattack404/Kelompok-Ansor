@extends('layouts.adminmain')
@section('content')
<section class="section">

  <div class="section-header">
    <h1>Cabang Olahraga <small>Edit Data</small></h1>
  </div>

  <form action="{{ route('cabangolahraga.update', ['id' => $data['cabang_olahraga']->id]) }}" method="POST" enctype="multipart/form-data" class="section-body container">
    @csrf
    <div class="row" style=" display:grid; grid-template-columns: repeat(auto-fit,minmax(300px, 1fr)); grid-gap: 15px;">
      <!-- halaman1 -->
      <div class="card">
        <div class="card-header">
          <a href="{{ route('cabangolahraga.index') }}">
            <button type="button" class="btn btn-outline-info">
              <i class="fas fa-arrow-circle-left"></i> Back
            </button>
          </a>
        </div>
        <div class="card-body">
          <form action="{{ route('cabangolahraga.update', ['id' => $data['cabang_olahraga']->id]) }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">

            <div class="form-group">
              <label>Name Olahraga</label>
              <input type="text" name="nama_or" class="form-control" required value="{{ $data['cabang_olahraga']->nama_or }}">
            </div>
            <div class="form-group">
              <label> Kategori </label>
              <select required name="kategori" class="form-control" data-live-search="true">
                @foreach($data['kategori'] as $kategori)
                <option value="{{ $kategori->id }}" {{ ($data['cabang_olahraga']->kategori== $kategori->id) ? 'selected' : '' }}>{{ $kategori->nama_kategori }} </option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Tanggal Pelaksanaan</label>
              <input type="date" name="tanggal_pelaksanaan" class="form-control" required value="{{ $data['cabang_olahraga']->tanggal_pelaksanaan }}">
            </div>
            <div class="form-group">
              <label>Gambar Sebelumnya</label><br />
              <img src="{{ asset('image/'. $data['cabang_olahraga']->foto) }}" width='150' height='150'>
            </div>
            <div class="form-group">
              <label>* Foto Baru</label><br />
              <input type="file" name="foto" id="foto" onchange="tampilkanPreview(this,'preview')" required />
            </div>
            <div class="form-group">
              <b>Preview Gambar</b><br>
              <img id="preview" src="" alt="" width="35%" />
            </div>
        </div>
      </div>
      <!-- halaman2 -->
      <div class="card">
        <div class="card-body">
          <div class="form-group">
            <label>Deskripsi Lomba</label>
            <textarea class="form-control" rows="10" id="deskripsi" name="deskripsi" style="min-height: 300px">{{ $data['cabang_olahraga']->deskripsi }}
            </textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">SAVE</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <script>
    function tampilkanPreview(foto, idpreview) { //membuat objek gambar
      var gb = foto.files;
      //loop untuk merender gambar
      for (var i = 0; i < gb.length; i++) { //bikin variabel
        var gbPreview = gb[i];
        var imageType = /image.*/;
        var preview = document.getElementById(idpreview);
        var reader = new FileReader();
        if (gbPreview.type.match(imageType)) { //jika tipe data sesuai
          preview.file = gbPreview;
          reader.onload = (function(element) {
            return function(e) {
              element.src = e.target.result;
            };
          })(preview);
          //membaca data URL gambar
          reader.readAsDataURL(gbPreview);
        } else { //jika tipe data tidak sesuai
          alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
        }
      }
    }
  </script>
</section>
@endsection()
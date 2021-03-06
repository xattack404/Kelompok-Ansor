@extends('layouts.adminmain')

@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>
      Sub Kategori <small>Edit Data</small>
    </h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('subkategori.index') }}"> 
              <button type="button" class="btn btn-outline-info">
                <i class="fas fa-arrow-circle-left"></i> Back
              </button>
          </a>
          </div>
          <div class="card-body">
            <form action="{{ route('subkategori.update', ['id' => $data['sub_kategori']->id]) }}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_method" value="PUT">
              @csrf
              <div class="form-group">
                <label>Nama Kategori</label>
                <select required name="kategori_id" class="form-control" data-live-search="true">
                @foreach($data['kategori'] as $kategori)
                <option value="{{ $kategori->id }}" {{ ($data['sub_kategori']->kategori_id == $kategori->id) ? 'selected' : '' }}>{{ $kategori->nama_kategori }} </option>
                @endforeach
                </select>
                <label>Nama Sub Kategori</label>
                <input type="text" name="nama_subkat" class="form-control" value="{{ $data['sub_kategori']->nama_subkat }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">SAVE</button>
              </div>
              </form>
          </div>
        </div>
      </div>  
  </div>

</section>
@endsection()
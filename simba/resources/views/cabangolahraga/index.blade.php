@extends('layouts.adminmain')
@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>Cabang Olahraga</h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <form method="GET" class="form-inline">
              <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
            </form>
            <a href="{{ route('cabangolahraga.index') }}" class="pull-right">
              <button type="button" class="btn btn-info">All Data</button>
            </a>
          </div>
          <div class="card-header">
            <a href="{{ route('cabangolahraga.create') }}">
              <button type="button" class="btn btn-primary">Tambah Data</button>
            </a>
          </div>
          <div class="card-body" style="overflow: scroll">
            <table class="table table-bordered" >
              <thead>
                <tr>
                  <th scope="col">Nama Olahraga</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Tanggal</th>
                  <th style="width: 100px;">Panduan Lomba</th>
                  <th scope="col">Foto</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
               @forelse($data as $cabangolahraga)
                <tr>
                  <td>{{ $cabangolahraga->nama_or }}</td>
                  <td>{{ $cabangolahraga->url }}</td>
                  <td>{{ $cabangolahraga->deskripsi }}</td>
                  <td>{{ $cabangolahraga->relasiKategori->nama_kategori }}</td>
                  <td>{{ $cabangolahraga->tanggal_pelaksanaan }}</td>
                  <td><input type="file" style="width: 100px;"></td>
                  <td><img src="{{ asset('image/'. $cabangolahraga->foto) }}" width='75' height='75'></td>
                  <td>
                  <a href="{{ route('cabangolahraga.edit', ['id' => $cabangolahraga->id]) }}">
                      <button type="button" class="btn btn-sm btn-info">Edit</button>
                    </a>
                   <a href="{{ route('cabangolahraga.delete', ['id' => $cabangolahraga->id]) }}"
                    onclick="return confirm('Delete data?');" 
                    >
                      <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                    </a>
                   </td>
                </tr>
               @empty
                <tr>
                  <td colspan="3"><center>Data kosong</center></td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
          <div class="card-footer text-right">
            <nav class="d-inline-block">
            {!! $data->appends(request()->except('page'))->render() !!}
            </nav>
          </div>
        </div>
      </div>  
  </div>

</section>
@endsection()


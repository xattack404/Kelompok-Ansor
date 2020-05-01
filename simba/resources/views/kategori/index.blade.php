@extends('layouts.admin')  
@section('content')
<div class="box-body table-responsive padding">
<a href="{{ route('kategori.create') }}">Tambah Kategori Baru</a>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th style="text-align: center">No.</th>
          <th >Nama Kategori</th>
          <th style="text-align: center">Aksi</th>
        </tr>
      </thead>
      <tbody>
      <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Kategori</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
               @forelse($data as $kategori)
                <tr>
                  <td></td>
                  <td>{{ $kategori->nama_kategori }}</td>
                  <td>{{ $kategori->harga }}</td>
                  
                </tr>
               @empty
                <tr>
                  <td colspan="3"><center>Data kosong</center></td>
                </tr>
                @endforelse
       
      </tbody>
    </table>
  </div>
</div>
@endsection
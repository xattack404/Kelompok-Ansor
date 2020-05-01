@extends('layouts.adminmain')  
@section('content')
<div class="box-body table-responsive padding">
<a href="{{ route('subkategori.create') }}">Tambah Sub Kategori</a>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th style="text-align: center">No.</th>
          <th >Nama Sub Kategori</th>
          <th style="text-align: center">Aksi</th>
        </tr>
      </thead>
      <tbody>
      <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">ID Kategori </th>
                  <th scope="col">Nama Sub Kategori</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
               @forelse($data as $subkategori)
                <tr>
                  <td></td>
                  <td>{{ $subkategori->kategori_id }}</td>
                  <td>{{ $subkategori->nama_subkat }}</td>
                  
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
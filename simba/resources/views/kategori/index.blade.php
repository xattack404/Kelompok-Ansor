@extends('layouts.admin')  
@section('content')
    <h1>admin pannel</h1>
    <div class="box-kategori">
      <a class="btn-admin" href="{{ route('kategori.create') }}">Tambah Kategori</a>
        <table border="1" cellspacing="0" cellpadding="5" class="">
          <thead>
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                  </tr>
          </thead>
          <tbody>
                @forelse($data as $kategori)
                  <tr>
                    <td>

                    </td>
                    <td>{{ $kategori->nama_kategori }}</td>
                    <td>{{ $kategori->harga }}</td>
                @empty
                    <td>

                    </td>
                  </tr>
                  @endforelse       
          </tbody>
      </table>
    </div>
@endsection
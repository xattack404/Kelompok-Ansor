@extends('layouts.admin')

@section('content')
                <h1>Tambah Kategori</h1>
                    <form class="box-form" method="POST" action="{{ route('kategori.store') }}">
                        @csrf

                        <div class="input-kategori">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nama Kategori</label>
                            <input id="nama_kategori" type="text" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori" value="{{ old('nama_kategori') }}" required >
                        </div>

                        <div class="input-kategori">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">Harga</label>
                            <input id="harga" type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga') }}" required >
                        </div>
                                <button class="btn-admin" type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                                <button class="btn-admin" type="submit" class="btn btn-primary">
                                    kembali
                                </button>
                    </form>
@endsection

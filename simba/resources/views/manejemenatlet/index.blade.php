@extends('layouts.adminmain')
@section('content')
<section class="section">

    <div class="section-header">
        <h1>Manejemen Data Atlet</h1>
    </div>

    <div class="section-body" id="index">
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
                        <div class="form-group">
                            <a href="{{ route('manejemenatlet.index') }}" class="pull-right">
                                <button type="button" class="btn btn-info">Semua Data</button>
                            </a>
                        </div>
                    </form>
                </div>
                <div class="card-body" style="overflow: scroll">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nama </th>
                                <th scope="col">Email</th>
                                <th scope="col">No Telpon</th>
                                <th scope="col" style="width: 250px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $manejemenatlet)
                            <tr>
                                <td>{{ $manejemenatlet->nama }}</td>
                                <td>{{ $manejemenatlet->email }}</td>
                                <td>{{ $manejemenatlet->no_hp }}</td>
                                <td>
                                    <a href="#popup">
                                        <button type="button" class="btn btn-sm btn-primary">Detail</button>
                                    </a>
                                    <a href="{{ route('manejemenatlet.delete', ['nik_id' => $manejemenatlet->nik_id]) }}" onclick="return confirm('Hapus data?');">
                                        <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">
                                    <center>Data kosong</center>
                                </td>
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

<div class="popup" id="popup">
    <div class="content">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nama </th>
                    <th scope="col">Email</th>
                    <th scope="col">No Telpon</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{ $manejemenatlet->nama }}</td>
                    <td>{{ $manejemenatlet->email }}</td>
                    <td>{{ $manejemenatlet->no_hp }}</td>
                    <td>
            </tbody>
        </table>
    </div>
    <a href="#index" class="closee">close</a>
</div>
<?php

namespace App\Http\Controllers;

use App\Atlet;
use App\Kategori;
use App\Subkategori;
use App\AtletAktif;
use App\DetailEvent;
use App\DetailPembayaran;
use App\Pembayaran;
use App\Pendaftaran;

use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['kategori'] = Kategori::all();
        return view('frontend.registrasi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'nik_id' => 'required|unique:atlet',
        //     'email' => 'email|required|unique:atlet'
        // ]);
        Atlet::create([

            'nik_id'            => $request->nik_id,
            'nama'              => $request->nama,
            'tgl_lahir'         => $request->tgl_lahir,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'alamat'            => $request->alamat,
            'kecamatan'         => $request->kec,
            'kabupaten_kota'    => $request->kabkot,
            'provinsi'          => $request->prov,
            'warga_negara'      => $request->warga_negara,
            'email'             => $request->email,
            'no_hp'             => $request->no_hp
        ]);

        $data = AtletAktif::create([
            'nik_id' => $request->nik_id,
            'koordinasi_id' => 1
        ]);
        $getId = Pembayaran::create([
            'total_bayar' => $request->harga
        ]);
        DetailPembayaran::create([
            'no_invoice'     => $getId->id,
            'atlet_aktif_id' => $data->id,
            'kategori'       => $request->kategori_id,
            'harga'          => $request->harga
        ]);

        //membuat kode pendaftaran unik
        $kode_pendaftaran = 'REG-' . $request->nik_id . '-' . date('Ymdhis');
        Pendaftaran::create([
            'kode_pendaftaran'       => $kode_pendaftaran,
            'nik_id'                 => $request->nik_id,
            'koordinasi_id'          => 1,
            'pendaftaran_status_id'  => 1

        ]);

        return redirect()->route('frontend.registrasi.index')->with('succes', 'Registrasi Berhasil.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subkat = Subkategori::where('kategori_id', $id)
            ->get();

        return json_encode($subkat);
    }

    public function showkat($id)
    {
        $kat = Kategori::where('id', $id)
            ->get();

        return json_encode($kat);
    }

    public function form($jumlah)
    {
        $data['kategori'] = Kategori::all();
        return view('frontend.registrasi.form', compact('jumlah', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Atlet $registrasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atlet $registrasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atlet $registrasi)
    {
        //
    }
}

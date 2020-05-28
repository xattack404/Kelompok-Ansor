<?php

namespace App\Http\Controllers;

use App\Atlet;
use App\Kategori;
use App\Subkategori;
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
        $validatedData = $request->validate([
            'nik_id' => 'trim|required|unique:atlet'
            ]);
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
                                 
        return redirect()->route('frontend.registrasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subkat = Subkategori::where('kategori_id',$id)
                                            ->get();
             
        return json_encode($subkat);
    }

    public function showkat($id)
    {
        $kat = Kategori::where('id',$id)
                                ->get();
             
        return json_encode($kat);
    }

    public function form($jumlah){

        return view('frontend.registrasi.form', compact('jumlah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Registrasi $registrasi)
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
    public function update(Request $request, Registrasi $registrasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registrasi $registrasi)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Pembayaran;
use App\Atlet;
use App\Subkategori;
use App\DetailEvent;

use Illuminate\Http\Request;

class KonfirmasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sub_kategori'] = Subkategori::all();
        return view('frontend.konfirmasi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form($no_invoice)
    {
        $data = Pembayaran::where('no_invoice', $no_invoice)->first();

        return view('frontend.konfirmasi.form', compact('data'));
    }

    public function form2($nik_id)
    {
        $data['atlet'] = Atlet::where('nik_id', $nik_id)->first();
        $data['sub_kategori'] = Subkategori::all();
        return view('frontend.konfirmasi.form2', compact('data'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $no_invoice)
    {
        $fileName = 'buktibyr-' . date('Ymdhis') . '.' . $request->foto->getClientOriginalExtension();
        $request->foto->move('bukti_bayar/', $fileName);
        Pembayaran::whereNoInvoice($no_invoice)
            ->update([
                'nama_bank' => $request->nama_bank,
                'no_rekening' => $request->no_rekening,
                'nama_pemilik' => $request->nama_pemilik,
                'bukti_pembayaran' => $fileName
            ]);
        return redirect()->route('frontend.konfirmasi.index')->with('succes', ' Berhasil Disimpan.');;
    }

    public function store2(Request $request, $id)
    {
        // $data = DetailEvent::where('atlet_aktif_id', $id)->first();
        // if ($data->sub_kategori_id == $request->lomba) {
        //     foreach ($request->lomba as $key => $value) {
        //         // dd($request->all());
        //         DetailEvent::whereAtletAktifId($id)->update([
        //             'atlet_aktif_id' => $id,
        //             'sub_kategori_id' => $request->lomba[$key]
        //         ]);
        //     }
        //     return 'success';
        //     return redirect()->route('frontend.konfirmasi.index')->with('succes', 'Registrasi Berhasil.');
        // } else {
        foreach ($request->lomba as $key => $value) {
            // dd($request->all());
            DetailEvent::create([
                'atlet_aktif_id' => $id,
                'sub_kategori_id' => $request->lomba[$key]
            ]);
        }
        return 'success';
        return redirect()->route('frontend.konfirmasi.index')->with('succes', 'Registrasi Berhasil.');
        // }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $inv = Pembayaran::where('no_invoice', $id)
        //     ->get();

        // return json_encode($inv);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

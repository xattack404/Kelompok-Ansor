<?php

namespace App\Http\Controllers;

use App\Pembayaran;
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
        return view('frontend.konfirmasi.index');
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inv = Pembayaran::where('no_invoice', $id)
            ->get();

        return json_encode($inv);
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
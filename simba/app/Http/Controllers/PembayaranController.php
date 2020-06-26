<?php

namespace App\Http\Controllers;

use App\Pembayaran;
use App\DetailPembayaran;
use App\Atlet;
use App\AtletAktif;
use App\Komunitas;
use App\Pendaftaran;
use App\PendaftaranStatus;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pembayaran'] = Pembayaran::paginate(10);
        $data['pendaftaran'] = Pendaftaran::paginate(10);
        return view('pembayaran.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function prosesInvoice($nik_id)
    {
        Pendaftaran::where('nik_id', $nik_id)
            ->update([
                'pendaftaran_status_id' => 2
            ]);
        return redirect()->route('pembayaran.index');
    }

    public function verifikasiInvoice($nik_id)
    {
        Pendaftaran::where('nik_id', $nik_id)
            ->update([
                'pendaftaran_status_id' => 3
            ]);
        return redirect()->route('pembayaran.index');
    }

    public function tolakInvoice($nik_id)
    {
        Pendaftaran::where('nik_id', $nik_id)
            ->update([
                'pendaftaran_status_id' => 4
            ]);
        return redirect()->route('pembayaran.index');
    }

    public function pembayaranDetail($no_invoice)
    {
        $data = Pembayaran::where('no_invoice', $no_invoice)->get();
        return view('pembayaran.detail', compact('data'));
    }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

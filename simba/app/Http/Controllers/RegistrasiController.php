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
use App\Komunitas;

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
        if (empty($request->anggota_nik_id)) {
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
                'nik_id' => $request->nik_id
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
        } else {

            // simpan data komunitas
            $komunitas = Komunitas::create([
                'nama_komunitas' => $request->nama_komunitas,
                'nama_koordinator' => $request->nama_koordinator,
                'tgl_lahir' => $request->tgl_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat' => $request->alamat,
                'kecamatan' => $request->kec,
                'kabupaten_kota' => $request->kabkot,
                'provinsi' => $request->prov,
                'warga_negara' => $request->warga_negara,
                'email' => $request->email,
                'no_hp' => $request->no_hp
            ]);

            // create pembayaran
            $pembayaran = Pembayaran::create([
                'total_bayar' => $request->grand_total
            ]);

            //membuat kode pendaftaran unik
            $kode_pendaftaran = 'REG-' . date('Ymdhis');
            foreach ($request->anggota_nik_id as $key => $value) {
                // simpan data anggota komunitas
                $atlet = Atlet::create([
                    'nik_id'            => $request->anggota_nik_id[$key],
                    'nama'              => $request->anggota_namaanggota[$key],
                    'tgl_lahir'         => $request->anggota_tanggal_lahir[$key],
                    'jenis_kelamin'     => $request->anggota_jenis_kelamin[$key],
                    'alamat'            => $request->anggota_alamat[$key],
                    'kecamatan'         => $request->anggota_kec[$key],
                    'kabupaten_kota'    => $request->anggota_kabkot[$key],
                    'provinsi'          => $request->anggota_prov[$key],
                    'warga_negara'      => $request->anggota_warga_negara[$key],
                    'email'             => $request->anggota_email[$key],
                    'no_hp'             => $request->anggota_no_hp[$key]
                ]);

                $atletAktif = AtletAktif::create([
                    'koordinator_id'    => $komunitas->id,
                    'nik_id'            => $request->anggota_nik_id[$key]
                ]);

                Pendaftaran::create([
                    'kode_pendaftaran'       => $kode_pendaftaran,
                    'nik_id'                 => $request->anggota_nik_id[$key],
                    'koordinasi_id'          => 2,
                    'koordinator_id'         => $komunitas->id,
                    'pendaftaran_status_id'  => 1
                ]);

                DetailPembayaran::create([
                    'no_invoice'     => $pembayaran->id,
                    'atlet_aktif_id' => $atletAktif->id,
                    'kategori'       => $request->anggota_kategori_usia_id[$key],
                    'harga'          => $request->anggota_harga[$key]
                ]);
            }
        }

        // $validatedData = $request->validate([
        //     'nik_id' => 'required|unique:atlet',
        //     'email' => 'email|required|unique:atlet'
        // ]);
        // 

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

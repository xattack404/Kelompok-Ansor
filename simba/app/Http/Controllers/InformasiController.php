<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.informasi.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Infoweb  $infoweb
     * @return \Illuminate\Http\Response
     */
    public function show(Infoweb $infoweb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Infoweb  $infoweb
     * @return \Illuminate\Http\Response
     */
    public function edit(Infoweb $infoweb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Infoweb  $infoweb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Infoweb $infoweb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Infoweb  $infoweb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infoweb $infoweb)
    {
        //
    }
}

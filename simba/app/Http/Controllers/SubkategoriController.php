<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subkategori;
class SubkategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Subkategori::paginate(10);
        return view('subkategori.index',compact('data'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subkategori.create');
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
            'nama_subkat' => 'required|unique:sub_kategori|max:50'
            ]);
        Subkategori::create(['kategori_id' => $request->kategori_id,'nama_subkat' => $request->nama_subkat]);          
        return redirect()->route('subkategori.index');
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
        $data = Subkategori::find($id);
        return view('subkategori.edit',compact('data'));
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
        Subkategori::whereId($id)->update(['kategori_id'=> $request->kategori_id,
        'nama_subkat'=> $request->nama_subkat]);
        return redirect()->route('subkategori.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Subkategori::whereId($id)->delete();
        return redirect()->route('subkategori.index');  
    
      }
}

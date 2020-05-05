<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cabangolahraga;
use App\Kategori;
class cabangolahragaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Cabangolahraga::paginate(10);
        return view('cabangolahraga.index',compact('data'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kategori'] = Kategori::all();
        return view('cabangolahraga.create',compact('data'));

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
            'nama_or' => 'required|max:50',
            'deskripsi' => 'required|max:200'
        ]);
        $fileName = 'lomba-'.date('Ymdhis').'.'.$request->foto->getClientOriginalExtension();    
        $request->foto->move('image/', $fileName);

        Cabangolahraga::create([
            'nama_or' => $request->nama_or,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan,
            'foto' =>  $fileName
        ]);
        return redirect()->route('cabangolahraga.index');
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
        $data['kategori'] = Kategori::all();
        $data['cabang_olahraga'] = Cabangolahraga::find($id);
        return view('cabangolahraga.edit',compact('data'));
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
        $fileName = 'lomba-'.date('Ymdhis').'.'.$request->foto->getClientOriginalExtension();    
        $request->foto->move('image/', $fileName);
        Cabangolahraga::whereId($id)->update([
            'nama_or' => $request->nama_or,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan,
            'foto' => $fileName
        ]);
        return redirect()->route('cabangolahraga.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Cabangolahraga::find($id);
        if(\File::exists(public_path('image/'.$data->foto))){

            \File::delete(public_path('image/'.$data->foto));
        
          }
        Cabangolahraga::whereId($id)->delete();
        return redirect()->route('cabangolahraga.index');
    }
}

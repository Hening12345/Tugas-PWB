<?php

namespace App\Http\Controllers;

use App\jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = jurusan::all();
        return view('page.jurusan', ['jurusan' => $page]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.createjrs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$jurusan = new jurusan;
        //$jurusan->nama_jurusan = $request->nama_jurusan;

        //$jurusan->save();

        //jurusan::create([
          //  'nama_jurusan' => $request->nama_jurusan
        //]);

        $request->validate([
            'nama_jurusan' => 'required'
        ]);

        jurusan::create($request->all()); 

        return redirect('/jurusan')->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show(jurusan $jurusan)
    {
        return view('page.showjrs', ['showjrs' => $jurusan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit(jurusan $jurusan)
    {
        return view('page.editjrs', ['editjrs' => $jurusan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jurusan $jurusan)
    {
        $request->validate([
            'nama_jurusan' => 'required'
        ]);
        
        jurusan::where('id', $jurusan->id)
                ->update([
                    'nama_jurusan' => $request->nama_jurusan
                ]);

        return redirect('/jurusan')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy(jurusan $jurusan)
    {
        jurusan::destroy($jurusan->id); 

        return redirect('/jurusan')->with('status', 'Data Berhasil Dihapus!');
    }
}

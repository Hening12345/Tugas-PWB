<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = siswa::all();
        return view('page.siswa', ['siswa' => $page]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        /**$siswa = new Siswa;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        return "Data Berhasil Masuk!";**/

        /**return view('page.createsw');**/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**$request->validate([
            'nama_siswa' => 'required'
        ]);

        Siswa::create($request->all()); 

        return redirect('/siswa')->with('status', 'Data Berhasil Ditambahkan!');**/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /**return view('page.showsw', ['showsw' => $siswa]);**/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /**return view('page.editsw', ['editsw' => $siswa]);**/
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
        /**$nama = $request->nama;
        $alamat = $request->alamat;

        $siswa = Siswa::find($id);
        $siswa->nama = $nama;
        $siswa->alamat = $alamat;
        $siswa->save();

        return "Data Berhasil diUpdate!";**/
/**
        $request->validate([
            'nama_siswa' => 'required'
        ]);
        
        Siswa::where('id', $siswa->id)
                ->update([
                    'nama_siswa' => $request->nama_siswa
                ]);

        return redirect('/siswa')->with('status', 'Data Berhasil Diubah!');**/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /**$siswa = Siswa::find($id);
        $siswa->delete();

        return "Data Berhasil diHapus!"**/

        /**Siswa::destroy($siswa->id); 

        return redirect('/siswa')->with('status', 'Data Berhasil Dihapus!');**/
    }
}

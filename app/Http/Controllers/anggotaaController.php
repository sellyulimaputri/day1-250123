<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class anggotaaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        DB::table('anggota')->insert([
            'kode_anggota' => $request->kode,
            'nama_anggota' => $request->nama,
            'jk_anggota' => $request->jenisKelamin,
            'jurusan_anggota' => $request->jurusan,
            'no_telp_anggota' => $request->telepon,
            'alamat_anggota' => $request->alamat
        ]);
        return redirect('/anggota');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $anggota = DB::select("select * from anggota");
        return view('anggota',['anggota' => $anggota]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota = DB::table('anggota')->where('id_anggota',$id)->get();
        return view('editAnggota',['anggota'=>$anggota]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        DB::table('anggota')->where('id_anggota',$request->first)->update([
            'kode_anggota'=>$request->kode,
            'nama_anggota'=>$request->nama,
            'jk_anggota'=>$request->jenisKelamin,
            'jurusan_anggota'=>$request->jurusan,
            'no_telp_anggota'=>$request->telepon,
            'alamat_anggota'=>$request->alamat
        ]);
        return redirect('/anggota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        DB::table('anggota')->where('id_anggota',$post)->delete();
        return redirect('/anggota');
    }
}

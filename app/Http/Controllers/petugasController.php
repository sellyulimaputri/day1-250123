<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class petugasController extends Controller
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
        DB::table('petugas')->insert([
            'id_petugas' => $request->id,
            'nama_petugas' => $request->nama,
            'jabatan_petugas' => $request->jabatan,
            'no_telp_petugas' => $request->telepon,
            'alamat_petugas' => $request->alamat
        ]);
        return redirect('/petugas');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $petugas = DB::select("select * from petugas");
        return view('petugas',['petugas'=>$petugas]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petugas = DB::table('petugas')->where('id_petugas',$id)->get();
        return view('editPetugas',['petugas'=>$petugas]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        DB::table('petugas')->where('id_petugas',$request->first)->update([
            'id_petugas' => $request->id,
            'nama_petugas' => $request->nama,
            'jabatan_petugas' => $request->jabatan,
            'no_telp_petugas' => $request->telepon,
            'alamat_petugas' => $request->alamat
        ]);
        return redirect('/petugas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        DB::table('petugas')->where('id_petugas',$post)->delete();
        return redirect('/petugas');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bukuController extends Controller
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
        DB::table('buku')->insert([
            'kode_buku' => $request->kode,
            'judul_buku' => $request->judul,
            'penulis_buku' => $request->penulis,
            'penerbit_buku' => $request->penerbit,
            'tahun_penerbit' => $request->tahun,
            'stok' => $request->stok
        ]);
        return redirect('/dataBuku');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $buku = DB::select('select * from buku');
        return view('dataBuku',['buku' => $buku]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = DB::table('buku')->where('id_buku',$id)->get();
        return view('editBuku',['buku'=>$buku]);
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
        DB::table('buku')->where('id_buku',$request->first)->update([
            'kode_buku' => $request->kode,
            'judul_buku' => $request->judul,
            'penulis_buku' => $request->penulis,
            'penerbit_buku' => $request->penerbit,
            'tahun_penerbit' => $request->tahun,
            'stok' => $request->stok
        ]);
        return redirect('/dataBuku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        DB::table('buku')->where('id_buku',$post)->delete();
        return redirect('/dataBuku');
    }
}

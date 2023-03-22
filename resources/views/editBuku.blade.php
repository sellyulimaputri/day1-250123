@extends('default.navbar')
@section('container')
<h2 class="titleContainer">UPDATE BUKU PERPUSTAKAAN</h2>
@foreach($buku as $b)
<form action="/dataBuku/update" enctype="multipart/form-data" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="first" value="{{ $b->id_buku }}">
    <table cellspacing="5">
        <tr>
            <td><input type="text" class="input" size="50" name="kode" placeholder="Kode Buku" value="{{ $b->kode_buku }}" required=""></td>
        </tr>
        <tr>
            <td><input type="text" class="input" size="50" name="judul" placeholder="Judul Buku" value="{{ $b->judul_buku }}" required=""></td>
        </tr>
        <tr>
            <td><input type="text" class="input" size="50" name="penulis" placeholder="Penulis Buku" value="{{ $b->penulis_buku }}" required=""></td>
        </tr>
        <tr>
            <td><input type="text" class="input" size="50" name="penerbit" placeholder="Penerbit Buku" value="{{ $b->penerbit_buku }}" required=""></td>
        </tr>
        <tr>
            <td><input type="text" class="input" size="50" name="tahun" placeholder="Tahun Penerbit" value="{{ $b->tahun_penerbit }}" required=""></td>
        </tr>
        <tr>
            <td><input type="text" class="input" size="50" name="stok" placeholder="Stok Buku" value="{{ $b->stok }}" required=""></td>
        </tr>
        <tr>
            <td><input type="submit" class="input" name="simpan" value="Simpan Perubahan"></td>
        </tr>
    </table>
    <a href="/dataBuku" class="tambah-produk input">
        <img src="assets/icons8-back-arrow-90.png" alt="" class="icon">
        <span>Kembali</span>
    </a>
</form>
@endforeach
@endsection
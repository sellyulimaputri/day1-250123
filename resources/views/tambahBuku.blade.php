@extends('default.navbar')
@section('container')
<h2 class="titleContainer">TAMBAH BUKU PERPUSTAKAAN</h2>
<form action="/dataBuku/store" enctype="multipart/form-data" method="post">
    {{ csrf_field() }}
    <table cellspacing="5">
        <tr>
            <td><input type="text" class="input" size="50" name="kode" placeholder="Kode Buku" required=""></td>
        </tr>
        <tr>
            <td><input type="text" class="input" size="50" name="judul" placeholder="Judul Buku" required=""></td>
        </tr>
        <tr>
            <td><input type="text" class="input" size="50" name="penulis" placeholder="Penulis Buku" required=""></td>
        </tr>
        <tr>
            <td><input type="text" class="input" size="50" name="penerbit" placeholder="Penerbit Buku" required=""></td>
        </tr>
        <tr>
            <td><input type="text" class="input" size="50" name="tahun" placeholder="Tahun Penerbit" required=""></td>
        </tr>
        <tr>
            <td><input type="text" class="input" size="50" name="stok" placeholder="Stok Buku" required=""></td>
        </tr>
        <tr>
            <td><input type="submit" class="input" name="tambah-buku" value="Tambah Buku"></td>
        </tr>
    </table>
    <a href="/dataBuku" class="tambah-produk input">
        <img src="assets/icons8-back-arrow-90.png" alt="" class="icon">
        <span>Kembali</span>
    </a>
</form>
@endsection
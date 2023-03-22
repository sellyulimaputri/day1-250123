@extends('default.navbar')
@section('container')
<h2 class="titleContainer">TAMBAH PETUGAS PERPUSTAKAAN</h2>
<form action="php/tambah-petugas-proses.php" enctype="multipart/form-data" method="post">
    <table cellspacing="5">
        <tr>
            <td><input type="text" class="input" size="50" name="nama" placeholder="Nama Petugas" required=""></td>
        </tr>
        <tr>
            <td><input type="text" class="input" size="50" name="jabatan" placeholder="Jabatan Petugas" required=""></td>
        </tr>
        <tr>
            <td><input type="text" class="input" size="50" name="telepon" placeholder="Telepon Petugas" required=""></td>
        </tr>
        <tr>
            <td><input type="text" class="input" size="50" name="alamat" placeholder="Alamat Petugas" required=""></td>
        </tr>
        <tr>
            <td><input type="submit" class="input" name="tambah-petugas" value="Tambah Petugas"></td>
        </tr>
    </table>
    <a href="/petugas" class="tambah-produk input">
        <img src="assets/icons8-back-arrow-90.png" alt="" class="icon">
        <span>Kembali</span>
    </a>
</form>
@endsection
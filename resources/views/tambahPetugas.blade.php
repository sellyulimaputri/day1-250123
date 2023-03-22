@extends('default.navbar')
@section('container')
    <h2 class="titleContainer">TAMBAH PETUGAS PERPUSTAKAAN</h2>
    <form action="/tambahPetugas/store" method="post">
        {{ csrf_field() }}
        <table cellspacing="5">
            <tr>
                <td><input type="text" class="input" size="50" name="id" placeholder="Kode petugas" required=""></td>
            </tr>
            <tr>
                <td><input type="text" class="input" size="50" name="nama" placeholder="Nama Legkap" required=""></td>
            </tr>
            </tr>
            <tr>
                <td><input type="text" class="input" size="50" name="jabatan" placeholder="Nama Legkap" required=""></td>
            </tr>
            <tr>
                <td><input type="text" class="input" size="50" name="telepon" placeholder="telepon" required=""></td>
            </tr>
            <tr>
                <td><input type="text" class="input" size="50" name="alamat" placeholder="alamat" required=""></td>
            </tr>
            <tr>
                <td><input type="submit" class="input"  value="Simpan"></td>
            </tr>
        </table>
        <a href="/anggota" class="tambah-produk input">
            <img src="assets/icons8-back-arrow-90.png" alt="" class="icon">
            <span>Kembali</span>
        </a>
    </form>
@endsection
@extends('default.navbar')
@section('container')
<h2 class="titleContainer">UPDATE BUKU PERPUSTAKAAN</h2>
@foreach($petugas as $p)
<form action="/petugas/update" enctype="multipart/form-data" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="first" value="{{ $p->id_petugas }}">
    <table cellspacing="5">
        <tr>
            <td><input type="text" class="input" size="50" name="id" placeholder="Kode petugas" value="{{ $p->id_petugas }}" required=""></td>
        </tr>
        <tr>
            <td><input type="text" class="input" size="50" name="nama" placeholder="Nama Legkap" value="{{ $p->nama_petugas }}" required=""></td>
        </tr>
        </tr>
        <tr>
            <td><input type="text" class="input" size="50" name="jabatan" placeholder="Nama Legkap" value="{{ $p->jabatan_petugas }}" required=""></td>
        </tr>
        <tr>
            <td><input type="text" class="input" size="50" name="telepon" placeholder="telepon" value="{{ $p->no_telp_petugas }}" required=""></td>
        </tr>
        <tr>
            <td><input type="text" class="input" size="50" name="alamat" placeholder="alamat" value="{{ $p->alamat_petugas }}" required=""></td>
        </tr>
        <tr>
            <td><input type="submit" class="input"  value="Simpan"></td>
        </tr>
    </table>
    <a href="/petugas" class="tambah-produk input">
        <img src="/assets/icons8-back-arrow-90.png" alt="" class="icon">
        <span>Kembali</span>
    </a>
</form>
@endforeach
@endsection
@extends('default.navbar')

@section('container')
<h2 class="titleContainer">UPDATE BUKU PERPUSTAKAAN</h2>
@foreach($anggota as $p)
<form action="/anggota/update" enctype="multipart/form-data" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="first" value="{{ $p->id_anggota }}">
    <table cellspacing="5">
        <tr>
            <td><input type="text" class="input" size="50" name="kode" placeholder="Kode Anggota" value="{{ $p->kode_anggota }}" required=""></td>
        </tr>
        <tr>
            <td><input type="text" class="input" size="50" name="nama" placeholder="Nama Legkap" value="{{ $p->nama_anggota }}" required=""></td>
        </tr>
        <tr>
            <td>
                <select name="jenisKelamin" class="input" id=""  value="{{ $p->jk_anggota }}"required="">
                    <option>Perempuan</option>
                    <option>Laki laki</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <select name="jurusan" class="input" id="" value="{{ $p->jurusan_anggota }}" required="">
                    <option>Rekayasa Perangkat Lunak</option>
                    <option>Teknik Kompoter dan Jaringan</option>
                    <option>Teknik Elektronika</option>
                    <option>Teknik Kendaraan Ringan Otomotif</option>
                    <option>Desain Pemodelan dan Informasi Bangunan</option>
                    <option>Bisnis Konstruksi dan Properti</option>
                    <option>Teknik Instalasi Tenaga Listrik</option>
                    <option>Teknik Fabrikasi Logam dan Manufaktur</option>
                    <option>Geomatika</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="text" class="input" size="50" name="telepon" placeholder="telepon" value="{{ $p->no_telp_anggota }}" required=""></td>
        </tr>
        <tr>
            <td><input type="text" class="input" size="50" name="alamat" placeholder="alamat" value="{{ $p->alamat_anggota }}" required=""></td>
        </tr>
        <tr>
            <td><input type="submit" class="input"  value="Simpan"></td>
        </tr>
    </table>
    <a href="/anggota" class="tambah-produk input">
        <img src="/assets/icons8-back-arrow-90.png" alt="" class="icon">
        <span>Kembali</span>
    </a>
</form>
@endforeach
@endsection
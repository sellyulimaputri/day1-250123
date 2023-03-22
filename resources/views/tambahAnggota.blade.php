@extends('default.navbar')
@section('container')
    <h2 class="titleContainer">TAMBAH ANGGOTA PERPUSTAKAAN</h2>
    <form action="/anggota/store" method="post">
        {{ csrf_field() }}
        <table cellspacing="5">
            <tr>
                <td><input type="text" class="input" size="50" name="kode" placeholder="Kode Anggota" required=""></td>
            </tr>
            <tr>
                <td><input type="text" class="input" size="50" name="nama" placeholder="Nama Legkap" required=""></td>
            </tr>
            <tr>
                <td>
                    <select name="jenisKelamin" class="input" id="" required="">
                        <option>Perempuan</option>
                        <option>Laki laki</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <select name="jurusan" class="input" id="" required="">
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
                <td><input type="text" class="input" size="50" name="telepon" placeholder="telepon" required=""></td>
            </tr>
            <tr>
                <td><input type="text" class="input" size="50" name="alamat" placeholder="alamat" required=""></td>
            </tr>
            <tr>
                <td><input type="submit" class="input" name="tambah-anggota" value="Tambah Anggota"></td>
            </tr>
        </table>
        <a href="/anggota" class="tambah-produk input">
            <img src="assets/icons8-back-arrow-90.png" alt="" class="icon">
            <span>Kembali</span>
        </a>
    </form>
@endsection
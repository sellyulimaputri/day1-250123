@extends('default.navbar')
@section('container')
    <h3 class="titleContainer">DAFTAR ANGGOTA</h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Kode</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Telepon</th>
            <th scope="col">Alamat</th>
            <th scope="col" colspan="3">Option</th>
        </tr>
        </thead>
        <tbody>
            @foreach($anggota as $a)
            <tr>
                <td>{{ $a->id_anggota }}</td>
                <td>{{ $a->kode_anggota }}</td>
                <td>{{ $a->nama_anggota }}</td>
                <td>{{ $a->jk_anggota }}</td>
                <td>{{ $a->jurusan_anggota }}</td>
                <td>{{ $a->no_telp_anggota }}</td>
                <td>{{ $a->alamat_anggota }}</td>
                <td class='option'><a href="/editAnggota/{{ $a->id_anggota }}"><img src='assets/icons8-pencil-96.png' class='icon'></a></td>
                <td class='option'><a href="/hapusAnggota/{{ $a->id_anggota }}"><img src='assets/icons8-delete-document-96.png' class='icon'></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/tambahAnggota" class="tambah-produk">
        <img src="assets/icons8-add-properties-96.png" alt="" class="icon">
        <span>Tambah Anggota</span>
    </a>
@endsection
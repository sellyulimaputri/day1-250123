@extends('default.navbar')
@section('container')
    <h3 class="titleContainer">DAFTAR PETUGAS</h3>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Telepon</th>
            <th scope="col">Alamat</th>
            <th scope="col" colspan="3">Option</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($petugas as $i)
                <tr>
                    <td>{{$i->id_petugas}}</td>
                    <td>{{$i->nama_petugas}}</td>
                    <td>{{$i->jabatan_petugas}}</td>
                    <td>{{$i->no_telp_petugas}}</td>
                    <td>{{$i->alamat_petugas}}</td>
                    <td><a href="/editPetugas/{{$i->id_petugas}}"><img src="assets/icons8-pencil-96.png" class='icon'></a></td>
                    <td class='option'><a href="/hapusPetugas/{{ $i->id_petugas }}"><img src='assets/icons8-delete-document-96.png' class='icon'></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/tambahPetugas" class="tambah-produk">
        <img src="assets/icons8-add-properties-96.png" alt="" class="icon">
        <span>Tambah Produk</span>
    </a>
@endsection
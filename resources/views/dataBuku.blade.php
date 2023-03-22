@extends('default.navbar')
@section('container')
    <h3 class="titleContainer">DAFTAR BUKU</h3>
    <form class="cari" method="GET" action="index.php" style="text-align: right;">
        <input type="text" name="find" size="25px" placeholder="Find" value="<?php if(isset($_GET['find'])) { echo $_GET['find']; } ?>"  />
        <button type="submit" style="color:white;padding:6px;background-color:#a11d0c;border-radius:10px;">Cari</button>
    </form>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Kode</th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Tahun Terbit</th>
            <th scope="col">Stok</th>
            <th scope="col" colspan="3">Option</th>
        </tr>
        </thead>
        <tbody>
            @foreach($buku as $b)
            <tr>
                <td>{{ $b->id_buku }}</td>
                <td>{{ $b->kode_buku }}</td>
                <td>{{ $b->judul_buku }}</td>
                <td>{{ $b->penulis_buku }}</td>
                <td>{{ $b->penerbit_buku }}</td>
                <td>{{ $b->tahun_penerbit }}</td>
                <td>{{ $b->stok }}</td>
                <td class='option'><a href="/editBuku/{{ $b->id_buku }}"><img src='assets/icons8-pencil-96.png' class='icon'></a></td>
                <td class='option'><a href="/hapusBuku/{{ $b->id_buku }}"><img src='assets/icons8-delete-document-96.png' class='icon'></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/tambahBuku" class="tambah-produk">
        <img src="assets/icons8-add-properties-96.png" alt="" class="icon">
        <span>Tambah Produk</span>
    </a>
@endsection

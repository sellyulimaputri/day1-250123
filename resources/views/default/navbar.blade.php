<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="/css/navbar.css">
</head>
<body>
    <div class="container">
        <div class="menu">
            <div class="menu-header">
                <div class="tittle">
                    <a href="">
                        <img src="/assets/icons8-user-30.png" class="icon" alt="">
                        <span class="judul">Perpustakaan Selly</span>
                    </a>
                </div>
            </div>
            <div class="ilustrasi">
                <img src="/assets/icons8-homework-80.png" alt="">
            </div>
            <div class="menu-list">
                <a href="/">
                    <img src="/assets/icons8-home-page-96.png" class="icon" alt="">
                    <span>Home</span>
                </a>
            </div>
            <div class="menu-list">
                <a href="/petugas">
                    <img src="/assets/icons8-lawyer-50.png" class="icon" alt="">
                    <span>Daftar Petugas</span>
                </a>
            </div>
            <div class="menu-list">
                <a href="/anggota">
                    <img src="/assets/icons8-business-group-64.png" class="icon" alt="">
                    <span>Daftar Anggota</span>
                </a>
            </div>
            <div class="menu-list">
                <a href="/dataBuku">
                    <img src="/assets/icons8-repository-50.png" class="icon" alt="">
                    <span>Daftar Buku</span>
                </a>
            </div>
            <div class="menu-list">
                <a href="">
                    <img src="/assets/icons8-rack-90.png" class="icon" alt="">
                    <span>Daftar Rak</span>
                </a>
            </div>
            <div class="menu-list">
                <a href="">
                    <img src="/assets/icons8-borrow-book-64.png" class="icon" alt="">
                    <span>Daftar Peminjaman</span>
                </a>
            </div>
            <div class="menu-list">
                <a href="">
                    <img src="/assets/icons8-borrow-book-80.png" class="icon" alt="">
                    <span>Daftar Pengembalian</span>
                </a>
            </div>
        </div>
        <div class="content">
            @yield('container')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
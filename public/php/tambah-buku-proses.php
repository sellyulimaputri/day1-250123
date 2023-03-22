<?php
    if (isset($_POST['tambah-buku'])) {
        include 'conn.php';
        $vKode = $_POST['kode'];
        $vJudul = $_POST['judul'];
        $vPenulis = $_POST['penulis'];
        $vPenerbit = $_POST['penerbit'];
        $vTahun = $_POST['tahun'];
        $vStok = $_POST['stok'];

        $input = mysqli_query($connect,"INSERT INTO buku VALUES(NULL,'$vKode','$vJudul','$vPenulis','$vPenerbit','$vTahun','$vStok')");

        if ($input) {
            header("location:/buku");
        } else {
            echo '<script type="text/javascript">alert("Detail Produk Gagal Ditambahkan");</script>';
        }
    } else {
        echo '<script>window.history.back()</script>';
    }
?>
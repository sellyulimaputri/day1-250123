<?php
    if (isset($_POST['tambah-petugas'])) {
        include 'conn.php';
        $vNama = $_POST['nama'];
        $vJabatan = $_POST['jabatan'];
        $vTelepon = $_POST['telepon'];
        $vAlamat = $_POST['alamat'];

        $input = mysqli_query($connect,"INSERT INTO petugas VALUES(NULL,'$vNama','$vJabatan','$vTelepon','$vAlamat')");

        if ($input) {
            header("location:/petugas");
        } else {
            echo '<script type="text/javascript">alert("Detail Produk Gagal Ditambahkan");</script>';
        }
    } else {
        echo '<script>window.history.back()</script>';
    }
?>
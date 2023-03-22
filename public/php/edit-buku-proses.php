<?php
if(isset($_POST['simpan'])){
    include 'conn.php';
    $vFirst = $_POST['first'];
    $vKode = $_POST['kode'];
    $vJudul = $_POST['judul'];
    $vPenulis = $_POST['penulis'];
    $vPenerbit = $_POST['penerbit'];
    $vTahun = $_POST['tahun'];
    $vStok = $_POST['stok'];

    $input = mysqli_query($connect,"UPDATE buku SET kode_buku='$vKode', judul_buku='$vJudul', penulis_buku='$vPenulis', penerbit_buku='$vPenerbit', tahun_penerbit='$vTahun', stok='$vStok' WHERE id_buku='$vFirst'");

    if ($input) {
        header("location:/buku");
    } else {
        echo '<script type="text/javascript">alert("Detail Produk Gagal Ditambahkan");</script>';
    }

}else{
    echo '<script>window.history.back()</script>';
}
?>
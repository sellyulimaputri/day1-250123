<?php
if(isset($_GET['id'])){
    include 'conn.php';
    $record = $_GET['id'];
    $cek = mysqli_query($connect, "SELECT * FROM anggota WHERE id_anggota='$record'");
    $database = mysqli_fetch_array($cek);
    if(mysqli_num_rows($cek)==0){
        echo '<script>window.history.back()</script>';
    }else{
        $delete = mysqli_query($connect, "DELETE FROM anggota WHERE id_anggota='$record'");
        header("location:/anggota");
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>
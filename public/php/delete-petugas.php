<?php
if(isset($_GET['id'])){
    include 'conn.php';
    $record = $_GET['id'];
    $cek = mysqli_query($connect, "SELECT * FROM petugas WHERE id_petugas='$record'");
    $database = mysqli_fetch_array($cek);
    if(mysqli_num_rows($cek)==0){
        echo '<script>window.history.back()</script>';
    }else{
        $delete = mysqli_query($connect, "DELETE FROM petugas WHERE id_petugas='$record'");
        header("location:/petugas");
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>
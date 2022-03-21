<?php
    include "koneksi.php";
    $id = $_GET['idkaryawan'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM karyawan WHERE idkaryawan='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/web-penjualan/data_karyawan.php'>";
?>
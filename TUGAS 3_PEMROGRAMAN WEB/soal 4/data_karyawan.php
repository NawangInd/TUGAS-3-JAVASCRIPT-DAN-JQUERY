<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tabel Data Karyawan
            </div>
            <div class="card-body">
                <a href="index.php" class="btn btn-primary">Tambah Data</a>
                <table class="table table-bordered">
                    <tr>
                        <th>ID KARYAWAN</th>
                        <th>NAMA KARYAWAN</th>
                        <th>TELEPON</th>
                        <th>ALAMAT</th>
                        <th>KOTA</th>  
                        <th>KODE POS</th>  
                        <th>AKSI</th>
                    </tr>
                    <?php 
                        include "koneksi.php";
                        $no = 1;
                        $tampil = mysqli_query($koneksi, "SELECT * FROM karyawan");
                        while($data=mysqli_fetch_array($tampil))
                        {
                    ?>
                    <tr>
                        <td> <?php echo $no++; ?> </td>
                        <td> <?php echo $data['nama']; ?> </td>
                        <td> <?php echo $data['telp']; ?> </td>
                        <td> <?php echo $data['alamat']; ?> </td>
                        <td> <?php echo $data['kota']; ?> </td>
                        <td> <?php echo $data['kodepos']; ?> </td>
                        <td>
                            <a href="edit_karyawan.php?idkaryawan=<?php echo $data['idkaryawan']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="delete.php?idkaryawan=<?php echo $data['idkaryawan']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>

                        <?php } ?>

                </table>
            </div>
        </div>
    </div>


</body>
</html>
<?php
    include 'connect.php';

    $nama = $_GET['nama'];
    $sqlGet = "SELECT * FROM `admin` WHERE nama_admin='$nama'";
    $queryGet = mysqli_query($conn, $sqlGet);
    $data = mysqli_fetch_array($queryGet);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> Digihelp </title>
</head>
<body>
 <div class="w-50 mx-auto border p-3 mt-5">
    <a href="index.php">Back</a>
    <form action="update.php" method="post">
        <label for = "nama">Nama</label>
        <input type="text" id="nama_admin" name="nama_admin" value = "<?php echo "$data[nama_admin]";  ?>" class="form-control" required> <br>

        <label for = "email">Email</label>
        <input type="text" id="email" name="email" value = "<?php echo "$data[email]";  ?>" class="form-control" required> <br>

        <label for = "no_telp">Telepon</label>
        <input type="text" id="no_telp" name="no_telp" value = "<?php echo "$data[no_telp]";  ?>" class="form-control" required> <br>

        <label for = "alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" value = "<?php echo "$data[alamat]";  ?>" class="form-control" required> <br>
  
        <input class="btn btn-success mt-3" type="submit" name="tambah" value="Submit">

    </form>
 </div>

 <?php

    if(isset($_POST['tambah'])) {
    $nama = $_POST['nama_admin'];
    $email = $_POST['email'];
    $telepon = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    $sqlUpdate = "UPDATE admin SET nama_admin='$nama', email='$email', no_telp='$telepon', alamat='$alamat' WHERE nama_admin='$nama'";

    $queryUpdate = mysqli_query($conn, $sqlUpdate);

    header("location: index.php");
    }
 ?>

</body>
</html> 
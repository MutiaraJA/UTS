<?php
    include 'connect.php';

    $nama = $_GET['nama'];
    $sqlDelete = "DELETE FROM admin WHERE nama_admin='$nama'";
    mysqli_query($conn, $sqlDelete);

    header("location: index.php");


?>
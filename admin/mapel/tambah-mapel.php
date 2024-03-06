<?php

include 'koneksi.php';

$kelas = $_POST['kelas'];
$tahun = $_POST['tahun'];
$mapel = $_POST['mapel'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];

$query = "INSERT INTO mapel (kelas, tahun, mapel, hari, jam) 
          VALUES ('$kelas', '$tahun', '$mapel', '$hari', '$jam')";

if(mysqli_query($koneksi, $query)) {
    header("Location: adminmapel.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
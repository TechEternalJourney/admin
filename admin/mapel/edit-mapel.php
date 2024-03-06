<?php

include 'koneksi.php';

$kelas = $_POST['kelas'];
$tahun = $_POST['tahun'];
$mapel = $_POST['mapel'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];

$query = "UPDATE mapel SET mapel = '$mapel', jam = '$jam' , tahun = '$tahun' WHERE kelas = '$kelas' AND hari = '$hari'";

if(mysqli_query($koneksi, $query)) {
    header("Location: adminmapel.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
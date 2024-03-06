<?php

include 'koneksi.php';

$tahun = $_POST['tahun'];
$kelas = $_POST['kelas'];
$hari = $_POST['hari'];

$query = "DELETE FROM mapel WHERE tahun = '$tahun' AND kelas = '$kelas' AND hari = '$hari'";


if(mysqli_query($koneksi, $query)) {

    header("Location: adminmapel.php");
} else {

    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>

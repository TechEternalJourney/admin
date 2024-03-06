<?php

include 'koneksi.php';

$nis = $_POST['nis'];

$query = "DELETE FROM nilai WHERE nis='$nis'";

if(mysqli_query($koneksi, $query)) {
    header("Location: nilai.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>

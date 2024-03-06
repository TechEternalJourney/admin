<?php

include 'koneksi.php';

$username = $_POST['username'];

$query = "DELETE FROM user WHERE username = '$username'";

if(mysqli_query($koneksi, $query)) {
    header("Location: adminhome.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>

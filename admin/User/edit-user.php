<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$query = "UPDATE user SET password = '$password', level = '$level' WHERE username = '$username'";

if(mysqli_query($koneksi, $query)) {
    header("Location: adminhome.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
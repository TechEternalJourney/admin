<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$query = "INSERT INTO user (username, password, level) 
          VALUES ('$username', '$password', '$level')";

if(mysqli_query($koneksi, $query)) {
    header("Location: adminhome.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>

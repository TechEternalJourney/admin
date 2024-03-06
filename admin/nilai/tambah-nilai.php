<?php

include 'koneksi.php';

$tahun = $_POST['Tahun'];
$kelas = $_POST['Kelas'];
$nis = $_POST['Nis'];
$semester = $_POST['Semester'];
$nilai_b_indo = $_POST['Nil_b_indo'];
$nilai_matematika = $_POST['Nil_matematika'];
$nilai_agama = $_POST['Nil_agama'];
$nilai_ipa = $_POST['Nil_ipa'];
$nilai_pkn = $_POST['Nil_pkn'];
$nilai_ips = $_POST['Nil_ips'];
$nilai_sbk = $_POST['Nil_sbk'];
$nilai_penjas = $_POST['Nil_penjas'];
$nilai_b_ing = $_POST['Nil_b_ing'];
$nilai_mulok = $_POST['Nil_mulok'];

$query = "INSERT INTO nilai (Tahun, Kelas, Nis, Semester, Nil_b_indo, Nil_matematika, Nil_agama, Nil_ipa, Nil_pkn, Nil_ips, Nil_sbk, Nil_penjas, Nil_b_ing, Nil_mulok) 
          VALUES ('$tahun', '$kelas', '$nis', '$semester', '$nilai_b_indo', '$nilai_matematika', '$nilai_agama', '$nilai_ipa', '$nilai_pkn', '$nilai_ips', '$nilai_sbk', '$nilai_penjas', '$nilai_b_ing', '$nilai_mulok')";

if(mysqli_query($koneksi, $query)) {
    
    header("Location: adminnilai.php");
} else {
    
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>

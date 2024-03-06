<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Jurusan</title>
    <link rel="stylesheet" href="adminnilai.css">
</head>

<body>
    <header>
        <h1>Website Jurusan RPL</h1>
        <br>
        <a href="../index.php">Logout</a>
    </header>
    <nav>
        <a href="../user/adminhome.php">Data Pengunjung</a>
        <a href="adminnilai.php">Nilai Siswa</a>
        <a href="../mapel/adminmapel.php">Jadwal Mapel</a>
        <a href="../guru/adminguru.php">Data Guru</a>
        <a href="../siswa/adminsiswa.php">Data Siswa</a>
    </nav>
    <h2>Nilai Siswa</h2>
    <form method="GET">
        <input type="text" name="keyword" placeholder="Cari Nis..." value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
        <button type="submit">cari</button>
        <a href="#" class="button" onclick="openTambahNilaiOverlay()">+ TAMBAH</a>
        <a href="#" class="button" onclick="openEditNilaiOverlay()">+ EDIT</a>
        <a href="#" class="button" onclick="openDeleteNilaiOverlay()">+ HAPUS</a>
    </form>
    <br />
    <table border="1">
        <tr>
            <th>Tahun</th>
            <th>Kelas</th>
            <th>Nis</th>
            <th>Semester</th>
            <th>Bhs.Indonesia</th>
            <th>Matematika</th>
            <th>Agama</th>
            <th>Ipa</th>
            <th>Pkn</th>
            <th>Ips</th>
            <th>Sbk</th>
            <th>Penjas</th>
            <th>Bhs.Inggris</th>
            <th>Mulok</th>
        </tr>
        <?php
        include 'koneksi.php';
        $query = "SELECT * FROM nilai";
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
            $query .= " WHERE Nis LIKE '%$keyword%'";
        }

        $no = 1;
        $data = mysqli_query($koneksi, $query);

        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $d['Tahun']; ?></td>
                <td><?php echo $d['Kelas']; ?></td>
                <td><?php echo $d['Nis']; ?></td>
                <td><?php echo $d['Semester']; ?></td>
                <td><?php echo $d['Nil_b_indo']; ?></td>
                <td><?php echo $d['Nil_matematika']; ?></td>
                <td><?php echo $d['Nil_agama']; ?></td>
                <td><?php echo $d['Nil_ipa']; ?></td>
                <td><?php echo $d['Nil_pkn']; ?></td>
                <td><?php echo $d['Nil_ips']; ?></td>
                <td><?php echo $d['Nil_sbk']; ?></td>
                <td><?php echo $d['Nil_penjas']; ?></td>
                <td><?php echo $d['Nil_b_ing']; ?></td>
                <td><?php echo $d['Nil_mulok']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <div id="TambahNilai-overlay" class="overlay">
        <div class="overlay-content">
            <span class="tutup-overlay" onclick="closeTambahNilaiOverlay()">&times;</span>
            <h2>Form Tambah Nilai</h2>
            <form id="form-tambah" class="form-tambah" action="tambah-nilai.php" method="POST">
                <label for="Tahun">Tahun:</label>
                <input type="text" id="Tahun" name="Tahun" required>

                <label for="Kelas">Kelas:</label>
                <input type="text" id="Kelas" name="Kelas" required>

                <label for="Nis">Nis:</label>
                <input type="text" id="Nis" name="Nis" required>

                <label for="Semester">Semester:</label>
                <input type="text" id="Semester" name="Semester" required>

                <label for="Nil_b_indo">Nilai Bahasa Indonesia:</label>
                <input type="text" id="Nil_b_indo" name="Nil_b_indo" required>

                <label for="Nil_matematika">Nilai Matematika:</label>
                <input type="text" id="Nil_matematika" name="Nil_matematika" required>

                <label for="Nil_agama">Nilai Agama:</label>
                <input type="text" id="Nil_agama" name="Nil_agama" required>

                <label for="Nil_ipa">Nilai IPA:</label>
                <input type="text" id="Nil_ipa" name="Nil_ipa" required>

                <label for="Nil_pkn">Nilai PKN:</label>
                <input type="text" id="Nil_pkn" name="Nil_pkn" required>

                <label for="Nil_ips">Nilai IPS:</label>
                <input type="text" id="Nil_ips" name="Nil_ips" required>

                <label for="Nil_sbk">Nilai SBK:</label>
                <input type="text" id="Nil_sbk" name="Nil_sbk" required>

                <label for="Nil_penjas">Nilai Penjas:</label>
                <input type="text" id="Nil_penjas" name="Nil_penjas" required>

                <label for="Nil_b_ing">Nilai Bahasa Inggris:</label>
                <input type="text" id="Nil_b_ing" name="Nil_b_ing" required>

                <label for="Nil_mulok">Nilai Muatan Lokal:</label>
                <input type="text" id="Nil_mulok" name="Nil_mulok" required>

                <button type="submit">Tambah</button>
                <button onclick="closeTambahNilaiOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <div id="EditNilai-overlay" class="overlay">
        <div class="overlay-content">
            <span class="tutup-overlay" onclick="closeEditNilaiOverlay()">&times;</span>
            <h2>Form Edit Nilai</h2>
            <form id="form-tambah" class="form-tambah" action="edit-nilai.php" method="POST">
                <label for="Tahun">Tahun:</label>
                <input type="text" id="Tahun" name="Tahun" required>

                <label for="Kelas">Kelas:</label>
                <input type="text" id="Kelas" name="Kelas" required>

                <label for="Nis">Nis:</label>
                <input type="text" id="Nis" name="Nis" required>

                <label for="Semester">Semester:</label>
                <input type="text" id="Semester" name="Semester" required>

                <label for="Nil_b_indo">Nilai Bahasa Indonesia:</label>
                <input type="text" id="Nil_b_indo" name="Nil_b_indo" required>

                <label for="Nil_matematika">Nilai Matematika:</label>
                <input type="text" id="Nil_matematika" name="Nil_matematika" required>

                <label for="Nil_agama">Nilai Agama:</label>
                <input type="text" id="Nil_agama" name="Nil_agama" required>

                <label for="Nil_ipa">Nilai IPA:</label>
                <input type="text" id="Nil_ipa" name="Nil_ipa" required>

                <label for="Nil_pkn">Nilai PKN:</label>
                <input type="text" id="Nil_pkn" name="Nil_pkn" required>

                <label for="Nil_ips">Nilai IPS:</label>
                <input type="text" id="Nil_ips" name="Nil_ips" required>

                <label for="Nil_sbk">Nilai SBK:</label>
                <input type="text" id="Nil_sbk" name="Nil_sbk" required>

                <label for="Nil_penjas">Nilai Penjas:</label>
                <input type="text" id="Nil_penjas" name="Nil_penjas" required>

                <label for="Nil_b_ing">Nilai Bahasa Inggris:</label>
                <input type="text" id="Nil_b_ing" name="Nil_b_ing" required>

                <label for="Nil_mulok">Nilai Muatan Lokal:</label>
                <input type="text" id="Nil_mulok" name="Nil_mulok" required>

                <button type="submit">Tambah</button>
                <button onclick="closeEditNilaiOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <div id="DeleteNilai-overlay" class="overlay">
        <div class="overlay-content">
            <span class="tutup-overlay" onclick="closeDeleteNilaiOverlay()">&times;</span>
            <h2>Form Delete Nilai</h2>
            <form id="form-tambah" class="form-tambah" action="hapus-nilai.php" method="POST">
                <label for="Nis">Nis:</label>
                <input type="text" id="Nis" name="Nis" placeholder="berupa angka" required>

                <button type="submit">Delete</button>
                <button type="button" onclick="closeDeleteNilaiOverlay()">Kembali</button>
            </form>
        </div>
    </div>

    <footer>
        &copy; 2024 SMK Negeri 5 Kota Bekasi
    </footer>
    <script src="adminnilai.js"> </script>
</body>

</html>
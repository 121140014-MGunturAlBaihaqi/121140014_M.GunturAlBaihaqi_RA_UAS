<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="header">
        <h3>Data Mahasiswa Universitas Sukarame</h3>
        <div class="admin">
            <img class="logo" src="https://png.pngtree.com/png-vector/20191125/ourmid/pngtree-beautiful-admin-roles-line-vector-icon-png-image_2035379.jpg">
            <p>Admin</p>
        </div>
    </div>

    <div class="body">
        <?php
        include 'koneksi.php';
        $result = null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $prodi = $_POST['prodi'];
            $sql = "SELECT * FROM data_mahasiswa WHERE prodi = '$prodi'";
            $result = $conn->query($sql);
        }
        ?>
        <div class="isi">
        <form method="post">
            <label for="prodi">Pilih Prodi:</label>
            <select id="prodi" name="prodi">
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
                <option value="Teknik Kimia">Teknik Kimia</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Arsitektur">Arsitektur</option>
                <option value="Matematika">Matematika</option>
                <option value="Fisika">Fisika</option>
                <option value="Biologi">Biologi</option>
                <option value="Kimia">Kimia</option>
                <option value="Manajemen Informatika">Manajemen Informatika</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Material">Teknik Material</option>
                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
            </select>
            <button type="submit" class="cari">Cari</button>
        </form>
        <form action="tambahdata.php" method="get">
            <button type="submit" class="button">Tambah Data</button>
        </form>
        </div>

            <table border="1">
                <?php
                if ($result && $result->num_rows > 0) {
                    echo "<tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Kode Prodi</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                        </tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['nim']}</td>
                                <td>{$row['nama']}</td>
                                <td>{$row['prodi']}</td>
                                <td>{$row['kelamin']}</td>
                                <td>
                                    <form action='editdata.php' method='get' style='display:inline;'>
                                        <input type='hidden' name='nim' value='{$row['nim']}'>
                                        <button type='submit' class='button'>Edit</button>
                                    </form>
                                    <form action='hapusdata.php' method='get' style='display:inline;'>
                                        <input type='hidden' name='nim' value='{$row['nim']}'>
                                        <button type='submit' class='delete' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</button>
                                    </form>
                                </td>
                            </tr>";
                    }
                } elseif ($result && $result->num_rows === 0) {
                    echo "<tr><td colspan='4'>Tidak ada data mahasiswa untuk prodi ini</td></tr>";
                }
                ?>
            </table>
    </div>
    <script src="script.js"></script>
</body>
</html> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="tambahdata.css">
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
        <h2>Edit Data Mahasiswa</h2>

        <?php include 'koneksi.php'; ?>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $nim = $_GET['nim'];
            $sql = "SELECT * FROM data_mahasiswa WHERE nim = '$nim'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
        ?>

        <form action="editdata.php" method="post">
            <input type="hidden" name="nim" value="<?php echo $row['nim']; ?>">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
            <br>
            <label for="prodi">Prodi:</label>
            <select id="prodi" name="prodi" required>
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
            <br>
            <label for="kelamin">Jenis Kelamin:</label>
            <select id="kelamin" name="kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <br>
            <button type="submit">Simpan Perubahan</button>
        </form>

        <?php
            } else {
                echo "Data mahasiswa tidak ditemukan.";
            }
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $prodi = $_POST['prodi'];
            $kelamin = $_POST['kelamin'];

            $sql = "UPDATE data_mahasiswa SET nama='$nama', prodi='$prodi', kelamin='$kelamin' WHERE nim='$nim'";
            if ($conn->query($sql) === TRUE) {
                echo "Data berhasil diubah.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        $conn->close();
        ?>

        <br>
        <a href="index.php">Kembali</a>
    </div>    
</body>
</html>

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
            <img class="logo" src="data:image/png;base64,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">
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

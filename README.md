# 121140014_M.GunturAlBaihaqi_RA_UAS

# Website Data Mahasiswa Universitas Sukarame
Website ini adalah website sederhana untuk manajemen data mahasiswa di Universitas Sukarame. Website ini dikembangkan menggunakan HTML, PHP, dan JavaScript, dengan penggunaan MySQL sebagai basis data.

## Fitur
- Menampilkan daftar mahasiswa berdasarkan program studi.
- Menambahkan data mahasiswa baru.
- Mengedit data mahasiswa.
- Menghapus data mahasiswa.
- Pencarian data mahasiswa berdasarkan program studi.

## Struktur
- `index.php`: Halaman utama aplikasi untuk menampilkan data mahasiswa, dimana terdapat fitur pencarian, tambah data, edit data, dan hapus data.
- `tambahdata.php`: Halaman untuk menambahkan data mahasiswa.
- `editdata.php`: Halaman untuk mengedit data mahasiswa.
- `hapusdata.php`: Skrip untuk menghapus data mahasiswa.
- `koneksi.php`: Skrip untuk mengelola koneksi ke basis data.
- `pencarian.php`: Halaman untuk menampilkan hasil pencarian data mahasiswa.
- `script.js`: Skrip JavaScript untuk manipulasi DOM dan State Management.
- `database.sql`: Syntak-syntak yang berisi data tabel yang akan ditampung dari inputan yang ada.

## Penggunaan
1. Pastikan web server dan MySQL server sudah diaktifkan.
2. Import script basis data dari file `database.sql` ke dalam basis data MySQL Anda.
3. Sesuaikan informasi koneksi basis data di file `koneksi.php`.
4. Akses aplikasi melalui browser dengan membuka file `index.php`.

## Dependencies
- Web server Apache.
- MySQL server.
- PHP.

## Hosting Aplikasi WEB
Website ini dihosting menggunakan '000webhost' yaitu hosting gratis.
1. Langkah-langkah Menghosting Website
  - Buat akun di 000webhost jika belum memiliki satu.
  - Setelah masuk, tambahkan situs web baru di dashboard.
  - Gunakan file manager atau FTP untuk mengupload source code website ke direktori situs.
  - Buat dan konfigurasi database di panel kontrol.
  - Atur pengaturan DNS untuk domain Anda jika menggunakan domain khusus.
2. Pemilihan Penyedia Hosting Web (000webhost)
Alasan Memilih 000webhost karena 000webhost menawarkan hosting gratis dengan fitur yang cukup untuk   pengembangan atau situs web dengan lalu lintas rendah. Ini termasuk penyimpanan SSD, kontrol panel yang mudah digunakan, dan dukungan PHP.
3. Keamanan Website
  - Mengaktifkan SSL/TLS untuk enkripsi lalu lintas melalui protokol HTTPS.
  - Memastikan aplikasi, plugin, dan sistem operasi server selalu diperbarui untuk mengatasi kerentanan keamanan.\
  - Mengatur firewall untuk membatasi akses yang tidak perlu ke server.
  - Melakukan backup rutin data dan konfigurasi aplikasi untuk mengantisipasi kehilangan data.
4. Konfigurasi Server
  - Memilih versi PHP yang sesuai dengan persyaratan aplikasi melalui panel kontrol.
  - Mengkonfigurasi pengaturan database, seperti nama pengguna, kata sandi, dan host.
  - Memastikan file-file konfigurasi aplikasi, seperti file konfigurasi database dan pengaturan umum, telah dikonfigurasi dengan benar.

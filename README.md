# Dokumentasi Praktikum PHP dan MySQL

## Deskripsi
Proyek ini merupakan aplikasi sederhana pengelolaan data barang menggunakan PHP dan MySQL. Aplikasi menampilkan data barang serta menyediakan proses tambah, ubah, dan hapus data (CRUD).

## Perangkat dan file proyek
- XAMPP (Apache dan MySQL)
- phpMyAdmin untuk mengelola database
- Visual Studio Code untuk mengelola kode PHP
- Database: `latihan1`
- Tabel: `data_barang`
- File aplikasi: `koneksi.php`, `index.php`, `tambah.php`, `ubah.php`, `hapus.php`, `style.css`, dan folder `gambar/`

## Langkah praktikum dan dokumentasi
### Langkah 1. Menjalankan XAMPP
Apache dan MySQL dijalankan melalui XAMPP Control Panel. Keduanya terlihat aktif sehingga server lokal dan layanan database siap digunakan.

[![Menjalankan XAMPP](screenshot/01-xampp-apache-mysql-aktif.png)](screenshot/01-xampp-apache-mysql-aktif.png)

### Langkah 2. Membuka phpMyAdmin
Browser diarahkan ke localhost/phpmyadmin untuk mengelola database MySQL melalui phpMyAdmin.

[![Membuka phpMyAdmin](screenshot/02-halaman-utama-phpmyadmin.png)](screenshot/02-halaman-utama-phpmyadmin.png)

### Langkah 3. Membuat database latihan1
Database latihan1 terlihat pada panel sebelah kiri phpMyAdmin. Database ini digunakan untuk menyimpan data barang.

[![Membuat database latihan1](screenshot/03-database-latihan1-terlihat.png)](screenshot/03-database-latihan1-terlihat.png)

### Langkah 4. Membuat tabel data_barang
Tabel data_barang disiapkan dengan kolom id_barang, kategori, nama, gambar, harga_beli, harga_jual, dan stok.

[![Membuat tabel data_barang](screenshot/04-tabel-data-barang-dibuat.png)](screenshot/04-tabel-data-barang-dibuat.png)

### Langkah 5. Memasukkan data awal
Perintah INSERT berhasil menambahkan tiga data barang elektronik ke dalam tabel data_barang.

[![Memasukkan data awal](screenshot/05-data-barang-berhasil-ditambahkan.png)](screenshot/05-data-barang-berhasil-ditambahkan.png)

### Langkah 6. Menyiapkan file PHP di VS Code
Folder proyek berisi file koneksi.php, index.php, tambah.php, ubah.php, hapus.php, style.css, serta folder gambar.

[![Menyiapkan file PHP di VS Code](screenshot/06-struktur-file-proyek-di-vscode.png)](screenshot/06-struktur-file-proyek-di-vscode.png)

### Langkah 7. Menguji koneksi database
Halaman koneksi.php menampilkan pesan “Koneksi berhasil”, menandakan PHP dapat terhubung ke database.

[![Menguji koneksi database](screenshot/07-uji-koneksi-database-berhasil.png)](screenshot/07-uji-koneksi-database-berhasil.png)

### Langkah 8. Menampilkan data barang
Halaman index.php menampilkan tiga data barang dari database, lengkap dengan gambar, kategori, harga, stok, dan aksi.

[![Menampilkan data barang](screenshot/08-halaman-data-barang-awal.png)](screenshot/08-halaman-data-barang-awal.png)

### Langkah 9. Menambahkan satu data barang
Setelah proses tambah dilakukan, daftar menampilkan empat barang. Data Laptop ASUS muncul sebagai data tambahan.

[![Menambahkan satu data barang](screenshot/09-data-barang-setelah-penambahan.png)](screenshot/09-data-barang-setelah-penambahan.png)

### Langkah 10. Membuka formulir tambah barang
Formulir tambah barang menampilkan isian nama, kategori, harga jual, harga beli, stok, dan file gambar.

[![Membuka formulir tambah barang](screenshot/10-form-tambah-barang.png)](screenshot/10-form-tambah-barang.png)

### Langkah 11. Membuka formulir ubah barang
Formulir ubah barang menampilkan data Laptop ASUS yang dapat diedit sebelum disimpan.

[![Membuka formulir ubah barang](screenshot/11-form-ubah-barang.png)](screenshot/11-form-ubah-barang.png)

### Langkah 12. Memeriksa hasil perubahan
Daftar barang kembali ditampilkan setelah penyimpanan perubahan. Nilai stok Laptop ASUS pada tampilan ini menjadi 5.

[![Memeriksa hasil perubahan](screenshot/12-data-barang-setelah-perubahan.png)](screenshot/12-data-barang-setelah-perubahan.png)

### Langkah 13. Mengonfirmasi penghapusan
Saat tautan Hapus dipilih, browser menampilkan konfirmasi “Yakin ingin menghapus data?”.

[![Mengonfirmasi penghapusan](screenshot/13-konfirmasi-penghapusan-data.png)](screenshot/13-konfirmasi-penghapusan-data.png)

### Langkah 14. Memeriksa hasil penghapusan
Setelah penghapusan dikonfirmasi, data Laptop ASUS tidak lagi terlihat dan daftar kembali berisi tiga barang.

[![Memeriksa hasil penghapusan](screenshot/14-data-barang-setelah-penghapusan.png)](screenshot/14-data-barang-setelah-penghapusan.png)

### Langkah 15. Tampilan akhir aplikasi
Tampilan akhir menampilkan tabel Data Barang dengan tata letak yang lebih rapi, tombol Tambah Barang, gambar, informasi harga, stok, dan aksi Ubah/Hapus.

[![Tampilan akhir aplikasi](screenshot/15-tampilan-akhir-data-barang.png)](screenshot/15-tampilan-akhir-data-barang.png)

## Cara menjalankan aplikasi
1. Salin folder proyek ke dalam folder `htdocs` milik XAMPP.
2. Jalankan Apache dan MySQL dari XAMPP Control Panel.
3. Pastikan database `latihan1` dan tabel `data_barang` tersedia di phpMyAdmin.
4. Periksa konfigurasi koneksi pada `koneksi.php` agar nama database sesuai.
5. Buka browser dan akses `http://localhost/nama_folder_proyek/`.



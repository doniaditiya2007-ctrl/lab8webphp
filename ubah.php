
<?php
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];

    $sql = "UPDATE data_barang SET
    nama='$nama',
    kategori='$kategori',
    harga_jual='$harga_jual',
    harga_beli='$harga_beli',
    stok='$stok'";

    $file_gambar = $_FILES['file_gambar'];

    if ($file_gambar['error'] == 0) {
        $filename = str_replace(' ', '_', $file_gambar['name']);
        $destination = dirname(__FILE__) . '/gambar/' . $filename;

        if (move_uploaded_file($file_gambar['tmp_name'], $destination)) {
            $sql .= ", gambar='$filename'";
        }
    }

    $sql .= " WHERE id_barang='$id'";

    mysqli_query($conn, $sql);

    header('location: index.php');
    exit;
}

$id = $_GET['id'];
$sql = "SELECT * FROM data_barang WHERE id_barang='$id'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Error: Data tidak tersedia');
}

$data = mysqli_fetch_array($result);

function is_select($var, $val) {
    if ($var == $val) return 'selected="selected"';
    return false;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Ubah Barang</title>
</head>
<body>
<div class="container">
    <h1>Ubah Barang</h1>
    <div class="main">
        <form method="post" action="ubah.php" enctype="multipart/form-data">
            <div class="input">
                <label>Nama Barang</label>
                <input type="text" name="nama" value="<?= $data['nama']; ?>" required>
            </div>
            <div class="input">
                <label>Kategori</label>
                <select name="kategori">
                    <option value="Komputer" <?= is_select('Komputer', $data['kategori']); ?>>Komputer</option>
                    <option value="Elektronik" <?= is_select('Elektronik', $data['kategori']); ?>>Elektronik</option>
                    <option value="Hand Phone" <?= is_select('Hand Phone', $data['kategori']); ?>>Hand Phone</option>
                </select>
            </div>
            <div class="input">
                <label>Harga Jual</label>
                <input type="number" name="harga_jual" value="<?= $data['harga_jual']; ?>" required>
            </div>
            <div class="input">
                <label>Harga Beli</label>
                <input type="number" name="harga_beli" value="<?= $data['harga_beli']; ?>" required>
            </div>
            <div class="input">
                <label>Stok</label>
                <input type="number" name="stok" value="<?= $data['stok']; ?>" required>
            </div>
            <div class="input">
                <label>File Gambar</label>
                <input type="file" name="file_gambar" accept="image/*">
            </div>
            <input type="hidden" name="id" value="<?= $data['id_barang']; ?>">
            <div class="submit">
                <input type="submit" name="submit" value="Simpan">
            </div>
        </form>
    </div>
</div>
</body>
</html>

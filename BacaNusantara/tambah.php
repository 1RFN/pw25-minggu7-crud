<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];

    $query = "INSERT INTO crud_011 (judul_buku, penulis, penerbit, tahun_terbit, kategori, harga) 
              VALUES ('$judul_buku', '$penulis', '$penerbit', '$tahun_terbit', '$kategori', '$harga')";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php?status=tambah");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class = "modal">
    <div class = "modal-content">
    <h1>Tambah Buku</h1>
        <form action="tambah.php" method="POST">
            <label for="judul_buku">Judul Buku:</label>
            <input type="text" name="judul_buku" required><br><br>

            <label for="penulis">Penulis:</label>
            <input type="text" name="penulis" required><br><br>

            <label for="penerbit">Penerbit:</label>
            <input type="text" name="penerbit" required><br><br>

            <label for="tahun_terbit">Tahun Terbit:</label>
            <input type="number" name="tahun_terbit" required><br><br>

            <label for="kategori">Kategori:</label>
            <input type="text" name="kategori" required><br><br>

            <label for="harga">Harga:</label>
            <input type="number" name="harga" required><br><br>

            <button type="submit" class = "btn">Tambah Data Buku</button>
        </form>
    </div>
</div>
</body>
</html>

<?php
include 'config.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM crud_011 WHERE id=$id");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="modal">
        <div class="modal-content">
            <h2>Detail Buku</h2>
            <p><strong>Judul:</strong> <?= $data['judul_buku'] ?></p>
            <p><strong>Penulis:</strong> <?= $data['penulis'] ?></p>
            <p><strong>Penerbit:</strong> <?= $data['penerbit'] ?></p>
            <p><strong>Tahun Terbit:</strong> <?= $data['tahun_terbit'] ?></p>
            <p><strong>Kategori:</strong> <?= $data['kategori'] ?></p>
            <p><strong>Harga:</strong><span> Rp</span><?= $data['harga']?></p>
            <a href="index.php" class="btn">Kembali</a>
        </div>
    </div>
</body>
</html>

<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM crud_011 WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];

    $query = "UPDATE crud_011 
              SET judul_buku = '$judul_buku', penulis = '$penulis', penerbit = '$penerbit',
                  tahun_terbit = '$tahun_terbit', kategori = '$kategori', harga = '$harga' 
              WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php?status=edit");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="modal">
        <div class="modal-content">
        <h2>Update Data Buku</h2>
        <form action="edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <label for="judul_buku">Judul Buku:</label>
            <input type="text" name="judul_buku" value="<?php echo $row['judul_buku']; ?>" required><br><br>

            <label for="penulis">Penulis:</label>
            <input type="text" name="penulis" value="<?php echo $row['penulis']; ?>" required><br><br>

            <label for="penerbit">Penerbit:</label>
            <input type="text" name="penerbit" value="<?php echo $row['penerbit']; ?>" required><br><br>

            <label for="tahun_terbit">Tahun Terbit:</label>
            <input type="number" name="tahun_terbit" value="<?php echo $row['tahun_terbit']; ?>" required><br><br>

            <label for="kategori">Kategori:</label>
            <input type="text" name="kategori" value="<?php echo $row['kategori']; ?>" required><br><br>

            <label for="harga">Harga:</label>
            <input type="number" name="harga" value="<?php echo $row['harga']; ?>" required><br><br>

            <button type="submit" class="btn">Update Data Buku</button>
        </form>
        </div>
    </main>
</body>
</html>

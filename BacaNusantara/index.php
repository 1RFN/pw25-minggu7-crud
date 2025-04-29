<?php
include 'config.php';

$kategori_query = mysqli_query($conn, "SELECT DISTINCT kategori FROM crud_011");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>BacaNusantara - Sistem Manajemen Buku Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
    <script src="vendor/jquery.min.js"></script>
    <link rel="stylesheet" href="vendor/datatables.min.css">
    <script src="vendor/datatables.min.js"></script>
    <script src="vendor/sweetalert2.min.js"></script>
</head>
<body>
<header>
    <img src="assets/logo.png" alt="BacaNusantara" height="160">
    <h1>SISTEM MANAJEMEN BUKU PERPUSTAKAAN</h1>
</header>

<main>
    <a href="tambah.php" class="btn">➕ Tambah Buku Baru</a>

    <div class="filter-box">
        <label>Filter Kategori:</label>
        <select id="filterKategori">
            <option value="">Semua</option>
            <?php while($k = mysqli_fetch_assoc($kategori_query)) {
                echo "<option value='".$k['kategori']."'>".$k['kategori']."</option>";
            } ?>
        </select>
    </div>

    <table id="tabelBuku" class="display">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        $query = mysqli_query($conn, "SELECT * FROM crud_011");
        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$row['judul_buku']."</td>";
            echo "<td>".$row['penulis']."</td>";
            echo "<td>".$row['penerbit']."</td>";
            echo "<td>".$row['tahun_terbit']."</td>";
            echo "<td>".$row['kategori']."</td>";
            echo "<td>
                    <a href='detail.php?id=".$row['id']."' class='btn-detail'>Detail</a>
                    <a href='edit.php?id=".$row['id']."' class='btn-edit'>Edit</a>
                    <a href='#' onclick='konfirmasiHapus(".$row['id'].")' class='btn-delete'>Hapus</a>
                  </td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</main>

<script src="vendor/datatables.min.js"></script>
<script src="vendor/sweetalert2.min.js"></script>
<script>
    const table = new DataTable('#tabelBuku');
    document.getElementById('filterKategori').addEventListener('change', function() {
        table.search(this.value).draw();
    });

function konfirmasiHapus(id) {
    Swal.fire({
        title: 'Apakah Anda yakin?',
        html: `
            <div style="font-size: 16px;">
                Buku yang dihapus <b>tidak dapat dikembalikan</b>.<br>
                Pastikan data yang Anda hapus benar.
            </div>
        `,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: '🗑️ Hapus Sekarang',
        cancelButtonText: '❌ Batal',
        reverseButtons: true,
        customClass: {
            popup: 'swal2-rounded',
            confirmButton: 'btn-swal-confirm',
            cancelButton: 'btn-swal-cancel'
        },
        buttonsStyling: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'hapus.php?id=' + id;
        }
    });
}
</script>
<?php if (isset($_GET['status'])): ?>
    <div id="popup-notif" data-status="<?= htmlspecialchars($_GET['status']) ?>"></div>
<?php endif; ?>

<script src="popup.js" defer></script>
</body>
</html>

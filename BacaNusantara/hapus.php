<?php
include 'config.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM crud_011 WHERE id=$id");

header("Location: index.php?status=hapus");
exit();
?>

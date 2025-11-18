<?php
include "koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM tabungan WHERE id=$id";

if ($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "Gagal hapus: " . $conn->error;
}
?>

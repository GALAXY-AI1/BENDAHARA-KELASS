<?php
include "koneksi.php";

$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$tipe = $_POST['tipe'];
$catatan = $_POST['catatan'];

$sql = "INSERT INTO tabungan (nama, tipe, jumlah, catatan) 
        VALUES ('$nama', '$tipe', '$jumlah', '$catatan')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>

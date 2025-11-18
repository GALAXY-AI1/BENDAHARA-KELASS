<?php
include "koneksi.php";

$id = $_GET['id'];
$sql = "SELECT * FROM tabungan WHERE id=$id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Data</title>
<style>
    body { font-family: Arial; padding: 20px; }
    .form-control { width: 100%; padding: 10px; margin-bottom: 10px; }
    .btn { padding: 10px; background: #69b6ff; color: white; border: none; cursor: pointer; }
</style>
</head>
<body>

<h2>Edit Data Tabungan</h2>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">

    <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
    <input type="number" name="jumlah" class="form-control" value="<?= $data['jumlah'] ?>" required>

    <select name="tipe" class="form-control">
        <option value="pemasukan" <?= $data['tipe']=='pemasukan'?'selected':'' ?>>Pemasukan</option>
        <option value="pengeluaran" <?= $data['tipe']=='pengeluaran'?'selected':'' ?>>Pengeluaran</option>
    </select>

    <input type="text" name="catatan" class="form-control" value="<?= $data['catatan'] ?>">

    <button class="btn">Update</button>
</form>

</body>
</html>

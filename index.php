<?php
// ---------------------
// KONEKSI DATABASE
// ---------------------
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "bendahara_kelasdb5";

// Buat koneksi
$conn = new mysqli($servername, $username, $password);

// Cek koneksi gagal
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// ---------------------
// BUAT DATABASE JIKA BELUM ADA
// ---------------------
$conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
$conn->select_db($dbname);

// ---------------------
// BUAT TABEL JIKA BELUM ADA
// ---------------------
$conn->query("
CREATE TABLE IF NOT EXISTS transaksi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_kelas VARCHAR(100),
    tanggal DATE,
    jenis VARCHAR(20),
    jumlah INT,
    catatan VARCHAR(200),
    dibuat TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
");

// ---------------------
// SIMPAN DATA KE DATABASE
// ---------------------
if (isset($_POST['simpan'])) {

    $nama_kelas = $_POST['nama_kelas'];
    $tanggal    = $_POST['tanggal'];
    $jenis      = $_POST['jenis'];
    $jumlah     = $_POST['jumlah'];
    $catatan    = $_POST['catatan'];

    $sql = "INSERT INTO transaksi (nama_kelas, tanggal, jenis, jumlah, catatan)
            VALUES ('$nama_kelas', '$tanggal', '$jenis', '$jumlah', '$catatan')";
    
    if ($conn->query($sql)) {
        echo "<script>alert('Transaksi berhasil disimpan!');</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Bendahara Kelas</title>
<style>
    body{font-family:Arial;background:#e5f4ff;padding:20px;}
    .card{max-width:450px;margin:auto;background:white;padding:20px;border-radius:10px;box-shadow:0 0 10px #aaa;}
    input,select{width:100%;padding:10px;margin:8px 0;border-radius:5px;border:1px solid #888;}
    button{padding:12px;width:100%;background:blue;color:white;border:0;border-radius:5px;font-size:16px;}
    table{width:100%;margin-top:20px;border-collapse:collapse;}
    th,td{border:1px solid #777;padding:8px;text-align:center;}
</style>
</head>
<body>

<div class="card">
    <h2>Bendahara Kelas</h2>
    
    <form method="POST">
        <label>Nama Kelas</label>
        <input type="text" name="nama_kelas" required>

        <label>Tanggal</label>
        <input type="date" name="tanggal" required>

        <label>Jenis</label>
        <select name="jenis">
            <option value="pemasukan">Pemasukan</option>
            <option value="pengeluaran">Pengeluaran</option>
        </select>

        <label>Jumlah</label>
        <input type="number" name="jumlah" required>

        <label>Catatan</label>
        <input type="text" name="catatan">

        <button type="submit" name="simpan">Simpan Transaksi</button>
    </form>
</div>

<br>

<h2>Riwayat Transaksi</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Kelas</th>
        <th>Tanggal</th>
        <th>Jenis</th>
        <th>Jumlah</th>
        <th>Catatan</th>
    </tr>

    <?php
    $data = $conn->query("SELECT * FROM transaksi ORDER BY id DESC");
    while ($row = $data->fetch_assoc()) {
        echo "
        <tr>
            <td>{$row['id']}</td>
            <td>{$row['nama_kelas']}</td>
            <td>{$row['tanggal']}</td>
            <td>{$row['jenis']}</td>
            <td>{$row['jumlah']}</td>
            <td>{$row['catatan']}</td>
        </tr>";
    }
    ?>
</table>

</body>
</html>

<?php
include "koneksi.php";

// Ambil data tabungan
$sql = "SELECT * FROM tabungan ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Tabungan Bersama — Baby Blue</title>

<style>
    body {
        margin: 0;
        font-family: Arial;
        background: linear-gradient(#bde7ff, #e8f7ff);
    }

    .container {
        width: 90%;
        max-width: 800px;
        margin: 40px auto;
        background: #ffffff;
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        animation: floatCard 4s infinite ease-in-out;
    }

    @keyframes floatCard {
        0% { transform: translateY(0); }
        50% { transform: translateY(-6px); }
        100% { transform: translateY(0); }
    }

    h1 {
        text-align: center;
        color: #2b6daa;
        font-size: 30px;
        margin-bottom: 15px;
        animation: pulseText 1.5s infinite;
    }

    @keyframes pulseText {
        50% { transform: scale(1.05); }
    }

    .pulse-animal {
        font-size: 22px;
        animation: pulseAnimal 1.2s infinite;
    }

    @keyframes pulseAnimal {
        50% { transform: scale(1.2); }
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 2px solid #7ec8ff;
        border-radius: 10px;
        margin-bottom: 10px;
    }

    .btn {
        background: #69b6ff;
        padding: 12px;
        color: white;
        font-weight: bold;
        border: none;
        cursor: pointer;
        width: 100%;
        border-radius: 10px;
        transition: .3s;
    }

    .btn:hover {
        background: #2a91e8;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }
    table th, table td {
        padding: 10px;
        border: 1px solid #b3dfff;
        text-align: center;
    }
    table th {
        background: #d5eeff;
    }

    a {
        text-decoration: none;
        color: #0077cc;
    }
</style>

</head>
<body>

<div class="container">

    <h1>Tabungan Bersama <span class="pulse-animal">🐼🐰🐱</span></h1>

    <form method="POST" action="insert.php">
        <input type="text" name="nama" class="form-control" placeholder="Nama" required>
        <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" required>

        <select name="tipe" class="form-control">
            <option value="pemasukan">Pemasukan</option>
            <option value="pengeluaran">Pengeluaran</option>
        </select>

        <input type="text" name="catatan" class="form-control" placeholder="Catatan">

        <button class="btn">Simpan</button>
    </form>

    <h2>Riwayat Transaksi</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>Tipe</th>
            <th>Jumlah</th>
            <th>Catatan</th>
            <th>Aksi</th>
        </tr>

        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['tipe'] ?></td>
            <td><?= number_format($row['jumlah']) ?></td>
            <td><?= $row['catatan'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>

    </table>
</div>

</body>
</html>

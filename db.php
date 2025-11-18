<?php
// db.php
$host = '127.0.0.1';
$user = 'root';
$pass = ''; // atau password XAMPP kalian
$db   = 'tabung_db';

$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_errno) {
    die("Gagal koneksi DB: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}
$mysqli->set_charset("utf8mb4");

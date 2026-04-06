<?php
session_start();
if ($_SESSION['role'] !== 'admin') { header("Location: ../login.php"); exit(); }
require_once '../config/koneksi.php';

if (isset($_POST['simpan'])) {
    $nim = $_POST['nim']; $nama = $_POST['nama']; $email = $_POST['email'];
    mysqli_query($koneksi, "INSERT INTO mahasiswa (nim, nama, email) VALUES ('$nim', '$nama', '$email')");
    header("Location: admin_mahasiswa.php");
}
?>
<form method="POST">
    <input type="text" name="nim" placeholder="NIM" required><br>
    <input type="text" name="nama" placeholder="Nama" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <button type="submit" name="simpan">Simpan</button>
</form>
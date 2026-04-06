<?php
session_start();
require_once '../config/koneksi.php';

// Proses Simpan
if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $desk = $_POST['deskripsi'];
    $tgl  = $_POST['deadline'];

    $q = "INSERT INTO tugas VALUES ('', '$judul', '$desk', '$tgl')";
    if (mysqli_query($koneksi, $q)) {
        header("Location: admin_tugas.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
    <div class="container card p-4" style="max-width: 500px;">
        <h4>Tambah Tugas Baru</h4>
        <hr>
        <form method="POST">
            <div class="mb-2">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" required>
            </div>
            <div class="mb-2">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label>Deadline</label>
                <input type="date" name="deadline" class="form-control" required>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            <a href="admin_tugas.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
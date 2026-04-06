<?php
session_start();
if (!isset($_SESSION['role'])) { header("Location: ../login.php"); exit(); }
require_once '../config/koneksi.php';

// Proses Hapus (Jika ada kiriman ID hapus)
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($koneksi, "DELETE FROM tugas WHERE id='$id'");
    header("Location: admin_tugas.php");
}

$result = mysqli_query($koneksi, "SELECT * FROM tugas");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">AdminPanel</a>
        <div class="navbar-nav me-auto">
            <a class="nav-link" href="dashboard_admin.php">Home</a>
            <a class="nav-link" href="admin_mahasiswa.php">Mahasiswa</a>
            <a class="nav-link active" href="admin_tugas.php">Tugas Mahasiswa</a>
        </div>
        <a href="../logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
</nav>

<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h2>Data Tugas Mahasiswa</h2>
        <?php if($_SESSION['role'] == 'admin'): ?>
            <a href="tambah_tugas.php" class="btn btn-success btn-sm">Tambah Tugas</a>
        <?php endif; ?>
    </div>

    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th><th>Judul</th><th>Deskripsi</th><th>Deadline</th>
                <?php if($_SESSION['role'] == 'admin'): ?> <th>Aksi</th> <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['judul'] ?></td>
                <td><?= $row['deskripsi'] ?></td>
                <td><?= $row['deadline'] ?></td>
                <?php if($_SESSION['role'] == 'admin'): ?>
                <td>
                    <a href="edit_tugas.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="admin_tugas.php?hapus=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</a>
                </td>
                <?php endif; ?>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
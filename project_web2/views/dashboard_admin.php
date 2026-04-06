<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .hero-section { padding: 100px 0; text-align: center; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="dashboard_admin.php">AdminPanel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="dashboard_admin.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_mahasiswa.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_tugas.php">Tugas Mahasiswa</a>
        </li>
      </ul>
      <div class="d-flex">
        <span class="navbar-text me-3">Halo, <?= $_SESSION['username']; ?></span>
        <a href="../logout.php" class="btn btn-outline-danger btn-sm">Logout</a>
      </div>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <div class="hero-section bg-white shadow-sm rounded">
        <h1 class="display-4">Hello ATMIN 😹😹 !!!</h1>
        <p class="lead">Selamat datang di siatmin.com</p>
        <hr class="my-4" style="width: 200px; margin: auto;">
        <p>Gunakan menu di atas untuk mengelola data mahasiswa dan tugas.</p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
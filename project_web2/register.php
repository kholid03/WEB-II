<?php
require_once 'config/koneksi.php';
require_once 'controllers/AuthController.php';

$auth = new AuthController($koneksi);

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role     = $_POST['role'];

    if ($auth->register($username, $password, $role)) {
        echo "<script>alert('Berhasil Daftar sebagai $role!'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Gagal Daftar! Username mungkin sudah ada.');</script>";
    }
}
?>

<form method="POST">
    <h2>Register Baru</h2>
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <label>Daftar Sebagai:</label>
    <select name="role" required>
        <option value="mahasiswa">Mahasiswa</option>
        <option value="admin">Admin</option>
    </select><br><br>
    <button type="submit" name="register">Simpan ke Database</button>
</form>
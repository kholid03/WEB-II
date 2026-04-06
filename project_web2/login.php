<?php
require_once 'config/koneksi.php'; 
require_once 'controllers/AuthController.php';

$auth = new AuthController($koneksi);

if (isset($_POST['login'])) {
    $role = $auth->login($_POST['username'], $_POST['password']);
    
    if ($role === 'admin') {
        header("Location: views/dashboard_admin.php");
        exit();
    } elseif ($role === 'mahasiswa') {
        header("Location: views/admin_mahasiswa.php"); 
        exit();
    } else {
        echo "<script>alert('Akun tidak ditemukan atau password salah!');</script>";
    }
}
?>
<form method="POST">
    <h2>Login System</h2>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit" name="login">Login</button>
    <p>Belum punya akun? <a href="register.php">Daftar</a></p>
</form>
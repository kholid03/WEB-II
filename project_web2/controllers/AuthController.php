<?php
// Mengarahkan ke file koneksi secara otomatis
include_once dirname(__DIR__) . '/config/koneksi.php';

class AuthController {
    private $db;

    public function __construct($koneksi) {
        $this->db = $koneksi;
    }

    // Fungsi Register: Langsung simpan ke database
    public function register($username, $password, $role) {
        $user = mysqli_real_escape_string($this->db, $username);
        // Password di-hash agar aman (anti gagal login nantinya)
        $pass = password_hash($password, PASSWORD_DEFAULT);
        $role = mysqli_real_escape_string($this->db, $role);

        $query = "INSERT INTO users (username, password, role) VALUES ('$user', '$pass', '$role')";
        return mysqli_query($this->db, $query);
    }

    // Fungsi Login: Mengambil role dari database
    public function login($username, $password) {
        $user = mysqli_real_escape_string($this->db, $username);
        $query = "SELECT * FROM users WHERE username = '$user'";
        $result = mysqli_query($this->db, $query);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            // Verifikasi password yang di-hash
            if (password_verify($password, $row['password'])) {
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }
                $_SESSION['username'] = $row['username'];
                $_SESSION['role'] = $row['role'];
                return $row['role']; // Mengembalikan 'admin' atau 'mahasiswa'
            }
        }
        return false;
    }
}
?>
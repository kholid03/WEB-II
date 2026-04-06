<?php
$koneksi = mysqli_connect("localhost", "root", "", "web2_tugas");

if (!$koneksi) {
    die("Koneksi gagal: ". mysqli_connect_error());
}
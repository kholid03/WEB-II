<?php
// 1. Membuat class bernama Mahasiswa
class Mahasiswa {
    // Memiliki property: nama, nim, jurusan
    public $nama;
    public $nim;
    public $jurusan;

    // Konstruktor untuk mempermudah pengisian data (opsional tapi disarankan)
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // 2. Memiliki method: tampildata()
    public function tampildata() {
        echo "Nama : " . $this->nama . "<br>";
        echo "NIM : " . $this->nim . "<br>";
        echo "Jurusan : " . $this->jurusan . "<br>";
    }
}

// 3. Buat 1 object dan tampilkan datanya
$mahasiswa1 = new Mahasiswa("Andi", "12345", "Teknik Informatika");

// Memanggil method untuk menampilkan hasil di browser
echo "<h3>Hasil Tugas 1 - Data Mahasiswa</h3>";
$mahasiswa1->tampildata();
?>
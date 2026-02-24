<?php

// 1. Buat class bernama PersegiPanjang
class PersegiPanjang {
    // Properti
    public $panjang;
    public $lebar;

    // 2. Method hitungLuas() -> Mengembalikan nilai luas
    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }

    // 2. Method hitungKeliling() -> Mengembalikan nilai keliling
    public function hitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}

// 3. Buat object dengan nilai: panjang = 10, lebar = 5
$kotak = new PersegiPanjang();
$kotak->panjang = 10;
$kotak->lebar = 5;

// 4. Tampilkan hasil
echo "=== HASIL TUGAS 2 ===<br>";
echo "Panjang : " . $kotak->panjang . "<br>";
echo "Lebar   : " . $kotak->lebar . "<br>";
echo "Luas    : " . $kotak->hitungLuas() . "<br>";
echo "Keliling: " . $kotak->hitungKeliling() . "<br>";

?>
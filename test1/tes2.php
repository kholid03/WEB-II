<?php
// 1. Membuat Array berisi 5 nilai mahasiswa
$nilai_mahasiswa = [20, 45, 50, 70, 35];

// 2. Menghitung rata-rata
// array_sum menjumlahkan semua isi array, count menghitung jumlah elemen
$total_nilai = array_sum($nilai_mahasiswa);
$jumlah_data = count($nilai_mahasiswa);
$rata_rata = $total_nilai / $jumlah_data;

// 3. Menentukan status berdasarkan rata-rata
if ($rata_rata >= 75) {
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}

// 4. Menampilkan hasilnya di browser
echo "<h3>Hasil Review 2</h3>";
echo "Nilai Mahasiswa: " . implode(", ", $nilai_mahasiswa) . "<br>";
echo "Rata-rata Nilai: " . $rata_rata . "<br>";
echo "Status: <strong>" . $status . "</strong>";
?>

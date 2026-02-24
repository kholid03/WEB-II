<!DOCTYPE html>
<html>
<head>
    <title>Program Hitung Total Bayar</title>
</head>
<body>
    <h2>Input Data Barang</h2>
    <form method="POST">
        Nama Barang: <input type="text" name="nama" required><br><br>
        Harga Satuan: <input type="number" name="harga" required><br><br>
        Quantity (Qty): <input type="number" name="qty" required><br><br>
        <button type="submit" name="hitung">Hitung Total</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['hitung'])) {
        $namaBarang = $_POST['nama'];
        $harga = $_POST['harga'];
        $qty = $_POST['qty'];

        // Fungsi untuk mengembalikan hasil perkalian harga dan qty
        function hitungSubtotal($h, $q) {
            return $h * $q;
        }

        // Proses perhitungan
        $subtotal = hitungSubtotal($harga, $qty);
        $ppn = $subtotal * 0.11; // PPN 11%
        $totalBayar = $subtotal + $ppn;

        // Menampilkan hasil di browser
        echo "<h3>Hasil Review 1:</h3>";
        echo "Nama Barang: " . $namaBarang . "<br>";
        echo "Harga Satuan: Rp " . number_format($harga, 0, ',', '.') . "<br>";
        echo "Jumlah (Qty): " . $qty . "<br>";
        echo "Subtotal: Rp " . number_format($subtotal, 0, ',', '.') . "<br>";
        echo "PPN (11%): Rp " . number_format($ppn, 0, ',', '.') . "<br>";
        echo "<strong>Total Bayar: Rp " . number_format($totalBayar, 0, ',', '.') . "</strong>";
    }
    ?>
</body>
</html>
<?php
// Array 2 dimensi berisi data buah
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// 1. Cetak nama buah pertama
echo "Nama buah pertama: " . $buah[0][0] . "<br><br>";

// 2. Hitung total nilai (harga × stok) untuk semua buah
$total = 0;
for ($i = 0; $i < count($buah); $i++) {
    $harga = $buah[$i][1];
    $stok  = $buah[$i][2];
    $total += $harga * $stok;
}

echo "Total nilai semua buah (harga x stok): Rp " . number_format($total, 0, ',', '.');
?>

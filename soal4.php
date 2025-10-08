<?php
// Membuat array 2 dimensi 3x3 berisi angka acak 1–9
$matriks = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9); // angka acak 1–9
    }
}

// Cetak array dalam bentuk matriks (tabel)
echo "<h3>Matriks 3x3:</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td>" . $matriks[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

// Hitung jumlah total semua elemen
$total = 0;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $total += $matriks[$i][$j];
    }
}

echo "<br><strong>Jumlah total semua elemen: $total</strong>";
?>

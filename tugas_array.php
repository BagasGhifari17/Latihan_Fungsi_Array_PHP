<?php
// Matriks A (3x3)
$A = array(
    array(1, 1, 1),
    array(2, 2, 2),
    array(3, 3, 3)
);

// Matriks B (3x3)
$B = array(
    array(3, 3, 3),
    array(2, 2, 2),
    array(1, 1, 1)
);

// Matriks C untuk menyimpan hasil penjumlahan
$C = array();

// Proses penjumlahan matriks menggunakan looping
for ($i = 0; $i < 3; $i++) {           // loop baris
    for ($j = 0; $j < 3; $j++) {       // loop kolom
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Menampilkan hasil matriks C
echo "<h3>Hasil Penjumlahan Matriks A + B :</h3>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $C[$i][$j] . " ";
    }
    echo "<br>";
}
?>

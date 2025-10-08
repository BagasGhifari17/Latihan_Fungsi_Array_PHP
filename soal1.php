<?php
// Membuat array 2 dimensi berisi 3 data siswa
$siswa = array(
    array("Andi", 85, 90),   // [0] Nama, Matematika, Bahasa
    array("Budi", 78, 88),   // [1]
    array("Cici", 92, 95)    // [2]
);

// Cetak nilai Bahasa dari siswa ke-2 (indeks 1, kolom 2)
echo "Nilai Bahasa siswa ke-2 (" . $siswa[1][0] . ") adalah: " . $siswa[1][2];
echo "<br><br>";

// Cetak semua data menggunakan looping
echo "<h3>Data Nilai Siswa:</h3>";
for ($i = 0; $i < count($siswa); $i++) {
    echo "Nama: " . $siswa[$i][0] . "<br>";
    echo "Nilai Matematika: " . $siswa[$i][1] . "<br>";
    echo "Nilai Bahasa: " . $siswa[$i][2] . "<br>";
    echo "<hr>";
}
?>

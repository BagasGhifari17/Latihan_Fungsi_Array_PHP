<?php
$punakawan = array("Semar","Gareng","Petruk","Bagong");

// Menampilkan elemen pertama (indeks 0)
echo $punakawan[0]; // Hasil: Semar
echo "<br>";

// Menampilkan elemen keempat (indeks 3)
echo $punakawan[3]; // Hasil: Bagong
echo "<br>";

// Mengubah isi array
$punakawan[1] = "Semar";
$punakawan[2] = "Gareng";
$punakawan[3] = "Petruk";
$punakawan[4] = "Bagong";

// Menampilkan elemen indeks ke-3 setelah perubahan
echo $punakawan[3]; // Hasil: Petruk
?>

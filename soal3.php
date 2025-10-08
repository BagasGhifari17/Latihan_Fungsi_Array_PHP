<?php
// Array asosiatif multidimensi berisi 3 produk
$produk = [
    [
        "nama" => "Laptop Gaming",
        "kategori" => "Elektronik",
        "harga" => 15000000,
        "rating" => 4.8
    ],
    [
        "nama" => "Headphone Bluetooth",
        "kategori" => "Aksesoris",
        "harga" => 750000,
        "rating" => 4.5
    ],
    [
        "nama" => "Smartphone",
        "kategori" => "Elektronik",
        "harga" => 5000000,
        "rating" => 4.7
    ]
];

// Mencari produk dengan harga tertinggi
$termahal = $produk[0]; // anggap produk pertama yang paling mahal dulu

for ($i = 1; $i < count($produk); $i++) {
    if ($produk[$i]["harga"] > $termahal["harga"]) {
        $termahal = $produk[$i];
    }
}

// Cetak produk dengan harga tertinggi
echo "<h3>Produk dengan Harga Tertinggi:</h3>";
echo "Nama Produk: " . $termahal["nama"] . "<br>";
echo "Kategori: " . $termahal["kategori"] . "<br>";
echo "Harga: Rp " . number_format($termahal["harga"], 0, ',', '.') . "<br>";
echo "Rating: " . $termahal["rating"];
?>

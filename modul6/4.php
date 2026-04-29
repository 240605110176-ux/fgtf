<?php 
// Inisialisasi array asosiatif (Negara => Kode Telepon)
$kode = [
    'Afghanistan' => 93,
    'Brazil' => 55,
    'Indonesia' => 62,
    'Malaysia' => 60,
    'Palestina' => 970
];

/**
 * 1. array_reverse()
 * Fungsi ini membalikkan urutan elemen array.
 * Elemen terakhir (Palestina) akan menjadi yang pertama.
 */
$array1 = array_reverse($kode);
echo "--- Hasil array_reverse ---\n";
print_r($array1);

/**
 * 2. array_flip()
 * Fungsi ini menukar 'Kunci' (Key) dengan 'Nilai' (Value).
 * Nama negara yang tadinya Key menjadi Value, dan angka menjadi Key.
 */
$array2 = array_flip($kode);
echo "\n--- Hasil array_flip ---\n";
print_r($array2);

/**
 * 3. shuffle()
 * Fungsi ini mengacak posisi elemen di dalam array secara random.
 * PERHATIKAN: shuffle() akan menghapus key string ('Afghanistan', dll) 
 * dan menggantinya dengan indeks angka (0, 1, 2, dst).
 */
shuffle($kode); 
echo "\n--- Hasil shuffle (Key asli hilang) ---\n";
print_r($kode);
?>
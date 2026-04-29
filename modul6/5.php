<?php
/**
 * Fungsi cari
 * Parameter: 
 * $array (array): Kumpulan data yang akan diperiksa
 * $cari (mixed): Nilai yang ingin dicari di dalam array
 * Return: 
 * bool (true jika ketemu, false jika tidak)
 */
function cari($array, $cari): bool {
    // foreach digunakan untuk menyisir setiap elemen array satu per satu
    foreach ($array as $item) {
        // Membandingkan nilai elemen saat ini ($item) dengan yang dicari ($cari)
        if ($item == $cari) {
            // Jika cocok, fungsi SEGERA berhenti dan mengembalikan true
            return true; 
        }
    }
    
    // Baris ini hanya akan dieksekusi jika seluruh array sudah diperiksa 
    // dan tidak ada satupun elemen yang cocok (if tidak pernah bernilai true)
    return false; 
}

// --- PENGGUNAAN ---

$data = ['Apple', 'Banana', 'Cherry'];

// var_dump digunakan untuk melihat hasil kembalian (bool) dan tipe datanya
echo "Pencarian Banana: ";
var_dump(cari($data, 'Banana')); // Hasil: bool(true)

echo "Pencarian Durian: ";
var_dump(cari($data, 'Durian')); // Hasil: bool(false)
?>
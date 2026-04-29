<?php 
$kode = [
    'Afghanistan' => 93,
    'Brazil' => 55,
    'Indonesia' => 62,
    'Malaysia' => 60,
    'Palestina' => 970
];

echo "--- asort (Urut nilai terkecil ke terbesar) ---\n";
asort($kode);
print_r($kode);

echo "\n--- arsort (Urut nilai terbesar ke terkecil) ---\n";
arsort($kode);
print_r($kode);

echo "\n--- ksort (Urut kunci/nama A-Z) ---\n";
ksort($kode);
print_r($kode);

echo "\n--- krsort (Urut kunci/nama Z-A) ---\n";
krsort($kode);
print_r($kode);
?>
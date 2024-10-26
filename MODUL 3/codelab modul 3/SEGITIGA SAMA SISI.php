<?php
$tinggi = 5; // Tentukan tinggi segitiga

for ($i = 1; $i <= $tinggi; $i++) {
    // Cetak spasi untuk membuat segitiga rata tengah
    for ($j = $i; $j < $tinggi; $j++) {
        echo " ";
    }

    // Cetak bintang untuk segitiga
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }

    // Pindah baris
    echo "\n";
}
?>
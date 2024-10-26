<?php
$tinggi = 5; // Tentukan tinggi segitiga terbalik

for ($i = $tinggi; $i >= 1; $i--) {
    // Cetak spasi untuk membuat segitiga rata tengah
    for ($j = $tinggi; $j > $i; $j--) {
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
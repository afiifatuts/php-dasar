<?php

// rumus luas lingkaran 
function luas_lingkaran($jari_jari) {
    return round(pi() * $jari_jari * $jari_jari, 2);
}

// rumus keliling lingkaran 
function keliling_lingkaran($jari_jari) {
    return round(2 * pi() * $jari_jari, 2);
}

// rumus luas persegi pangjang
function luas_persegi($panjang, $lebar) {
    return round($panjang * $lebar, 2);
}

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo luas_persegi($i / 3, $i / 5) . "<br>";
    } elseif ($i % 3 == 0) {
        echo luas_lingkaran($i / 3) . "<br>";
    } elseif ($i % 5 == 0) {
        echo keliling_lingkaran($i / 5) . "<br>";
    } else {
        echo number_format($i, 2) . "<br>";
    }
}
?>

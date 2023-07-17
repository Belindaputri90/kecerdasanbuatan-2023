<?php

// Implementasi algoritma pencarian biner
function binarySearch($array, $target) {
    $low = 0;
    $high = count($array) - 1;

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);

        if ($array[$mid] == $target) {
            return $mid;
        } elseif ($array[$mid] < $target) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }

    return -1; // Jika target tidak ditemukan
}

// Implementasi algoritma pencarian linier
function linearSearch($array, $target) {
    $length = count($array);

    for ($i = 0; $i < $length; $i++) {
        if ($array[$i] == $target) {
            return $i;
        }
    }

    return -1; // Jika target tidak ditemukan
}

// Contoh penggunaan algoritma pencarian biner
$array = [2, 5, 8, 12, 16, 23, 38, 56, 72, 91];
$target = 23;

$result = binarySearch($array, $target);

if ($result != -1) {
    echo "Angka $target ditemukan pada indeks ke-$result.";
} else {
    echo "Angka $target tidak ditemukan dalam array.";
}

echo "\n";

// Contoh penggunaan algoritma pencarian linier
$array = [4, 9, 2, 17, 30, 8, 22];
$target = 30;

$result = linearSearch($array, $target);

if ($result != -1) {
    echo "Angka $target ditemukan pada indeks ke-$result.";
} else {
    echo "Angka $target tidak ditemukan dalam array.";
}
?>
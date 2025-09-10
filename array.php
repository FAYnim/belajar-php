<?php
    // array
    // diakses dengan index
    $buah = array("Pisang", "Apel", "Mangga");
    echo $buah[0] . "<br>"; // Pisang
    echo $buah[1] . "<br>"; // Apel

    // array asosiatif
    // diaksses dengan key
    $nilai = [
        "Andi" => 90,
        "Budi" => 85,
        "Citra" => 95
    ];

    echo "Nilai Andi: " . $nilai["Andi"] . "<br>"; // 90
    echo "Nilai Budi: " . $nilai["Budi"] . "<br>"; // 85

    // array multidimensi
    $penduduk = [
        ["Andi", 20, "Jakarta"],
        ["Budi", 22, "Bandung"],
        ["Citra", 19, "Surabaya"]
    ];

    echo "Nama: " . $penduduk[0][0] . "<br>";
    echo "Umur: " . $penduduk[0][1] . "<br>";
    echo "Kota: " . $penduduk[0][2] . "<br>";

    // fungsi array
    // sorting
    echo "<br>Buah sebelum diurutkan:<br>";
    foreach($buah as $b) {
        echo $b . "<br>";
    }
    sort($buah); // mengurutkan array secara ascending
    echo "<br>Buah setelah diurutkan:<br>";
    foreach($buah as $b) {
        echo $b . "<br>";
    }

    // cek array
    if(in_array("Apel", $buah)) {
        echo "<br>Apel ada di dalam array buah<br>";
    } else {
        echo "<br>Apel tidak ada di dalam array buah<br>";
    }
?>
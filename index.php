<?php
    // komentar
    /*multiline komentar*/
    echo "Hello World!<br>";

    // sintaks dasar
    echo "Sintaks dasar sudah paham<br>";

    // variabel
    $inivar = "Variabel sudah paham<br>";
    echo $inivar;

    // tipe data
    echo "Tipe Data<br>";
    echo is_numeric($inivar) ? "Variabel adalah angka<br>" : "Variabel bukan angka<br>";

    // text manipulation
    echo "Text Manipulation<br>";
    $text_satu = "Hello";
    $text_dua = "World";
    echo $text_satu . " " . $text_dua . "<br>"; // concatenation
    $text_gabungan = "$text_satu $text_dua<br>"; // interpolation 
    echo $text_gabungan;

    $kalimat_satu = "Saya belajar PHP";
    $kalimat_dua = "PHP itu menyenangkan";
    echo strpos($kalimat_satu, "PHP");
    // TEXT MANIPULATION LAIN
    /*
        strlen() => menghitung panjang string
        str_word_count() => menghitung jumlah kata
        str_replace() => mengganti kata
        substr() => mengambil sebagian string
        strtolower() => mengubah string menjadi huruf kecil
        strtoupper() => mengubah string menjadi huruf besar
    */

    // operator aritmatika
    echo "<br>Operator Aritmatika<br>";
    $a = 10;
    $b = 20;
    echo $a + $b . "<br>"; // penjumlahan
    echo $b - $a . "<br>"; // pengurangan
    echo $a * $b . "<br>"; // perkalian
    echo $b / $a . "<br>"; // pembagian
    echo $b % $a . "<br>"; // modulus
    echo $a ** 2 . "<br>"; // pangkat

    // operator pembandingan
    echo "Operator Pembandingan<br>";
    var_dump($a == $b); // sama dengan
    var_dump($a != $b); // tidak sama dengan
    var_dump($a < $b); // kurang dari
    var_dump($a > $b); // lebih dari
    var_dump($a <= $b); // kurang dari sama dengan
    var_dump($a >= $b); // lebih dari sama dengan

    // operator logika
    echo "<br>Operator Logika<br>";
    var_dump($a < $b && $a == 10); // AND
    var_dump($a < $b || $a == 20); // OR
    var_dump(!$a); // NOT
    var_dump($a < $b xor $a == 20); // XOR pengembalikan nilai true jika salah satu bernilai true

    // struktur kontrol
    echo "<br>Struktur Kontrol<br>";

    // if else
    if($a < $b) {
        echo "$a lebih kecil dari $b<br>";
    } else {
        echo "$a tidak lebih kecil dari $b<br>";
    }

    // if else if else
    if($a < $b) {
        echo "$a lebih kecil dari $b<br>";
    } else if($a == $b) {
        echo "$a sama dengan $b<br>";
    } else {
        echo "$a lebih besar dari $b<br>";
    }

    // switch case
    $warna = "merah";
    switch($warna) {
        case "merah":
            echo "Warna merah<br>";
            break;
        case "biru":
            echo "Warna biru<br>";
            break;
        case "hijau":
            echo "Warna hijau<br>";
            break;
        default:
            echo "Warna tidak diketahui<br>";
    }

    // perulangan / looping
    echo "Perulangan / Looping<br>";
    // for
    for($i = 1; $i <= 5; $i++) {
        echo "Perulangan ke-$i<br>";
    }
    // while
    $j = 1;
    while($j <= 5) {
        echo "Perulangan ke-$j<br>";
        $j++;
    }
    // do while
    $k = 1;
    do {
        echo "Perulangan ke-$k<br>";
        $k++;
    } while($k <= 5);
?>
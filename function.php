<?php
    // fungsi biasa
    function cek_jumlah($a, $b){
        echo "hasil penjumlahan $a dan $b adalah " . ($a + $b);
    }

    cek_jumlah(10, 16);

    // fungsi dengan return
    function hitung_luas_persegi($sisi){
        return $sisi * $sisi;
    }
    $luas_persegi = hitung_luas_persegi(5);
    echo "<br>Luas persegi dengan sisi 5 adalah $luas_persegi";
?>
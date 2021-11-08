<?php

echo "Bilangan 1 = 10 <br>";
echo "Bilangan 2 = 5 <br> <br>";
echo "Berikut merupakan hasil dari setiap operasi <br> <br>";
    
    function penjumlahan($x, $y){
        $total = $x + $y;

        echo "PENJUMLAHAN <br>";
        echo "Operator : + <br>";
        echo "Hasil = $total <br> <br>";
    }
    penjumlahan(10, 5);

    function pengurangan($x, $y){
        $total = $x - $y;

        echo "PENGURANGAN <br>";
        echo "Operator : - <br>";
        echo "Hasil = $total <br> <br>";
    }
    pengurangan(10, 5);

    function perkalian($x, $y){
        $total = $x * $y;

        echo "PERKALIAN <br>";
        echo "Operator : * <br>";
        echo "Hasil = $total <br> <br>";
    }
    perkalian(10, 5);

    function pembagian($x, $y){
        $total = $x / $y;

        echo "PEMBAGIAN <br>";
        echo "Operator : / <br>";
        echo "Hasil = $total <br> <br>";
    }
    pembagian(10, 5);

    function modulus($x, $y){
        $total = $x % $y;

        echo "MODULUS <br>";
        echo "Operator : % <br>";
        echo "Hasil = $total <br> <br>";
    }
    modulus(10, 5);

?>
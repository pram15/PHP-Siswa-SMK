<?php 

    // OPERATOR MATEMATIKA 

    $a = 2;
    $b = 2;

    $c = $a + $b;
    echo $c. '<br>';

    $c = $a - $b;
    echo $c. '<br>';

    $c = $a * $b;
    echo $c. '<br>';

    $c = $a / $b;
    echo floor($c). '<br>';

    $c = $a % $b;
    echo $c. '<br>';

    // OPERATOR LOGIKA

    $c = $a < $b;
    echo $c. '<br>';

    $c = $a > $b;
    echo $c. '<br>';

    $c= $a == $b;
    echo $c. '<br>';

    $c = $a != $b;
    echo $c. '<br>';

    // OPERATOR INCREMENT(++) dan DICREMENT(--)

    $a++;
    echo $a. '<br>';

    // OPERATOR STRING

    $kata = 'Sura';
    $kota = 'baya';

    $hasil = $kata.$kota;
    $hasil .= ' KOTA PAHLAWAN';
    echo $hasil;

?>
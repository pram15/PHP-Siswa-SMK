<?php 

    function belajar(){
        echo "saya belajar PHP";
    }

    belajar();
    echo "<br>";

    function luaspersegi($p = 5, $l = 3){
        $luas = $p * $l;
        echo "$luas";
    }

    function luas($p = 5, $l = 3){
        $luas = $p * $l;
        return "$luas";
    }

    function output(){
        return "belajar fuction";
    }

    echo luas(100,3) * 5;
?>
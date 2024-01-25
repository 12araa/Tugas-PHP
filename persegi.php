<?php
//luas persegi
$sisi = 10;
$luas = $sisi * $sisi;
echo "Hasil luas persegi dengan sisi $sisi adalah $luas <br>";

//function
function persegi ($sisi){
    $luas_persegi = ($sisi *$sisi);
    return $luas_persegi;
}

$sisi = 15;
$rumus_persegi = persegi($sisi);
echo "Luas persegi = $rumus_persegi <br> ";

//class
class Rumus_persegi{
    function luas_persegi($angka){
        $luas = ($angka * $angka);
        echo "Luas persegi nya adalah = $luas";
    }
}

$persegi = new Rumus_persegi();
$persegi->luas_persegi(12);

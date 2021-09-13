<?php
class bangun {
    function luaspersegi($sisi){
        echo "Luas Persegi<br>";
        echo "sisi=$sisi<br>";
        $luas = $sisi * $sisi;
        echo "Luas=$luas<br>";
        echo "<br>";
    }

    function luas2($alas,$tinggi){
        echo "Luas Segitiga<br>";
        echo "Alasnya=$alas<br>";
        echo "Tingginya=$tinggi<br>";
        $luas = 1/2* $alas * $tinggi;
        echo "Luas=$luas<br>";
        echo "<br>";
    }

    function luas1($jari){
        echo "Luas Lingkaran<br>";
        echo "Phi=3.14<br>";
        echo "jari-jari=$jari<br>";
        $luas = $jari * 3.14;
        echo "Luasnya=$luas<br>";
    }
}
$bangunan = new bangun();
$bangunan->luaspersegi(10);
$bangunan->luas2(10,5);
$bangunan->luas1(10);
?>
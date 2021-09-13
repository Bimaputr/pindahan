<!-- <?php

    //class
class laptop {
    //property/atribut
    var $pemilik;
    var $merk;
    var $ukuran_layar;

    //function/method
    function hidupkan_laptop(){
        return "Hidupkan Laptopnya";
    }

    function matikan_laptop(){
        return "Matikan Laptopnya";
    }
}

$laptop_andi = new laptop();

echo $laptop_andi->hidupkan_laptop();
echo "<br>";
echo $laptop_andi->matikan_laptop();
echo ":)";
?> -->



<?php

    //class
class Playstation {
    //property/atribut
    var $pemilik;
    var $vers;
    var $ram;

    //function/method
    function hidupkan_PS($keterangan){
        return $keterangan;
    }

    function matikan_PS($mati){
        return $mati;
    }

    function mainkan_PS(){
        return "Mainkan PS nya";
    }
}

$laptop_andi = new Playstation();

echo $laptop_andi->hidupkan_PS("Menyalakan PS");
echo "<br>";
echo $laptop_andi->matikan_PS("Mematikan PS");
//set objek
// $laptop_andi->pemilik="Siskah";
// $laptop_andi->vers=5;
// $laptop_andi->ram=600;
//tampilan
// echo "Pemilik :". $laptop_andi->pemilik;
// echo "<br>";
// echo "Versi :".$laptop_andi->vers;
// echo "<br>";
// echo "RAM :".$laptop_andi->ram."GB";
// echo "<br>";
// echo $laptop_andi->hidupkan_PS();
// echo "<br>";
// echo $laptop_andi->mainkan_PS();
// echo "<br>";
// echo $laptop_andi->matikan_PS();
// echo ":)";

?>
<?php
//class utama
class bangundatar{
    public $luas;
    public $luas1;
    protected function berinama(){
        echo "Bangun Datar";
    }
}

//class turunan
class persegi extends bangundatar{
    function berinamateman($sisi){
        echo "Luas Persegi<br>";
        echo "sisi=$sisi<br>";
        $this->luas = $sisi * $sisi;
        echo "Luas=$this->luas<br>";
        $this->luas1=4*$sisi;
        echo "Keliling=$this->luas1<br>";
        echo "<hr>";
    }
}
class persegipanjang extends bangundatar{
    function panjang($panjang,$lebar){
        echo "Luas Persegi panjang<br>";
        echo "panjang=$panjang<br>";
        echo "lebar=$lebar<br>";
        $this->luas = $panjang * $lebar;
        echo "Luas=$this->luas<br>";
        $this->luas1=2*$panjang*$lebar;
        echo "Keliling=$this->luas1<br>";
        echo "<hr>";
    }
}
class segitiga extends bangundatar{
    function segi($alas,$tinggi){
        echo "Luas Segitiga<br>";
        echo "Alasnya=$alas<br>";
        echo "Tingginya=$tinggi<br>";
        $this->luas = 1/2* $alas * $tinggi;
        echo "Luas=$this->luas<br>";
        $this->luas1=2*$alas*$tinggi;
        echo "Keliling=$this->luas1<br>";
        echo "<hr>";
    }
}
class lingkaran extends bangundatar{
    function lingkar($jari){
        echo "Luas Lingkaran<br>";
        echo "Phi=3.14<br>";
        echo "jari-jari=$jari<br>";
        $this->luas = $jari * 3.14;
        echo "Luasnya=$this->luas<br>";
        $this->luas1=2*22/7*$jari;
        echo "Keliling=$this->luas1<br>";
        echo "<hr>";
    }
}

//instansi class teman
$malas = new persegi;
$malas->berinamateman(5);
$malas = new persegipanjang;
$malas->panjang(5,4);
$malas = new segitiga;
$malas->segi(5,5);
$malas = new lingkaran;
$malas->lingkar(5);

?>
<?php
 
//class manusia
class manusia{
    //property
    var $nama;
    var $kelas;
    var $umur;
    
    
    function __construct($nama,$jk,$kls){
        echo "Nama : ". $nama."<br>";
        echo "Jenis Kelamin : ".$jk."<br>";
        echo "Kelas : ".$kls;
        echo "<hr>";
    }
}
//instansiasi class manusia
$manusia = new manusia("Bimm","Laki-laki","XII RPL 3");
$manusia = new manusia("Lurr","Laki-laki","XII RPL 2");
$manusia = new manusia("cut","Perempuan","XII RPL 1");
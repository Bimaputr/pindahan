<?php
class manusia{
    //property
    var $nama;
    var $warna;
    
    //method construct di jalankan pertama kali
    function __construct(){
        echo "Amal <br/>";
    }

    function nama($nama){
        echo $nama."<br>";
    }
    
    //method destruct di jalankan terakhir
    function __destruct(){
        echo "Menganga <br/>";
    }
    
}
//instansiasi class manusia
$manusia = new manusia();
 
//memanggil method tampilkan_nama dari class manusia
echo $manusia->nama("Udin");
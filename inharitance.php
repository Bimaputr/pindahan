<?php
//class utama
class manusia{
    public $teman = "maudy";
    public $teman1="del";
    public $teman2 = "mau";
    public $teman3="de";
    protected function berinama(){
        echo "nama saya ujang<br>";
    }
}

//class turunan
class teman extends manusia{
    function berinamateman(){
        echo "nama teman saya ".$this->teman;
        echo "nama teman saya ".$this->teman1;
    }
}
class teman1 extends manusia{
    function namateman(){
        echo "nama teman saya ".$this->teman2;
        echo "nama teman saya ".$this->teman3;
    }
}

//instansi class teman
$malas = new teman1;
$malas->berinamateman();
$malas->namateman();


?>
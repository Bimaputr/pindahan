<?php
$nama = array(
    1=>"Palah",
    6=>"Dinda",
    12=>"Cecep",
    45=>"Maudy",
    55=>"Nabila",
);
$wr = array(70,80,90,100,60,);

// echo "Nama :" .$nama[1] ." Nilai :" .$wr ['A'];
// echo "<br>";
// echo "Nama :" .$nama[6] ." Nilai :" .$wr ['B'];
// echo "<br>";
// echo "Nama :" .$nama[12] ." Nilai :" .$wr ['C'];
// echo "<br>";
// echo "Nama :" .$nama[45] ." Nilai :" .$wr ['D'];
// echo "<br>";
// echo "Nama :" .$nama[55] ." Nilai :" .$wr ['E'];
// echo "<br>";
// echo ":)";

foreach ($nama as $key => $val)
{
   echo " $val <br>"  ;
}

foreach ($wr as $va)
{
   echo " $va <br>"  ;
}

?>
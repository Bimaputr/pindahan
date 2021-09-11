<?php
$data =[
        [
          'nama' => "palah",
          'buah' => [
              ['buah' => "mangga"],
              ['buah' => "apel"],
              ['buah' => "pear"]
          ]
        ]
        ];

foreach ($data as $data2) {
    echo "nama : ". $data2['nama'] . "<br>";
    echo "<ul>";
    foreach ($data2['buah'] as $data3){
        echo "<li>" . $data3['buah'] . "</li>";
    }
    echo "</ul>";

}
?>
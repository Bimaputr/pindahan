<!-- <?php
$datajson = "[5,3,4,2,1]";
$data = json_decode($datajson);
echo implode(" - ", $data);
?> -->

<!-- {
"nama": "nurul huda",
"domisili": "surabaya",
"usia": 23,
"wni": true,
"hobi": [
    "berenang","berlari","bertamasya"]

} -->

<?php

// $mahasiswa = [
//     'nama' => 'nurul huda',
//     'domisili' => 'surabaya',

// ];

// echo json_encode($mahasiswa);

// 

// $nilaiujian =[70,80,50,90];

// echo json_encode($nilaiujian);

$listmahasiswaJSON ='[
    {"nama": "nurul huda"},
    {"nama": "renza ilhami risqi"},
    {"nama": "taufan aji"},
    {"nama": "rahmad dwi oktanto"}
]';

$list = json_decode($listmahasiswaJSON);

foreach($list as $key => $mahasiswa){
    echo  "nama  ke -{$key} {$mahasiswa->nama} <br>";
}

?>
<?php
// $data =[
//         [
//           'olah' => "olahraga",
//           'ulah' => [            
//                 ['nama' => "sepak bola"]] ,
//           'jenis' => [
//                   ['ulah' => "sepak bola nasional"],
//                   ['ulah' => "sepak bola internasional"]]
//           'ulah1' => [            
//                 ['nama1' => "bulu tangkis"]] ,
//           'jenis1' => [
//                   ['ulah1' => "bulu tangkis nasional"],
//                   ['ulah1' => "bulu tangkis internasional"]]          
//         ],
//       ]; 

// foreach ($data as $data2) {
//     echo "isi berita :".  $data2['olah'] ."<br>";
//      ;
//     echo "<ul>";
//     foreach ($data2['ulah'] as $data3){
//         echo "<li>" . $data3['nama'] . "</li>";
//       foreach ($data2['jenis'] as $data4){
//           echo "<li>" . $data4['ulah'] . "</li>";
//           echo "<ul>";
//         foreach ($data2['ulah1'] as $data5){
//             echo "<li>" . $data5['nama1'] . "</li>";
//            foreach ($data2['jenis1'] as $data6){
//               echo "<li>" . $data6['ulah1'] . "</li>";
//       }
//     echo "</ul>";
//     }
//     echo "</ul>";

//       }
//     echo "</ul>";
//     }
//     echo "</ul>";

// }
$data =[
  ['jenis' => "olahraga", 'cabang' => [
    ['lomba' => "sepak bola", 'artikel' => [
      ['judul' => "sepak bola nasional"],
      ['judul' => "sepak bola internasional"]
    ]],
    ['lomba' => "bulu tangkis", 'artikel' => [
      ['judul' => "bulu tangkis nasional"],
      ['judul' => "bulu tangkis internasional"]
    ]],
    ['lomba' => "atletik", 'artikel' => [
      ['judul' => "atletik nasional"],
      ['judul' => "atletik internasional"]
    ]]
  ]
    ],
  ['jenis' => "Ekonomi", 'cabang' => [
    ['lomba' => "saham", 'artikel' => [
      ['judul' => "saham perusahaan"],
      ['judul' => "saham binary"]
    ]],
    ['lomba' => "bank", 'artikel' => [
      ['judul' => "bank bca"],
      ['judul' => "bank bri"]
    ]]
  ]
    ],
    ['jenis' => "Politik", 'cabang' => [
      ['lomba' => "partai", 'artikel' => [
        ['judul' => "golkar"],
        ['judul' => "pdi"]
      ]],
      ['lomba' => "pemerintah", 'artikel' => [
        ['judul' => "dpr"],
        ['judul' => "dprd"]
      ]]
    ]
      ],
  ];

echo "Artikel : Detik.com";
echo "<br>";
echo "Jenis berita :";
foreach($data as $data1){
  echo "<ul>";
  echo "<li>" . $data1['jenis'] ."</li>";
    foreach($data1 ['cabang'] as $data2){
      echo "<ul>";
      echo "<li>" . $data2['lomba'] ."</li>";
        foreach($data2 ['artikel'] as $data3){
          echo "<ul>";
          echo "<li>" . $data3['judul'] ."</li>";
          echo "</ul>";
      }
      echo "</ul>";
    }
    echo "</ul>";
}

?>
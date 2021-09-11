<?php
//jason yang akan di baca
$file ="latihan.json";

//mendapatkan file json
$latihan = file_get_contents($file);

//mendecode anggota.json
$data = json_decode($latihan, true);

//membaca atau menampilkan data array menggunakan for each
foreach ($data as  $d) {
    echo "Nama : ".$d['nama']. "<br>";
    echo "Domisili : ".$d['nama1']. "<br>";
    echo "Hobi :";
    echo "<ul>";
    echo "<li>". implode ($d['nama2']) ."</li>";
    echo "</ul>";
}
?>
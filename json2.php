<?php
//jason yang akan di baca
$file ="anggota.json";

//mendapatkan file json
$angota = file_get_contents($file);

//mendecode anggota.json
$data = json_decode($angota, true);

//membaca atau menampilkan data array menggunakan for each
foreach ($data as  $d) {
    echo "no : ".$d['nam']. "<br>";
    echo "nama : ".$d['nama']. "<br>";
    echo "jurusan :".$d['nama1']. "<br>"; 
}
?>
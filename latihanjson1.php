<?php
//jason yang akan di baca
$file ="latihanjson1.json";

//mendapatkan file json
$latihan = file_get_contents($file);

//mendecode anggota.json
$data = json_decode($latihan, true);

//membaca atau menampilkan data array menggunakan for each
foreach ($data as  $d) {
    echo "<center><h4>Data Film</h4></center>";
    echo "<center> ".$d['Title']. "</center><br>";
    echo "<center><img src='spider-verse.jpg' 'width='200' height'250'></center>";
    echo $d['Plot']. "<br>";
    echo "  " ."<br>";
    echo "Tahun Rilis : ".$d['Year']. "<br>";
    echo "Tanggal liris:".$d['Released']. "<br>";
    echo "Durasi film:".$d['Runtime']. "<br>";
    echo "Genre:".implode($d['Genre']). "<br>";
    echo "Director:".$d['Director']. "<br>";
    echo "Writers:";
    foreach ($d['Writers'] as $d2){
        echo "<ul>";
        echo "<li>". $d2 . "</li> <br>";
        echo "</ul>";
    }
    echo "Actors:";
    foreach ($d['Actors'] as $d2){
        echo "<ul>";
        echo "<li>". $d2 . "</li> <br>";
        echo "</ul>";
    }
    echo "Bahasa:".$d['Language']. "<br>";
    echo "Negara:".$d['Country']. "<br>";
    echo "Penghargaan:".$d['Awards']. "<br>";
    echo "Nilai:".$d['imdbRating']. "<br>";
    echo "Vote:".$d['imdbVotes']. "<br>";
    echo "imdbID:".$d['imdbID']. "<br>";
}
?>
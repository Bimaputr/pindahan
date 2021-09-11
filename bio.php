<?php
if(isset($_POST['proses'])){
    $nama= $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $tgllahir = $_POST['tanggallahir'];
    $agama = $_POST['agama'];
    $hobi = $_POST['hobi'];
    $alamat = $_POST['alamat'];
}
    function biodata($nama,$jeniskelamin,$tgllahir,$agama,$alamat,$hobi){
        echo "<table>";
        echo "<tr>";
        echo "<td>Nama</td><td> :</td> <td>" . $nama .  "</td></tr>";
        echo "<td>Jenis Kelamin</td><td> :</td> <td>" . $jeniskelamin .  "</td></tr>";
        echo "<td>Tanggal Lahir</td><td> :</td> <td>" . $tgllahir .  "</td></tr>";
        echo "<td>Agama</td><td> :</td> <td>" . $agama .  "</td></tr>";
        echo "<td>Alamat</td><td> :</td> <td>" . $alamat .  "</td></tr>";
        echo "<td>Hobi</td><td> :</td><td>";
       foreach($hobi as $item => $val){  
        echo " <li>" . $val .  "</li>";
        
    }
echo "</td></tr>";
echo "</table>";
    }
    
    echo biodata($nama,$jeniskelamin,$tgllahir,$agama,$alamat,$hobi);
    
?>
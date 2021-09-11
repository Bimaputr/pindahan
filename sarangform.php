<!DOCTYPE html>
<html>
<head>
<title>Form Biodata Diri</title>
</head>
<body>
<h2>Form Biodata Diri</h2>
<form method = "POST" action="">
<table>
<tr>
<td>Masukan jumlah</td>
<td>:</td>
<td><input type='text' name='nama'></td>
</tr>


<tr>
<td></td>
<td></td>
<td><input type="submit" name="simpan" value="KIRIM"></td>
</tr>

</table>
</form>


</body>
</html>


<?php
if(isset($_POST['simpan'])){
    $i = $_POST['nama'];
    
    for($i=1; $i<=$i; $i++){

        for($a=0; $a<=$i; $a++){
            echo"perulangan $a<br>";
        }
        echo"<br>";
    }
    

}
?>
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
<td>Nama</td>
<td>:</td>
<td><input type='text' name='nama'></td>
</tr>

<tr>
<td>tempat lahir</td>
<td>:</td>
<td><input type='text' name='tempatlahir'></td>
</tr>

<tr>
<td>tanggal lahir</td>
<td>:</td>
<td><input type='date' name='tanggallahir'></td>
</tr>

<tr>
<td>jenis kelamin</td>
<td>:</td>
<td><input type='radio'  name='jeniskelamin' value='lakilaki' >Laki-laki </td>
<td><input type='radio'  name='jeniskelamin' value='perempuan' >Perempuan </td>
</tr>

<tr>
<td>alamat</td>
<td>:</td>
<td><input type='textarea' name='alamat'></td>
</tr>
<tr>
<td>agama</td>
<td>:</td>
<td><select name ='agama'>
<option value = 'islam'>Islam</option>
<option value = 'Buddha'>Buddha</option>
<option value = 'Khonghucu'>Khonghucu</option>
<option value = 'Katholik'>Katholik</option>
</select>
</td>
</tr>
<tr>
<td>pendidikan terakhir</td>
<td>:</td>
<td><select name ='pendidikan'>
<option value = 'SD'>SD</option>
<option value = 'SMP'>SMP</option>
<option value = 'SMK'>SMK</option>
<option value = 'Kuliah'>Kuliah</option>
</select>
</td>
</tr>
<tr>
<td>status</td>
<td>:</td>
<td><select name ='status'>
<option>Anak anak</option>
<option>Remaja</option>
<option>Dewasa</option>
<option>Menikah</option>
</select>
</td>
</tr>
<tr>
<td>hobi</td>
<td>:</td>
<td><input type='checkbox' name='hobi' value='bermusik'>bermusik</td>
<td><input type='checkbox' name='hobi' value='bermain'>bermain</td>
</tr>
<tr>
<td>cita-cita</td>
<td>:</td>
<td><select name ='citacita'>
<option>Pengusaha</option>
<option>Bos</option>
<option>Karyawan</option>
<option>Tni</option>
</select>
</td>
</tr>
<tr>
<td>kata-kata bijak</td>
<td>:</td>
<td><input type='textarea' name='katakata'></td>
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
    $nama = $_POST['nama'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pendidikan = $_POST['pendidikan'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $citacita = $_POST['citacita'];
    $katakata = $_POST['katakata'];

    echo "nama = $nama <br>";
    echo "tempatlahir = $tempatlahir <br>";
    echo "tanggallahir = $tanggallahir <br>";
    echo "jeniskelamin = $jeniskelamin <br>";
    echo "alamat = $alamat <br>";
    echo "agama = $agama <br>";
    echo "pendidikan = $pendidikan <br>";
    echo "status = $status <br>";
    echo "hobi = $hobi <br>";
    echo "citacita = $citacita <br>";
    echo "katakata = $katakata";
}
?>
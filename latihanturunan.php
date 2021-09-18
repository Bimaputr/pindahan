<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karir</title>
</head>
<body>

<center>
<h2>Penggajihan</h2>
<h2>Guru/Karyawan SMK Assalaam</h2>
    
    <form method="POST" action="">
    <table  >
        <tr>
            <td>No </td>
            <td> :
                <input type="text" name="no"><br>
        </tr>
        <tr>
            <td>Nama </td>
            <td> :
                <input type="text" name="nama"><br>
        </tr>
        <tr>
        <td>Unit </td>
            <td> :
            <select name="unit">
                <option value="sd">SD</option>
                <option value="smp">SMP</option>
                <option value="sma">SMA</option>
                <option value="smk">SMK</option>
                <option value="mts">MTS</option>
                <option value="madrasah">MADRASAH</option>
            </select>
        </tr>
        <tr>
            <td>tanggal</td>
            <td> :
        <input type="date" name="tanggal"><br>
        </tr>
        <tr>
            <td><h2>Gajih</h2></td>
        </tr>
        <td>Jabatan </td>
            <td> :
            <select name="jabat">
                <option value="kepala">Kepala Sekolah</option>
                <option value="guru">Guru</option>
                <option value="karyawan">Karyawan</option>
            </select>
        </tr>
        <tr>
            <td>Lama Kerja </td>
            <td> :
                <input type="number" name="lama"><br>
        </tr>
        <td>Status Kerja </td>
            <td> :
            <select name="status">
                <option value="tetap">Pegawai Tetap</option>
                <option value="kontrak">Kontrak</option>
            </select>
        </tr>
        <tr>
            <td><h2>Potongan</h2></td>
        </tr>
        <tr>
            <td>BPJS </td>
            <td> :
                <input type="text" name="bpjs"><br>
        </tr>
        <tr>
            <td>Pinjaman </td>
            <td> :
                <input type="text" name="pinjaman"><br>
        </tr>
        <tr>
            <td>Tabungan </td>
            <td> :
                <input type="text" name="tabungan"><br>
        </tr>
        <tr>
            <td>Lainnya </td>
            <td> :
                <input type="text" name="lain"><br>
        </tr>
        <tr>
            <td></td>
    
            <td><input type="submit" name="simpan" value="Proses"></td>
        </tr></center>
  
    </table>

    <?php

        
    if (isset($_POST['simpan'])){
           $no = $_POST['no'];
           $nama = $_POST['nama'];
           $unit = $_POST['unit'];
           $tanggal = $_POST['tanggal'];
           $jabat = $_POST['jabat'];
           $lama = $_POST['lama'];
           $status = $_POST['status'];
           $bpjs = $_POST['bpjs'];
           $pinjam = $_POST['pinjaman'];
           $tabung = $_POST['tabungan'];
           $lain = $_POST['lain'];

        
        
        class Penggajihan{
            public $y;
            public $x;

            public function awal($no,$nama,$unit,$tanggal){

            echo "no : $no<br>";
            echo "Nama : $nama <br>";
            echo "unit : $unit<br>";
            echo "tanggal : $tanggal<br>";
            }
            class turunana extends penggajihan{
                public $x;
                public $y;

                public function satu($jabat,$lama,$status){
                    if ($_POST['jabat'] == "kepala") {
                        $tunjangan = 5000000;
                        echo "Jabatan: $jabat <br>";
                        echo "Gaji: $tunjangan<br>";
                        echo "Lama kerja: $lama<br>";
                        echo "Bonus Lama Kerja: $bonuslama<br> ";
                        echo "Status Kerja: $status<br>";
                        echo "Tunjangan Status Kerja: $tunjangstatus<br>";
                        echo "Total Gaji: ";
                    } elseif ($_POST['jabat'] == "guru") {
                        $tunjangan = 3000000;
                        echo "Jabatan: $jabat <br>";
                        echo "Gaji: $tunjangan<br>";
                        echo "Lama kerja: $lama<br>";
                        echo "Bonus Lama Kerja: $bonuslama<br> ";
                        echo "Status Kerja: $status<br>";
                        echo "Tunjangan Status Kerja: $tunjangstatus";
                        echo "Total Gaji: ";
                    } elseif ($_POST['jabat'] == "karyawan") {
                        $tunjangan = 1500000;
                        echo "Jabatan: $jabat <br>";
                        echo "Gaji: $tunjangan<br>";
                        echo "Lama kerja: $lama<br>";
                        echo "Bonus Lama Kerja: $bonuslama<br> ";
                        echo "Status Kerja: $status<br>";
                        echo "Tunjangan Status Kerja: $tunjangstatus";
                        echo "Total Gaji: ";
                    }else{
                    echo "error";
                    }
            
                    if($_POST['lama'] >= 0){
                        $bonuslama = 250000;
                    }else if($_POST['lama']a >= 5){
                        $bonuslama = 500000;
                    }
                    else if($_POST['lama'] >=10 ){
                        $bonuslama = 1000000;
                    }else {
                        echo "ERROR";           
                    }
            
                    if($_POST['status'] == 'tetap'){
                        $tunjangstatus = 500000;
                    }else($_POST['status'] == 'kontrak') {
                        $tunjangstatus = 0;           
                    }
                }
            }
            
        }
        $gajih = new penggajihan();
        $gajih->awal($no,$nama,$unit,$tanggal);
    }

    ?>
    </form>
    
</body>
</html>
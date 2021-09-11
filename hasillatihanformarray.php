<?php
    if(isset($_POST['simpan'])){
        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $indo = $_POST['indo'];
        $inggris = $_POST['inggris'];
        $mtk = $_POST['mtk'];
        $pro = $_POST['pro'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Data Siswa Kelas XII RPL</h2>
        <table border="1">
            <tr>
                <td>Nisn</td>
                <td>Nama</td>
                <td>kelas</td>
                <td>B.indonesia</td>
                <td>B.inggris</td>
                <td>Matematika</td>
                <td>Produktif</td>
                <td>Total nilai</td>
                <td>Rata-rata</td>
                <td>Grade</td>
                <td>Status</td>             
            </tr>
            <?php
                for($i=0; $i<count($nisn); $i++){
                
            ?>
            <tr>
                <td><?php echo $nisn[$i]; ?></td>
                <td><?php echo $nama[$i]; ?></td>
                <td><?php echo $kelas[$i]; ?></td>
                <td><?php echo $indo[$i]; ?></td>
                <td><?php echo $inggris[$i]; ?></td>
                <td><?php echo $mtk[$i]; ?></td>
                <td><?php echo $pro[$i]; ?></td>
                <td><?php
                    $total = $indo[$i] + $inggris[$i] + $mtk[$i] + $pro[$i] ; echo $total;?></td>
                <td><?php
                    $rata = ($indo[$i] + $inggris[$i] + $mtk[$i] + $pro[$i]) /4; echo $rata ;?></td>
                    <td><?php
                        if($rata <=49){
                            echo "E";
                        }else if($rata < 74){
                            echo "D";
                        }else if($rata < 79){
                            echo "C";
                        }else if($rata < 89){
                            echo "B";
                        }else if($rata < 100){
                            echo "A";
                        }
                    ?>
                    <td><?php
                        if($rata >=75){
                            echo "Lulus";
                        }else if($rata < 75){
                            echo "Tidak Lulus";
                        }
                    }?>
            </tr>
        </table>
    </center>
</body>
</html>
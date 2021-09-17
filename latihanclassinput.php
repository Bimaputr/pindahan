<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
<fieldset>
    <form method="POST">
    <input type="text" name="x"> &nbsp;
   
    <select name="operasi">
      <option value="tambah">+</option>
      <option value="kali">x</option>
      <option value="kurang">-</option>
      <option value="bagi">/</option>
    </select>
   
    <input type="text" name="y"> &nbsp;
    <label>=</label> 
    <input type="submit" value="Hitung">
</form>
</fieldset>
</body>
</html>


<?php
$data = new kalkulator();
if (isset($_POST['y'])){
  $x = $_POST['x'];
  $y = $_POST['y'];
  if ($_POST['operasi'] == "tambah") {
    echo "Hasil ".$x." + ".$y." = ".$data->Tambah($x, $y).
    "<br /><br />";
  } elseif ($_POST['operasi'] == "kali") {
    echo "Hasil ".$x." x ".$y." = ".$data->Kali($x, $y).
    "<br /><br />";
  } elseif ($_POST['operasi'] == "kurang") {
    echo "Hasil ".$x." - ".$y." = ".$data->Kurang($x, $y).
    "<br /><br />";
  } elseif ($_POST['operasi'] == "bagi") {
    echo "Hasil ".$x." / ".$y." = ".$data->Bagi($x, $y).
    "<br /><br />";
  }
}
 
class kalkulator
{
  private $x;
  private $y;
 
  public function Tambah($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x + $this->y;
    return $hasil;
  }
 
  public function Kali($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x * $this->y;
    return $hasil;
  }
 
  public function Kurang($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x - $this->y;
    return $hasil;
  }
 
  public function Bagi($x, $y)
  {
    $this->x = $x;
    $this->y = $y;
    $hasil = $this->x / $this->y;
    return $hasil;
  }
}
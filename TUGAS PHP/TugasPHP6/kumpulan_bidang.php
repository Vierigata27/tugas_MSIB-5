<?php
include 'AbstractClass.php';
include 'lingkaran.php';
include 'persegipanjang.php';
include 'segitiga.php';

$l1 = new Lingkaran(10);
$p1 = new PersegiPanjang(10,5);
$s1 = new Segitiga (9,12);

$data = [$l1, $p1, $s1];

$judul = ["No", "Nama Bidang","Keterangan", "Luas Bidang", "Keliling Bidang" ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP 6</title>
</head>
<body>
    <center>
        <h1>Tugas PHP 6</h1>
        <h3>Dibuat Oleh : Vieri Arief Maulana</h3>
<table border="1">
  <thead>
    <tr>
      <?php
      foreach ($judul as $kolom) {
        echo "<th>$kolom</th>";
      }
      ?>
    </tr>
  </thead>
   <tbody>
   <?php
    foreach ($data as $total => $objek) {
      echo "<tr>";
      echo "<td>" . ($total + 1) . "</td>";
      echo "<td>" . $objek->namaBidang() . "</td>";
      echo "<td>" . $objek->Keterangan() . "</td>";
      echo "<td>" . $objek->luasBidang() . "</td>";
      echo "<td>" . $objek->kelilingBidang() . "</td>";
      echo "</tr>";
    }
    ?>
   </tbody>
   </center>
</body>
</html>
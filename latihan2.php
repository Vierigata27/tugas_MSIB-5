<?php
//deklarasi & inisialisasi
$nama = "Budi Santoso";
$totalBelanja = 150000;
$keterangan = "";
//struktur kendali if
if($totalBelanja > 100000 ){
$keterangan = "Selamat $nama Anda dapat hadiah";
}
else{
$keterangan = "Terima Kasih $nama sudah berbelanja";
}

?>

Nama Pelanggan: <?= $nama ?>
<br />Total Belanja: Rp. <?= number_format($totalBelanja,2,',','.') ?>
<br />Keterangan: <?= $keterangan ?>

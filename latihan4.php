<form method="GET">
 <label>Nama</label> <br>
 <input type="text" name="nama" /><br />
 <label>Alamat</label> <br>
 <textarea name="alamat"></textarea><br />
 <input type="submit" name="proses" 
     value="Simpan" />
</form>

<?php
//memproses form
$nama = $_GET['nama'];
$almt = $_GET['alamat'];
//tampilkan data jika sudah diproses
$proses = $_GET['proses'];
if(isset($proses)){
 echo 'Nama : '.$nama.
 '<br/>Alamat : '.$almt;
} 
?>

<?php

$nama = "Vieri Arief Maulana";
$tempat_tanggal_lahir = "Sidoarjo, 29/06/2003";
$alamat = "<br> Perumahan Wahyu Taman Sarirogo<br> AE - 19, Sumput, Sidoarjo<br>";
$keahlian = ["C++", "C", "HTML", "CSS", "Javascript", "PHP", "Mysql"];
$kampus = "UPN \"Veteran\" Jawa Timur";
$pengantar = "Saya adalah seorang mahasiswa jurusan Teknik Informatika yang sangat tertarik dengan dunia
pemrograman. Saya gemar mempelajari berbagai aspek pemrograman, mulai dari pengembangan website
hingga pemrograman berbasis kecerdasan buatan (AI). Saya sangat ingin belajar dan merasakan bagaimana
dunia kerja sebagai seorang programmer.";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tugas Javascript 7</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
			<div class="page-header">
				<h1>
					LOGO
				</h1>
			</div>
		</div>
		<div class="col-md-4">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link active" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index2.php">Portofolio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="index3.php">Contact</a>
				</li>
				<li class="nav-item dropdown ml-md-auto">
					 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown link</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						 <a class="dropdown-item" href="index.php">Home</a> <a class="dropdown-item" href="index2.php">Portofolio</a> <a class="dropdown-item" href="index3.php">Contact</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					<center><img alt="Bootstrap Image Preview" src="Vieri.jpg" class="rounded-circle"></center>
					<h3 class="text-center">
						<br>
						<?= $nama?>
					</h3>
					<h5 class="text-center">
						<?= $tempat_tanggal_lahir?>
					</h5>
				</div>
				<div class="col-md-4">
					 
					<address>
						 <strong>Alamat : </strong><?= $alamat?> <abbr title="Phone">Code:</abbr> 61228
					</address>
					<ol>
						<li>
							Keahlian Bahasa Pemrograman
							<ul>
								<?php
								foreach ($keahlian as $ahli) {
									echo "<li class='list-item'>";
									echo $ahli;
									echo "</li>";
								}
								?>
							</ul>
						</li>
					</ol>
				</div>
				<div class="col-md-4">
					<dl>
						<dt>
							Kampus
						</dt>
						<dd>
							<?= $kampus ?>
						</dd>
						<dt>
							Pengantar
						</dt>
						<dd>
							<?= $pengantar ?>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
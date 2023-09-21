<?php
$nama = "Vieri Arief Maulana";
$keterangan1 = "Saya bersama tim membuat sebuah website yang bernama
SPYPRICE. fungsi dari website tersebut adalah kita bisa mencari
harga termurah dari sebuah barang kebutuhan pokok dari
minimarket. <br><br>";

$keterangan2 = "Portal Aduan Mahasiswa (PADUM) merupakan website yang
dikembangkan oleh saya bersama tim. fungsi dari website
tersebut adalah untuk mewadahi aspirasi dan pengaduan
mahasiswa di lingkup UPN “Vateran” Jawa Timur<br><br>";
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
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<center><img alt="Bootstrap Image Preview" src="Vieri.jpg" class="rounded-circle" /></center>
					<h3 class="text-center">
						<br>
						<?= $nama ?>
					</h3>
				</div>
				<div class="col-md-6">
					<dl>
						<dt>
							PORTOFOLIO <br><br>
						</dt>
						<dt>
							Project SPYPRICE
						</dt>
						<dd>
							<?= $keterangan1 ?>
							<center><iframe width="560" height="315" src="https://www.youtube.com/embed/GVyfWlkp6Dk?si=6pYn9hQIq_DlLadp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center>
						</dd>
						<dt>
							Project PADUM
						</dt>
						<dd>
							<?= $keterangan2 ?>
							<center>
								<iframe src="https://drive.google.com/file/d/10NrXlgMd6ILuA0v9RmKfI6m90rwuJ29L/preview" width="560 " height="315"></iframe>
							  </center>
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
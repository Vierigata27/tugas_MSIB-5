<?php
$nama = "Vieri Arief Maulana";
$whatsapp = "082331646363";
$email = "21081010140@student.upnjatim.ac.id";
$github = "https://github.com/Vierigata27";
$linkedin = "http://www.linkedin.com/in/vieri-arief-m/";
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
							Contact <br><br>
						</dt>
						<dt>
							Whatsapp
						</dt>
						<dd>
							<?= $whatsapp ?> <br><br>
						</dd>
						<dt>
							Email
						</dt>
						<dd>
							<?= $email ?> <br><br>
						</dd>
						<dt>
							Github
						</dt>
						<dd>
							<a href="<?= $github ?>"><?= $github ?></a> <br><br>
						</dd>
						<dt>
							Linkedin
						</dt>
						<dd>
							<a href="<?= $linkedin ?>"><?= $linkedin ?></a> <br><br>
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
<!DOCTYPE html>
<html>
<head>
	<title>LAPOR!</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('tampilan/css/style.css'); ?>">
</head>
<body>
	<div class="header">
	  <h1>Header</h1>
	  <p>My supercool header</p>
	</div>
	<div id="box">
		<h1 align="center">SIMPLE LAPOR!</h1>
		<form action="home.php" method="POST">
			<input class="search" type="text" placeholder="cari...">	
			<input class="button" type="button" value="Cari"><br>
			<p>Buat Laporan/Komentar <button> <a href="<?php echo base_url().'index.php/create'; ?>">+</a></button></p>
		</form>				
		<div class="konten1">
		<h4>Laporan/Komentar Terakhir</h4>
		<hr>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
		</div>
		<div class="konten2">
			<h4>Lampiran: Gambar.jpg <span>(WAKTU) <a href="<?php echo base_url().'index.php/detail'; ?>">Lihat Selengkapnya ></a>></span></h4>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>						
		</div>
		<div class="konten3">
			<h4>Lampiran: Gambar.doc <span>(WAKTU) <a href="<?php echo base_url().'index.php/detail'; ?>">Lihat Selengkapnya ></a>></span></h4>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>						
		</div>
		<div class="konten4">
			<h4>Lampiran: Gambar.jpg <span>(WAKTU) <a href="<?php echo base_url().'index.php/detail'; ?>">Lihat Selengkapnya ></a>></span></h4>
			<hr>						
		</div>
		<div class="space1"></div><br>
		<div class="space1"></div><br>
		<div class="space1"></div>
							
	</div>
</body>
</html>	

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

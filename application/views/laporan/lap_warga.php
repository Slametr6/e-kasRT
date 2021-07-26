<!DOCTYPE html>
<html>
<head>
	<base href="<?= base_url();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <!-- Title Page-->
    <title>SIK RT 002 - <?= $judul;?></title>
	<link rel="shortcut icon" type="image/png" href="<?= base_url();?>assets/logo.png">
    <!-- Fontfaces CSS-->
    <link href="<?= base_url();?>assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url();?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url();?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url();?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="<?= base_url();?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="<?= base_url();?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url();?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url();?>assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url();?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url();?>assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url();?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url();?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="<?= base_url();?>assets/css/theme.css" rel="stylesheet" media="all">
</head>
<body onload="print()">
	<center>
		<table>
			<tr>
				<td>
				<img src="<?= base_url();?>assets/logo.png" style="width: 80px; height: 80px;">
				</td>
				<td>
					<center>
					<h3>RT 002</h3>
					<h5>Jl Raya Jakarta.</h5>
					<h5>Kota Administrasi, Jakarta Utara – Indonesia</h5>
					</center>
				</td>
			</tr>
		</table>
		<h4>LAPORAN DATA WARGA</h4>
	</center>
	<hr>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No.</th>
				<th>NIK</th>
                <th>nama</th>
                <th>jenis kelamin</th>
                <th>tgl lahir</th>
                <th>alamat</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			foreach ($query as $row) {
			 ?>
			<tr>
				<td><?= $no++;?></td>
				<td><?= $row->nik;?></td>
				<td><?= $row->nama;?></td>
				<td><?= $row->jekel;?></td>
				<td><?= $row->tempat_lahir;?>, <?= $row->tanggal_lahir;?></td>
				<td><?= $row->alamat;?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</body>
</html>

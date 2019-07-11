<html>
	<head>
		<title>Biodata</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.min.css">
	</head>
	<body>
		<center>
			<h4>Biodata saya</h4>
			<hr>
			<table class="table table-striped">
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?php echo $nama; ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><?php echo $alamat; ?></td>
				</tr>
				<tr>
					<td>Prodi</td>
					<td>:</td>
					<td><?php echo $prodi; ?></td>
				</tr>
				<tr>
					<td>Matakuliah</td>
					<td>:</td>
					<td><?php echo $matakuliah; ?></td>
				</tr>
			</table>
		</center>
	</body>
</html>
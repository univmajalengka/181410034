<!DOCTYPE html>
<html>
<head>
	<title>UPDATE DATA HOTEL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="body">
	<div class="judul">		
		<h1>MARKETING HOTEL FAUZAN</h1>
		<h2>=========================================</h2>
		<h3>adzkiaaup@gmail.com</h3>
	</div>
	
	<br/>
	<div class="btn">
	<button><a href="index.php">Lihat Semua Data</a></button>
</div>

	<br/>
	<h1 align="center">EDIT DATA USER</h1>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM user WHERE id='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table border=1 cellpadding=3 cellspacing=3
            align=center class="table">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>	
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</div>
</div>
</body>
</html>
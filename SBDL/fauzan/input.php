<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH DATA HOTEL</title>
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
	<h1 align="center"> INPUT DATA BARU</h1>
	<form action="input-aksi.php" method="post">		
		<table  border=1 cellpadding=3 cellspacing=3
            align=center class="table">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>					
			</tr>	
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</div>
</body>
</html>
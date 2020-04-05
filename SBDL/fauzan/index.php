<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<style type="text/css">
		.body{
				background-image: url('images/bg.jpg');
				width: 100%;
				height: 800px;
			}
		.nav {
			margin: auto;
			text-align: center;
			width: 100%;
			font-family: arial;
		}
		.btn {
	padding: 10px 24px;
	border: 2px;
	font-weight: 700;
	text-align: center;
	text-transform: uppercase;
	text-align: center;
}
		a {
			color: black;
		}
		h1 {
			color: white;
		}
		h3 {
			color: white;
		}
	</style>
	<div class="body"><link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>MARKETING HOTEL FAUZAN</h1>
		<h2>=========================================</h2>
		<h3>adzkiaaup@gmail.com</h3>
	</div>
	<br/>

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<div class="btn">
	<button><a href="input.php"> Tambah Data Baru</a>
</button></div>
	<h1 align="center">DATA USER</h1>
	<table  border=1 cellpadding=3 cellspacing=3
            align=center class="table">
		<tr>
			<th align="center">No</th>
			<th align="center">Nama</th>
			<th align="center">Alamat</th>
			<th align="center">Pekerjaan</th>
			<th align="center">Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM user")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['pekerjaan']; ?></td>
			<td>
				<div class="btn">
				<button><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> </button>
				<button><a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a></button>		
				</div>			
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Custom Login Form Styling</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="js/modernizr.custom.63321.js"></script>
    <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    <style> 
      @import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
      body {
        background: #7f9b4e url(images/bg.jpg) no-repeat center top;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
      }
      .container > header h1,
      .container > header h2 {
        color: #fff;
        text-shadow: 0 1px 1px rgba(0,0,0,0.7);
      }
    </style>
    <div class="body"><link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">
    
      <!-- Codrops top bar -->
          
      <header>
		<h1>MARKETING HOTEL FAUZAN</h1>
		<h2>adzkiaaup@gmail.com</h2>
	</div>
</header>
	
	<br/>
	<div class="btn">
	<button><a href="index.php">Lihat Semua Data</a></button>
</div>

	<br/>
	

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM pengguna WHERE id='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table class="container">
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
				<td><input type="submit" value="Simpan"></td>
									
			</tr>
							
		</table>

	</form>

	<?php } ?>
</div>
</div>
</body>
</html>
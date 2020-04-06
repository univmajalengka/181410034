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
        
        
      </header>
      <h2 align="center">DATA USER</h2>
    <br/>
  <div class="btn">
  <button><a href="input.php"> Tambah Data Baru</a>
</button></div>
  
  <table class="container">
    <tr>
      <th align="center">No</th>
      <th align="center">Nama</th>
      <th align="center">Alamat</th>
      <th align="center">Pekerjaan</th>
      <th align="center">Opsi</th>    
    </tr>
    <?php 
    include "koneksi.php";
    $query_mysql = mysql_query("SELECT * FROM pengguna")or die(mysql_error());
    $nomor = 1;
    while($data = mysql_fetch_array($query_mysql)){
    ?>
    <tr>
      <td><?php echo $nomor++; ?></td>
      <td><?php echo $data['nama']; ?></td>
      <td><?php echo $data['alamat']; ?></td>
      <td><?php echo $data['pekerjaan']; ?></td>
      <td>
        
        <button><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> </button>
        <button><a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a></button>    
             
      </td>
    </tr>
    <?php } ?>
  </table>
</div>
</body>
</html>
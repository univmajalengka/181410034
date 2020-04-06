<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];

mysql_query("INSERT INTO pengguna VALUES('','$nama','$alamat','$pekerjaan')");

header("location:dashboard.php");
?>
<?php
	include 'koneksi.php';
	if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($koneksi, $_POST['username']);
	$password = mysqli_real_escape_string($koneksi, $_POST['password']);

	$query = "SELECT * FROM user WHERE username='$username'";
	$result = mysqli_query($koneksi, $query);
	
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			if (password_verify($password, $row['password'])) {
				session_start(); 
				$_SESSION["username"] = $username;
				$_SESSION['status'] = "login";
				header("location:index.php");
			}
		}
	}else{
		echo "<script>
			alert('Login Gagal');
			window.location = 'login.php';
		</script>";
	}
}
 ?>
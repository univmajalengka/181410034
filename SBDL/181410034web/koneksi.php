<?php
	// (nama server, user, password, database)
	$mysqli = new mysqli("192.168.1.66", "sbdlunma_181410034", "4qRmZdW$*zg9", "sbdlunma_1814100");
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>
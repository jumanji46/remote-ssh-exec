<?php

require "header.php";

if (isset($_POST['login-submit'])) {

	$server = $_POST['server'];
	$username = $_POST['uname'];
	$password = $_POST['pwd'];

	if (empty($username) || empty($password) || empty($server)) {
		// alert for empty field
		header("Location: index.php?error=emptyfields");
		exit();
	}
	else {
		$connection = ssh2_connect($server, 22);
		ssh2_auth_password($connection, $username, $password);
		
		$stream = ssh2_exec($connection, (

			'users; service mysql status; service apache2 status; uptime;'
			
							));
		stream_set_blocking($stream, true);

		$output = stream_get_contents($stream);

		echo $output;
	}
}

require "footer.php";

?>
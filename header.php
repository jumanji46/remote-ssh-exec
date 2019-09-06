<!DOCTYPE html>
<html>
<head>
<meta name="description" content="checklist project">
<meta name=viewport content="width=device-witdh", initial-scale="1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="icon" type="image/x-icon" href="https://s.gravatar.com/avatar/f02dcc69b8011acd8d63065dd13978aa?s=80">
<title>
	checklist
</title>
</head>
<body>
	<header>
		<nav class="navbar sticky-top card-header">
					<?php 
							echo'<form action="run.php" method="post">
							<input type="text" name="server" placeholder="server address">
							<input type="text" name="uname" placeholder="username">
							<input type="password" name="pwd" placeholder="password">
							<button type="submit" name="run-submit">Run</button>
							</form>';
					?>
		</nav>
	</header>
</body>
</html>


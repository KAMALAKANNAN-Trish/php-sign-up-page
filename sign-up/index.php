<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
</head>
<body>
	<h3>Sign up</h3><br>
	<form action="includes/signup.inc.php" method="post">
		Username: <input type="text" name="username" placeholder="Username"><br>
		Password: <input type="password" name="pwd" placeholder="Password"><br>
		E-Mail: <input type="text" name="email" placeholder="E-Mail"><br>
		<button>Sign-up</button>
	</form>
	<?php 
	check_signup_errors();
	?>
</body>
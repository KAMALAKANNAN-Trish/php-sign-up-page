<?php

declare(strict_types=1); //prevents from more errors happening inside the code

/*
function signup_input() {
	if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])) {
		echo '<input type="text" name="username" placeholder="Username"> value="' . $_SESSION["signup_data"]["username"] . '"<br>';
	} else {
		echo '<input type="text" name="username" placeholder="Username"><br>';
	}
	
	echo 'Password: <input type="password" name="pwd" placeholder="Password"><br>';
	
	if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"]) && !isset($_SESSION["errors_signup"]["invalid_email"])) {
		echo '<input type="text" name="email" placeholder="E-Mail"> value="' . $_SESSION["signup_data"]["email"] . '"<br>';
	} else {
		echo '<input type="text" name="email" placeholder="E-Mail"><br>';
	}
}
*/

function check_signup_errors() {
	if (isset($_SESSION['errors_signup'])) {
		$errors = $_SESSION['errors_signup'];
		
		echo "<br>";
		foreach ($errors as $error) {
			echo '<p> class="form-error"</p>' . $error . '<p>';
		}
		unset($_SESSION['errors_signup']); //unset session variable
	} else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
		echo "<br>";
		echo '<p class="form-success">Signup success!</p>';
	}
}
<?php

session_start();

if ($_GET['action'] == "login") {
	
	$email = $_POST["email"];
	$password = $_POST["password"];
	//$firstName = $_POST["first_name"];
	//$lastName = $_POST["last_name"];
	
	$fileName = "data_customers.csv";
	
	$isLoggedIn = false;
	$fileName = "data_customers.csv";
	$lines = file($fileName);
	
	foreach ($lines as $row) {
		$userParts = explode("|", $row);
		
		if ($userParts[0] == $_POST["email"] && $userParts[1] == $_POST["password"]) {
				$_SESSION["email"] = $userParts[0];
				$_SESSION["firstName"] = $userParts[2];
				$_SESSION["is_user"] = 1;
				$isLoggedIn = true;
				break;
		}
	}
	
	if ($isLoggedIn) {
		echo "Thank you for loggin in.<br />";
		echo "See user registration data here: <a href='customers.php'>User Registration Data</a> ";
		
	} else {
		echo "Invalid e-mail address and/or password.<br /><br />";
		echo "<a href='register.php'>Register</a> an account or ";
		echo "<a href='login.php'>try loggin in</a> again.";
	}
	
} elseif($_GET["action"] === "logout") {
		session_destroy();
		echo "Thank you for logging out.<br /><br />";
		echo "<a href='login.php'>Log back into</a> your account";
  } else {
		echo "Invalid e-mail address and/or password.<br />Please login or register.<br />";
		echo "<a href='register.php'>Register</a> an account.";
		echo "<a href='login.php'>Log into</a> your account.";
		
	}
  
?>

<?php

session_start();

if($_GET['action'] == "register") {
	
	$firstName = $_POST["first_name"];
	$lastName = $_POST["last_name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$passwordAgain = $_POST["password_again"];
	$phone = $_POST["phone"];
	$birthday = $_POST["birthday"];
	$ccNumber = $_POST["cc_number"];
	$ccExpirationMonth = $_POST["cc_expiration_month"];
	$ccExpirationYear = $_POST["cc_expiration_year"];
	
	//check for blanks
	if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($passwordAgain) || empty($phone) || empty($birthday) || empty($ccNumber) || empty($ccExpirationMonth) || empty($ccExpirationMonth)){
		die ("Please fill out all input fields.<br><a href='register.php'>Go back</a>");	
	}
	
	//check test input
	if (!is_string($firstName) || !is_string($lastName)) {
		die ("Please enter a valid name.<br><a href='register.php'>Go back</a>");
	}
	
	//phone number check
	   if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $phone)) {
	   	die ("Please enter a phone number formated like: 000-000-0000.<br><a href='register.php'>Go back</a>");
	   }	   
	   
	//CC number check
		// function luhn_check($number) {
// 
		  // // Strip any non-digits (useful for credit card numbers with spaces and hyphens)
		  // $number=preg_replace('/\D/', '', $number);
// 		
		  // // Set the string length and parity
		  // $number_length=strlen($number);
		  // $parity=$number_length % 2;
// 		
		  // // Loop through each digit and do the maths
		  // $total=0;
		  // for ($i=0; $i<$number_length; $i++) {
		    // $digit=$number[$i];
		    // // Multiply alternate digits by two
		    // if ($i % 2 == $parity) {
		      // $digit*=2;
		      // // If the sum is two digits, add them together (in effect)
		      // if ($digit > 9) {
		        // $digit-=9;
		      // }
		    // }
		    // // Total up the digits
		    // $total+=$digit;
		  // }
// 		
		  // // If the total mod 10 equals 0, the number is valid
		  // return ($total % 10 == 0) ? TRUE : FALSE;
// 		
		// }
	
		//if (!luhn_check($ccNumber)){
	   if(!preg_match('/^[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}$/', $ccNumber)) {
	   	die ("Please enter a valid credit card number formated like: 0000-0000-0000-0000.<br><a href='register.php'>Go back</a>");
	   }
	   
	//check email
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	    die("Please enter a valid e-mail address.<br><a href='register.php'>Go back</a>");	
	}
		
	$fileName = "data_customers.csv";
	$textToWrite = $email."|".$password."|".$firstName."|".$lastName."|".$phone."|".$birthday."|".$ccNumber."|".$ccExpirationMonth."|".$ccExpirationYear."\n";
	
	//Open and write to the file
	$handler = fopen($fileName, "a+");
	fwrite($handler, $textToWrite);
	fclose($handler);
	
	echo "Thanks for registering, $firstName.<br><br>";
	echo "<a href='login.php'>Log in</a> to your account.";
} 

?>

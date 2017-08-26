<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>You Cannot Pass - Register</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body style="margin: 2em;">
	
	<b>Register </b>below to gain access to ALL my personal info:
	<br><br>
		
	<form action="handle_register.php?action=register" method="post">
		<label>First Name: </label>
		<input type="text" name="first_name" /><br>
		
		<label>Last Name: </label>
		<input type="text" name="last_name" /><br>
		
		<label>E-Mail Address: </label>
		<input type="email" name="email" /><br>
		
		<label>Password: </label>
		<input type="password" name="password"/><br>
		
		<label>Password (again): </label>
		<input type="password" name="password_again"/><br>
		
		<label>Phone Number: </label>
		<input type="tel" name="phone" /><br>
		
		<label>Date of Birth: </label>
		<input type="date" name="birthday" placeholder=""/><br>
		
		<label>Credit Card Number: </label>
		<input type="text" name="cc_number" /><br>
		
		<label>Credit Card Expiration Date: </label>
		<select name="cc_expiration_month">
		  <option value="">--</option>
		  <option value="january">01</option>
		  <option value="february">02</option>
		  <option value="march">03</option>
		  <option value="april">04</option>
		  <option value="may">05</option>
		  <option value="june">06</option>
		  <option value="july">07</option>
		  <option value="august">08</option>
		  <option value="september">09</option>
		  <option value="october">10</option>
		  <option value="november">11</option>
		  <option value="december">12</option>
		</select>
		
		<select name="cc_expiration_year">
			
		  <option value="">--</option>
		  <option value="2017">2017</option>
		  <option value="2018">2018</option>
		  <option value="2019">2019</option>
		  <option value="2020">2020</option>
		  <option value="2021">2021</option>
		  <option value="2022">2022</option>
		  <option value="2023">2023</option>

		</select>
		<br>
		<button type="submit" value="save">Save</button>
	</form>
	<br>
	<a href='login.php'>Log in</a> to your account.
	
</body>
</html>
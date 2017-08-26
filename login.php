<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>You Cannot Pass - Login</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

</head>

<body style="margin: 2em;">
	
	<b>Login </b>to view your account info:
	<br><br>
		
	<form action="handle_login.php?action=login" method="post">
		<label>E-Mail Address: </label>
		<input type="text" name="email"/><br>
		<label>Password: </label>
		<input type="password" name="password"/><br>
		<br>
		<button type="submit" value="login">Login</button>
	</form>
	<br>
	
	<a href='register.php'>Register</a> first for an account.
	
</body>
</html>
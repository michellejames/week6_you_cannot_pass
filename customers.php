<?php 

session_start();

function isLoggedIn(){
	return isset($_SESSION["is_user"]);
}

if(isLoggedIn()) {
	
	echo "User Registration Data: <br /><br />";
	echo "<html><body><table>\n\n";
	$f = fopen("data_customers.csv", "r");
	while (($line = fgetcsv($f)) !== false) {
	        echo "<tr>";
	        foreach ($line as $cell) {
	                echo "<td>" . htmlspecialchars($cell) . "</td>";
	        }
	        echo "</tr>\n";
	}
	fclose($f);
	echo "\n</table></body></html>";
	
	echo "<br /><br /><a href='login.php'>Back to Login</a> ";
	echo "<a href='login.php?action=logout'>Logout</a>";
	session_destroy();
	
	
} else {
	echo "You need to be logged in to see this content.<br />";	
	echo "<a href='login.php'>Log in</a> to your account.";
}

?>



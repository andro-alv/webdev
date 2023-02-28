<!DOCTYPE HTML>  
<html lang="en">
<head>
	<meta charset="utf-8">

	<title></title>




</head>

<body>
	<?php
	if($_GET['userEmpty']){
		print "<strong> The username is empty. Please fill in the submission box.</strong>";
	}
	if($_GET['pwEmpty']){
		print "<strong> The password is empty. Please fill in the submission box.</strong>";
	}

	if($_GET['incorrectInput']){
		print "<strong> The input for username and password are incorrect. Please try again.</strong>";
	}

	if($_GET['correct']){
		print "<strong> YOU ARE LOGGED IN WELCOME!</strong>";

	}

	?>
	<form action = "micro06_process.php" method="POST">
		Username: <input type="text" name="username"><br>
		Password: <input type="text" name="password"><br>
		<input type="submit">

	</form>
</body>
</html>

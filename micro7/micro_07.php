<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title></title>
	<style >
	.hidden{
		display: none;
	}
	</style>




</head>

<body>
	<form action = "micro07_process.php" method="POST" id="login">
		Username: <input type="text" name="username"><br>
		Password: <input type="text" name="password"><br>
		<input type="submit">

	</form>


	<?php
	if ($_COOKIE["loggedin"] == "yes"){?>
		<div> You are already logged in!</div>
		<?php
		echo "<script>";
		echo "document.getElementById('login').classList.add('hidden');";
		echo "</script>";

	}
	else{
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

	}


	?>

</body>
</html>

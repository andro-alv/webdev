<?php  
$username = $_POST ["username"];
$password = $_POST["password"];

if (empty($username)) {
	header('Location: micro_06.php?userEmpty=empty');
	exit();
}
if (empty($password)) {
	header("Location: micro_06.php?pwEmpty=empty");
	exit();
}
if (($username != "pikachu") && ($password !="pokemon")) {
	header("Location: micro_06.php?incorrectInput=empty");
	exit();
}
if(($username == "pikachu") && ($password == "pokemon")){
	header("Location: micro_06.php?correct=empty");
	exit();
}
?>
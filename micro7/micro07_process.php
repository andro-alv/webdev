<?php  
$username = $_POST ["username"];
$password = $_POST["password"];
$path = "/Users/andresalvarez/Documents/MAMP/micro7/data";

$filename = $path."/loginattempt.txt";

if (empty($username)) {
	header('Location: micro_07.php?userEmpty=empty');
	file_put_contents($filename, "missing"."\n", FILE_APPEND);
	exit();
}
if (empty($password)) {
	header("Location: micro_07.php?pwEmpty=empty");
	file_put_contents($filename, "missing"."\n", FILE_APPEND);
	exit();
}
if (($username != "pikachu") && ($password !="pokemon")) {
	header("Location: micro_07.php?incorrectInput=empty");
	file_put_contents($filename, "unsuccessful"."\n", FILE_APPEND);
	exit();
}
if(($username == "pikachu") && ($password == "pokemon")){
	header("Location: micro_07.php?correct=empty");
	file_put_contents($filename, "successful"."\n", FILE_APPEND);
	setcookie("loggedin","yes");
	exit();
}
?>
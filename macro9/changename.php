<?php
$name = $_POST["update"];
setcookie('name', "", time()-3600);

setcookie('name', $name);
exit();
 ?>

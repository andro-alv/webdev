<?php
// destory the cookies
setcookie('loggedin', "", time()-3600);

setcookie('username', "", time()-3600);


// send back to the admin form
header('Location: admin.php?loggedout=true');
exit();
 ?>

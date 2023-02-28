<?php

  // grab the username & password
  $username = $_POST['username'];
  $password = $_POST['password'];

  if($username && $password){

    if($username == "Doctor" && $password == "Dalek"){
      // drop a cookie on the client computer
      setcookie('loggedin', 'yes');
      setcookie("username", "Doctor");

      // send them back to the form
      header('Location: admin.php');

      exit();
    }

    header('Location: admin.php?error=incorrect');
    exit();

  }
  else {
    // send them back to the form
    header('Location: admin.php?error=missinginfo');
    exit();
  }


 ?>

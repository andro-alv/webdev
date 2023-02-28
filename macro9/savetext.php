<?php

  include('config.php');

  // security audit - make sure the user is logged in before making changes!
  if ($_COOKIE['loggedin'] == 'yes') {
    // if they are logged in make changes to the text files
    $text = $_POST['badwords'];


    // put this into the text file
    file_put_contents($file_path.'/bannedwords.txt', $text);

    // send them back to the form
    header('Location: admin.php?confirmation=savedtext');
    exit();
  }
  else {
    // send them back to the admin page
    header('Location: admin.php?error=notloggedin');
    exit();
  }





 ?>

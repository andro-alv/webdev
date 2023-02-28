<?php

  // include the file path for the data folder
  include('config.php');

  // set up a variable to point to the correct filename in this folder
  $filename = $path.'/boxes.txt';

  // grab the incoming color value from the AJAX request
  $color = $_POST['color1'];

  // if we have a color go ahead and add it to our data file
  if ($color) {
    file_put_contents($filename, $color."\n", FILE_APPEND);
    print "success";
    exit();
  }
  else {
    print "missing_data";
    exit();
  }

 ?>

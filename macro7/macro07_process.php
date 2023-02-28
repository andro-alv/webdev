<?php

// grab the incoming data from the form
$food = $_GET['food'];
$job = $_GET["job"];
$hobby = $_GET ["hobby"];
$fear = $_GET["fear"];
$path = "/home/aa7452/public_html/webdev/macro_assign_07/data";
$filename = $path."/answers.txt";

// compute who earned the most points
$homer = 0;
$marge = 0;
$bart  = 0;
$lisa  = 0;

if (($food == "select_food")|| ($job == "select_job")|| ($hobby == "select_hobby")|| ($fear == "select_fear")) {
  print("Error! Did not completely fill out the quiz!");
  print("Return to previous page");
}
else{

  if ($food == "homer") {
    $homer += 1;
  }
  else if ($food == "marge") {
    $marge += 1;
  }
  else if ($food == "bart") {
    $bart += 1;
  }
  else {
    $lisa += 1;
  }

  if ($job == "homer") {
    $homer += 1;
  }
  else if ($job == "marge") {
    $marge += 1;
  }
  else if ($job == "bart") {
    $bart += 1;
  }
  else {
    $lisa += 1;
  }

  if ($hobby == "homer") {
    $homer += 1;
  }
  else if ($hobby == "marge") {
    $marge += 1;
  }
  else if ($hobby == "bart") {
    $bart += 1;
  }
  else {
    $lisa += 1;
  }

  if ($fear == "homer") {
    $homer += 1;
  }
  else if ($fear == "marge") {
    $marge += 1;
  }
  else if ($fear == "bart") {
    $bart += 1;
  }
  else {
    $fear += 1;
  }

  ?>
  <!doctype html>
  <html lang="en-us">
  <head>
    <title>Results</title>
    <style>
    body {
      font-family: -apple-system, BlinkMacSystemFont, sans-serif;
      background-color:#DD517F;
    }
    img {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    </style>
  </head>
  <body>


    <?php

    if ($homer > $marge && $homer > $bart && $homer > $lisa) {
      $img = 'assignment07_images/Homer.png';
      file_put_contents($filename, "homer"."\n", FILE_APPEND);
      setcookie("answered", "yes");
      setcookie("result", "homer");
    }
    else if ($marge > $homer && $marge > $bart && $marge > $list) {
      $img = 'assignment07_images/Marge.png';
      file_put_contents($filename, "marge"."\n", FILE_APPEND);
      setcookie("answered", "yes");
      setcookie("result", "marge");

    }
    else if ($bart > $homer && $bart > $marge && $bart > $list) {
      $img = 'assignment07_images/Bart.png';
      file_put_contents($filename, "bart"."\n", FILE_APPEND);
      setcookie("result", "bart");
      setcookie("answered", "yes");

    }
    else {
      $img = 'assignment07_images/Lisa.png';
      file_put_contents($filename, "lisa"."\n", FILE_APPEND);
      setcookie("result", "lisa");
      setcookie("answered", "yes");

    }
    ?>
    <h1>Results</h1>
    <?php
    print "<img src=\"$img\">";
    ?>
    <hr>
    <p><a href="https://i6.cims.nyu.edu/~aa7452/webdev/macro_assign_07/macro07.php">Go Back</a></p>
  </body>
  </html>
  <?php

}
?>

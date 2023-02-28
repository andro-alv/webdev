<?php
  include('config.php');
  $text = $_POST['message'];
  $name = $_POST["nickname"];

  $regex = '/[^a-zA-Z0-9!@#$%^&*()"?.,]+/';
  $text = preg_replace($regex, "", $text);
  if(strlen($text) > 0){
    $data_to_store = $name.": ".$text."\n";
    setcookie("name", $name);
    $data = file_get_contents($file_path.'/bannedwords.txt');
    $words = explode(" ", $data);
    $count = 0;
    foreach ($words as $v) {

      if (strpos($text, $v)!== false){
        $count++;

      }

    }
    if($count >0 ){
      echo "Banned word detected!";
    }
    else{
      // save to a file
      file_put_contents($file_path.'/messages.txt', $data_to_store, FILE_APPEND);
      $t = time();
      $add = $_SERVER['REMOTE_ADDR'];
      file_put_contents($file_path.'/adminlog.txt', $t.",".$name.",".$add."\n", FILE_APPEND);
    }




    exit();
  }
  else{
    echo "<script>";
		echo "alert('Too short!')";
		echo "</script>";
    exit();
  }

  exit();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Results</title>
    <style>
    body {
      font-family: -apple-system, BlinkMacSystemFont, sans-serif;
      background-color: #E68E36;
    }
    </style>
  </head>
  <body>
    <h1>Simpsons Quiz Results</h1>
    <hr>
    <?php
    $counter = 0;
    $lisa_count = 0;
    $bart_count = 0;
    $marge_count = 0;
    $homer_count = 0;
    $path = "/home/aa7452/public_html/webdev/macro_assign_07/data";
    $filename = $path."/answers.txt";
    $content = file_get_contents($filename);
    $lines = explode("\n", $content);
    foreach ($lines as $word) {
      $counter++;
      if($word == "homer"){
        $homer_count ++;
      }
      elseif ($word == "marge") {
        $marge_count++;
      }
      elseif($word == "bart"){
        $bart_count ++;

      }
      elseif ($word == "lisa"){
        $lisa_count++;
      }
      else{
        $random_count =0;
      }

    }
    $lisa_percentage = ($lisa_count/$counter)*100;
    $bart_percentage = ($bart_count/$counter)*100;
    $marge_percentage = ($marge_count/$counter)*100;
    $homer_percentage = ($homer_count/$counter)*100;
    $lisa_style = " width: ".$lisa_percentage. "%; height: 50px; background-color: red;margin: 20px;";
    $bart_style = " width: ".$bart_percentage. "%; height: 50px; background-color: yellow;margin: 20px";
    $marge_style = " width: ".$marge_percentage. "%; height: 50px;background-color: green;margin: 20px";
    $homer_style = " width: ".$homer_percentage. "%; height: 50px;background-color: blue;margin: 20px";

    print("<strong>You have taken this quiz ".$counter." times.</strong>");

     ?>
     <div style="<?php echo $lisa_style; ?>">Lisa <?php echo $lisa_percentage; ?> %</div>
     <div style="<?php echo $bart_style; ?>">Bart <?php echo $bart_percentage; ?> %</div>
     <div style="<?php echo $marge_style; ?>">Marge <?php echo $marge_percentage; ?> %</div>
     <div style="<?php echo $homer_style; ?>">Homer <?php echo $homer_percentage; ?> %</div>
     <p><a href="https://i6.cims.nyu.edu/~aa7452/webdev/macro_assign_07/macro07.php">Go Back</a></p>

  </body>
</html>

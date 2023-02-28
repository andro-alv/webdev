<?php
// before we load the page we need to load in our 'config.php' file
// this file contains PHP variables that our page will need to access,
// such as the file path of the 'data' folder
include('config.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id "content">

      <?php
      if($_COOKIE['loggedin'] == 'yes'){

        print "<p><a href=\"logout.php\">Logout</a></p>";
        print "<p><a href=\"admin_report.php\">Admin Report</a></p>";

        $bannedwords = file_get_contents($file_path.'/bannedwords.txt');
        ?>

        <form method="post" action="savetext.php">
          Banned Words:
          <br><br>
          <textarea name="badwords"><?php print $bannedwords; ?></textarea>
          <br> <br>
          <input type="submit"><br>
        </form>

        <p><a href="index.php">Home</a></p>


        <?php
      }
      else{
        ?>

        <form method="post" action="login.php">
          Username:
          <input type="text" name="username"><br>
          Password:
          <input type="text" name="password">
          <input type="submit">
        </form>
        <br>
        <p><a href="index.php">Home</a></p>

        <?php
      }
       ?>

    </div>

  </body>
</html>

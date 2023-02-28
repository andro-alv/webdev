
<?php
  include('config.php');
  if($_COOKIE['loggedin']=="yes"){
    ?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title></title>
      </head>
      <body>
        <table style = "width:100%">
          <tr>
            <th>Time</th>
            <th>Username</th>
            <th>IP Address</th>
          </tr>

          <?php
          $data = file_get_contents($file_path.'/adminlog.txt');
          $logInfo = explode("\n",$data);
          foreach ($logInfo as $v) {
            $line = explode(",", $v);
            $date = date('Y-m-d H:i:s', $line[0]);
            echo "<tr>";
            echo "<td>".$date."</td>";
            echo "<td>".$line[1]."</td>";
            echo "<td>".$line[2]."</td>";
            echo "</tr>";

          }
          exit();
        }
        else{
          header('Location: admin.php');
          exit();
        }

      ?>

        </table>

      </body>
    </html>

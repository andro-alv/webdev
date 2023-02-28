<!doctype html>
<html>

<head>
  <title>Assignment 07</title>
  <style>
  body {
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    background-color: #556DC8;
  }
  img {
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
  </style>
</head>

<body>
  <h1>Which Simpsons character am I?</h1>
  <hr>
  <?php
  if($_COOKIE["answered"]!= "yes"){?>

    <form action="macro07_process.php" method="GET">

      <div>
        What's your ideal job?
        <select name = "job">
          <option value = "select_job" selected >Select a job </option>
          <option value = "homer"> Working at a bakery</option>
          <option value = "marge"> French tutor </option>
          <option value = "bart">Prank phone call specialist </option>
          <option value = "lisa"> College professor </option>
        </select>
      </div>
      <div>  </div>
      <div>
        What is your favorite food?
        <select name="food">
          <option value="select_food" selected>Select a food</option>
          <option value="homer">Donuts</option>
          <option value="marge">Apple Pie</option>
          <option value="bart">Krusty Flakes</option>
          <option value="lisa">Anything organic and locally sourced</option>
        </select>
      </div>

      <div>
        What is your favorite hobby?
        <select name = "hobby">
          <option value = "select_hobby" selected>Select a hobby </option>
          <option value = "homer"> Watching TV</option>
          <option value = "marge"> Knitting </option>
          <option value = "bart">Skateboarding </option>
          <option value = "lisa"> Reading </option>
        </select>
      </div>
      <div>
        What is your biggest fear?
        <select name = "fear">
          <option value = "select_fear" selected>Select a fear</option>
          <option value = "homer"> Sock puppets</option>
          <option value = "marge"> Flying </option>
          <option value = "bart">I'm fearless man </option>
          <option value = "lisa"> Getting anything below an A in school </option>
        </select>
      </div>




      <button>What character am I?</button>

    </form>

    <?php
  }
  else{
    ?>
    <h2> Your Previous result!</h2>
    <?php
    if($_COOKIE["result"]=="homer"){
      print('<img src = "assignment07_images/Homer.png">');
      print("<br>");
      print("<strong>Homer!</strong>");

    }
    else if($_COOKIE["result"]=="marge"){
      print('<img src= "assignment07_images/Marge.png">');
      print("<br>");
      print("<strong>Marge!</strong>");
    }
    else if($_COOKIE["result"]=="bart"){
      print('<img src= "assignment07_images/Bart.png">');
      print("<br>");
      print("<strong>Bart!</strong>");
    }
    else{
      print('<img src= "assignment07_images/Lisa.png">');
      print("<br>");
      print("<strong>Lisa!</strong>");
    }
    ?>
    <br>
    <input type="button" value ="Try Again?" onclick= 'document.cookie = "answered=; expires=Thu, 01 Jan 2000 00:00:00 GMT"; window.location.reload();'/>
    <?php
  }
  ?>

  <hr>
  <p><a href="https://i6.cims.nyu.edu/~aa7452/webdev/macro_assign_07/results.php">Results</a></p>
</body>

</html>

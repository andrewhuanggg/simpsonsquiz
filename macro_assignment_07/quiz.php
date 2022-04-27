<!doctype html>
<html>
  <head>
    <title>Quiz!</title>
    <style type="text/css">
      body {
        font-family: Verdana, sans-serif;
      }
    </style>
  </head>
  <body>
    <h1>Quiz!</h1>
    <hr>
    <?php

      if ($_GET['error'] == 'notfilledin') {
        print "<p>Error! Fill in the form</p>";
      }

      if ($_COOKIE['choice']) {
        print "You are " . $_COOKIE['choice'] . "!";
        print "<br>";
        //print '<img src="assignment07_images/' .  $_COOKIE['choice'] . '.png">';
        print '<img style = "border:3px solid black;"" src="assignment07_images/' .  $_COOKIE['choice'] . '.png">';
        print "<br>";
        print '<a href=tryagain.php>Try again</a>';
        print "<br>";
      }
      else {

     ?>

    <form method="POST" action="save.php">
     <p>
        What's your ideal job?<br>
        <select name="job" id="job">
          <option value="">Select a job</option>
          <option value="homer">Working at a bakery</option>
          <option value="marge">French tutor</option>
          <option value="bart">Prank phone call specialist</option>
          <option value="lisa">College professor</option>
        </select>
      </p>

      <p>What is your favorite food?<br>
        <select name="food" id="food">
          <option value="">Select a food</option>
          <option value="homer">Donuts</option>
          <option value="marge">Apple pie</option>
          <option value="bart">Krusty Flakes</option>
          <option value="lisa">Anything organic and locally sourced</option>
        </select>
      </p>

      <p>What is your favorite hobby?<br>
        <select name="hobby" id="hobby">
          <option value="">Select a hobby</option>
          <option value="homer">Watching TV</option>
          <option value="marge">Knitting</option>
          <option value="bart">Skateboarding</option>
          <option value="lisa">Playing Saxophone</option>
        </select>
      </p>

      <p>What describes you best?<br>
        <select name="describe" id="describe">
          <option value="">Select a description</option>
          <option value="homer">Impulsive thinker</option>
          <option value="marge">Go with the flow</option>
          <option value="bart">Willing to try anything</option>
          <option value="lisa">A big sense of responsibility</option>
        </select>
      </p>

      <input type="submit">
    </form>

    <?php

        }

     ?>

    <br>
    <hr>

    <a href="results.php">Click here for results</a>

  </body>
</html>
<?php

  // open the file for reading so we can grab the data
  $filename = getcwd() . "/data/votes.txt";
  $data = file_get_contents($filename);

  // figure out the totals for each character
  $lines = explode("\n", $data);

  $homer = 0;
  $marge = 0;
  $bart = 0;
  $lisa = 0;
  
  for ($i = 0; $i < sizeof($lines); $i++) {
    if ($lines[$i] == "Homer") {
      $homer++;
    }
    else if ($lines[$i] == "Marge") {
      $marge++;
    }
    else if ($lines[$i] == "Lisa") {
      $lisa++;
    }
    else if ($lines[$i] == "Bart") {
      $bart++;
    }
  }
  $total = $homer + $marge + $bart + $lisa;
  $homerPercent = intval(($homer/$total) * 100);
  $margePercent = intval(($marge/$total) * 100);
  $bartPercent = intval(($bart/$total) * 100);
  $lisaPercent = intval(($lisa/$total) * 100);

  //print "$homer $marge $bart $lisa";
  //print "<br>";
  print "<h1 style = 'font-family: Verdana, sans-serif;'>Simpsons Quiz Results</h1>";
  print "<hr>";
  print "<p style = 'font-weight:600; font-family: Verdana, sans-serif;'>In total there have been {$total} submissions</p>";
  print "<br>";

  // display actual results as a bar chart 
  //'background-color:lightblue; width:100px; height:100px;'

  //homer
  if ($homer == 0){
     print "<div style = 'font-weight:400; font-family: Verdana, sans-serif; background-color:lightblue; width:10px; height:50px; float:left;''>Homer {$homerPercent}%</div>"; 
  } 
  for($i=0; $i < $homer; $i++){
    if($i==0){
      
      print "<div style = 'font-weight:400; font-family: Verdana, sans-serif; background-color:lightblue; width:100px; height:50px; float:left;''>Homer {$homerPercent}%</div>";
    }
    else{
      print "<div style = 'background-color:lightblue; width:100px; height:50px; float:left;''></div>";
    }
    
  }
  print"<br style = 'clear:both;'>";


  //marge
  if ($marge == 0){
    print "<div style = 'font-weight:400; font-family: Verdana, sans-serif; background-color:yellow; width:10px; height:50px; float:left;''>Marge {$margePercent}%</div>";
  } 
  for($i=0; $i < $marge; $i++){
    
    if($i==0){
      
      print "<div style = 'font-weight:400; font-family: Verdana, sans-serif; background-color:yellow; width:100px; height:50px; float:left;''>Marge {$margePercent}%</div>";
    }
    else{
     print "<div style = 'background-color:yellow; width:100px; height:50px; float:left;''></div>"; 
    }
    
  }

  print"<br style = 'clear:both;'>";

  //bart
  if ($bart == 0){
    
    print "<div style = 'font-weight:400; font-family: Verdana, sans-serif; background-color:green; width:10px; height:50px; float:left;''>Bart {$bartPercent}%</div>";
  }
  for($i=0; $i < $bart; $i++){
    if($i==0){
      
      print "<div style = 'font-weight:400; font-family: Verdana, sans-serif; background-color:green; width:100px; height:50px; float:left;''>Bart {$bartPercent}%</div>";
    }
    else{
      print "<div style = 'background-color:green; width:100px; height:50px; float:left;''></div>";
    }
    
  }
  print"<br style = 'clear:both;'>";

  //lisa 

  if ($lisa == 0){
      print "<div style = 'font-weight:400; font-family: Verdana, sans-serif; background-color:pink; width:10px; height:50px; float:left;''>Lisa {$lisaPercent}%</div>";  
  }

  for($i=0; $i < $lisa; $i++){
    if($i==0){
      
      print "<div style = 'font-weight:400; font-family: Verdana, sans-serif; background-color:pink; width:100px; height:50px; float:left;''>Lisa {$lisaPercent}%</div>";
    }
    else{
      print "<div style = 'background-color:pink; width:100px; height:50px; float:left;''></div>";
    }
    
  }
  print "<br style = 'clear:both;'>";
  print "<hr>";
  print "<a style = 'font-family: Verdana, sans-serif'; href = 'quiz.php'>Back to quiz</a>";
 ?>




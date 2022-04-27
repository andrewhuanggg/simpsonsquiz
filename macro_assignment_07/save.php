<?php

  // grab the incoming data
  $job = $_POST['job'];
  $food = $_POST['food'];
  $hobby = $_POST['hobby'];
  $describe = $_POST['describe'];

  // make sure the data is valid
  if (strlen($job) == 0 || strlen($food) == 0) {
    header('Location: quiz.php?error=notfilledin');
    exit();
  }

  // figure out which character they are
  $homer = 0;
  $bart = 0;
  $marge = 0;
  $lisa = 0;

  //Quiz Question 1
  if ($job == 'homer') {
    $homer++;
  }
  else if ($job == 'bart') {
    $bart++;
  }
  else if ($job == 'marge') {
    $marge++;
  }
  else if ($job == 'lisa') {
    $lisa++;
  }

  //Quiz Question 2
  if ($food == 'homer') {
    $homer++;
  }
  else if ($food == 'bart') {
    $bart++;
  }
  else if ($food == 'marge') {
    $marge++;
  }
  else if ($food == 'lisa') {
    $lisa++;
  }

  //Quiz Question 3

  if ($hobby == 'homer') {
    $homer++;
  }
  else if ($hobby == 'bart') {
    $bart++;
  }
  else if ($hobby == 'marge') {
    $marge++;
  }
  else if ($hobby == 'lisa') {
    $lisa++;
  }

  //Quiz Question 4

  if ($describe == 'homer') {
    $homer++;
  }
  else if ($describe == 'bart') {
    $bart++;
  }
  else if ($describe == 'marge') {
    $marge++;
  }
  else if ($describe == 'lisa') {
    $lisa++;
  }
  
  if ($homer >= $bart && $homer >= $marge && $homer >= $lisa) {
    $choice = "Homer";
  }
  else if ($bart >= $homer && $bart >= $marge && $bart >= $lisa) {
    $choice = "Bart";
  }
  else if ($lisa >= $homer && $lisa >= $marge && $lisa >= $bart){
    $choice = "Lisa";
  }
  else {
    $choice = "Marge";
  }

  // if valid, save into a file for later use
  $filename = getcwd() . "/data/votes.txt";
  $data = "$choice\n";
  file_put_contents($filename, $data, FILE_APPEND);

  // drop a cookie on the client's computer to remember that
  // they filled out the form
  setcookie('choice', $choice);

  // send them back to the quiz
  header("Location: quiz.php");
  exit();
 ?>

<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav ['index.php'] = 'Home';
$nav ['about.php'] = 'About';
$nav ['daily.php'] = 'Daily';
$nav ['project.php'] = 'Project';
$nav ['contact.php'] = 'Contact';
$nav ['gallery.php'] = 'Gallery';

switch(THIS_PAGE) {
case 'index.php':
  $title = 'Home of our IT261 Website';
  $body = 'home';
  $headline = 'Welcome to our Home page of our IT 261 Website!';
  break;
  case 'about.php':
  $title = 'About page of our IT261 Website';
  $body = 'about inner';
  $headline = 'Welcome to our About page of our IT 261 Website!';
  break;
  case 'daily.php':
  $title = 'Daily page of our IT261 Website';
  $body = 'daily inner';
  $headline = 'Welcome to our Daily page where our Homework 3 switch will display!';
  break;
  case 'project.php':
  $title = 'Project page page of our IT261 Website';
  $body = 'contact inner';
  $headline = 'Welcome to our Contact page of our IT 261 Website!';
  break;
  case 'contact.php':
    $title = 'Contact page of our IT261 Website';
    $body = 'contact inner';
    $headline = 'Welcome to our Contact page of our IT 261 Website!';
    break;
  case 'gallery.php':
  $title = 'Gallery page of our IT261 Website';
  $body = 'gallery inner';
  $headline = 'Welcome to our Contact page of our IT 261 Website!';
  break;


}

if(isset($_GET['today'])) {
$today = $_GET['today'];
} else {
$today = date('l');


}



?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link href="css/styles.css" type="text/css" rel="stylesheet">
<title> <?php echo $title; ?></title>

</head>

<body class="<?php echo $body; ?>">
    <header>
        <div class="header-inner">
        <a href="index.html">
            <img id="logo" src="images/logo.png" alt="logo">
    </a>
    <nav>
      <!-- <ul>
<li><a href="">Home</a></li>
<li><a href="">About</a></li>
<li><a href="">Daily</a></li>
<li><a href="">Project</a></li>
<li><a href="">Contact</a></li>
<li><a href="">Gallery</a></li>

      </ul>   -->

    <ul>
      <?php
      foreach($nav as $key => $value) {
        if(THIS_PAGE ==$key) {
          echo '
          <li><a class="current" href="'.$key.'">'.$value.'</a></li>
          ';
        } else {
      echo '
      <li><a href="'.$key.'">'.$value.'</a></li>
      ';
      }
      
    }

?>

    </ul>
    </nav>
    </div> <!--end header inner-->
    </header>
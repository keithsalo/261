<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav ['index.php'] = 'Home';
$nav ['about.php'] = 'About';
$nav ['daily.php'] = 'Daily';
$nav ['project.php'] = 'Project';
$nav ['contact.php'] = 'Contact';
$nav ['gallery.php'] = 'Gallery';

// create a function for our navigation, so the function is called out on our header.php page

function my_nav($nav) {
$my_return = '';
foreach($nav as $key => $value) {
if(THIS_PAGE == $key) {
$my_return .='<li><a href=" '.$key.' " class="current">'.$value.'</a></li>';
} else {
    $my_return .='<li><a href=" '.$key.' ">'.$value.'</a></li>';
} // end else
} // end foreach
return $my_return;
} //end function

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
// beginning if switch homework
if(isset($_GET['today'])) {
$today = $_GET['today'];
} else {
$today = date('l');
}

  //switch
    
  switch($today) {
    case 'Saturday' :
    $happy = '<h2>Saturday is Happy Hour Day at Mission Cantina from 4-6 and 10-midnight!</h2>';
    $pic = 'mission.jpg';
    $alt = 'Mission Cantina Restaurant';
    $content = 'Pan-Latin restaurant/bar with a candlelit rock wall offers happy hour & inventive late-night menus!';
    break;
    
    case 'Sunday' :
        $happy = '<h2>Sunday is Happy Hour Day at West 5 from 4-6pm!</h2>';
        $pic = 'west5.jpg';
        $alt = 'West 5 Bar';
        $content = 'West 5, a retro-chic-styled cocktail lounge and restaurant located at 4539 SW California Ave. SW in the bustling heart of West Seattle, has been in operation since 2003. Famous for its menu of comfort food and cocktail classics, West 5 is currently open for (limited) dine-in and convenient carry out and pick up in the West Seattle Junction.';
        break;
    
        case 'Monday' :
            $happy = '<h2>Monday is Happy Hour day at Mioposto from 4-6pm!!</h2>';
            $pic = 'mioposto.jpg';
            $alt = 'Mioposto Restaurant';
            $content = 'Open for outdoor and indoor dining, takeout, and delivery. Visit our locations page for hours. No reservations. Masks required! home. Located at 2139 California Ave SW.';
            break;
    
            case 'Tuesday' :
                $happy = '<h2>Tuesday is Happy Hour Day at Circa from 2:30-5pm!</h2>';
                $pic = 'circa.jpg';
                $alt = 'Circa Restaurant';
                $content = 'A popular grill and alehouse for 23 years, Circa is family owned and operated by Bill & Gretchen Evans. With 14 beers on tap, full cocktail menu and a great wine selection, Circa\'s eclectic and charming bar has something for everyone. And nightly specials abound!';
                break;
    
                case 'Wednesday' :
                    $happy = '<h2>Wednesday is Happy Hour Day at Arthur\'s from 2-6pm!!</h2>';
                    $pic = 'art.jpg';
                    $alt = 'Arthur\'s Restaurant';
                    $content = 'Cheerful, neighborhood fixture offering classic cafe dishes with an Australian bent & cocktails.';
                    break;
    
                    case 'Thursday' :
                        $happy = '<h2>Thursday is Happy Hour Day at Cactus!</h2>';
                        $pic = 'cactus.jpg';
                        $alt = 'Cactus Restaurant';
                        $content = 'Southwestern-Mexican cuisine & margaritas served up in a hip, colorful setting with ocean views.';
                        break;
    
                        case 'Friday' :
                            $happy = '<h2>Friday is Nook Day 4-6pm!!</h2>';
                            $pic = 'nook.jpg';
                            $alt = 'The Nook Bar';
                            $content = 'Check out Happy Hour at The Nook Friday from 5-7pm located at 2206 California Ave SW';
                            break;
    
    }
    
    // This is my form php start
    $first_name = '';
    $last_name = '';
    $year = '';
    $school = '';
    $comments = '';
    $privacy = '';
    $field = '';
    $email = '';
    
    $first_name_Err = '';
    $last_name_Err = '';
    $year_Err = '';
    $school_Err = '';
    $comments_Err = '';
    $privacy_Err = '';
    $field_Err = ''; 
    $email_Err = ''; 
    
    
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if(empty($_POST['first_name'])) {
    $first_name_Err = 'Please fill out your First Name';
    } else {
        $first_name = $_POST['first_name'];
    }
    
    if(empty($_POST['last_name'])) {
        $last_name_Err = 'Please fill out your Last Name';
        } else {
            $last_name = $_POST['last_name'];
    }
    
    if(empty($_POST['year'])) {
        $year_Err = 'Please check your year';
        } else {
            $year = $_POST['year'];
    }
    
    if(empty($_POST['school'])) {
        $school_Err = 'Please enter your school';
        } else {
            $school = $_POST['school'];
    }
    
    if(empty($_POST['field'])) {
        $field_Err = 'Please choose you field of study';
        } else {
            $field = $_POST['field'];
    }

    if(empty($_POST['email'])) {
      $email_Err = 'Fill out your email';
      } else {
          $email = $_POST['email'];
  }
    
    
    
    if(empty($_POST['privacy'])) {
        $privacy_Err = 'You MUST agree';
        } else {
            $privacy = $_POST['privacy'];
    }
    
    if(empty($_POST['comments'])) {
        $comments_Err = 'Please share your comments with us';
        } else {
            $comments = $_POST['comments'];
    }
    
    // if(empty($_POST['field'])) {  // if empty, type in your number
    //     $field_Err = 'Your field number please!';
    //     } elseif(array_key_exists('field', $_POST)){
    //     // if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['field']))
    //     if(unset($_POST['field']))
    //     { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    //     $field_Err = 'Invalid format!';
        
    //     } else{
    //     $field = $_POST['field'];
    //     }
        
    //     }
    
    
    //the logic is if post wines is not empty, then, 
    // we need to grab wines and display them just like we did in implode.php
    
    // function my_wines() {
    // $my_return = '';
    // if(!empty($_POST['wines'])) {
    // $my_return = implode(',', $_POST['wines'] );
    // }
    // return $my_return;
    
    // } // closes function
    
    
    
    if(isset(
    $_POST['first_name'],
    $_POST['last_name'],
    $_POST['school'],
    $_POST['year'],
    $_POST['email'],
    $_POST['comments'],
    $_POST['privacy'],
    $_POST['field']
    )) {
    
        $to = 'keithsalo@gmail.com';
        $subject = 'Test school,' .date('m/d/y');
        $body = '
        The first name is: '.$first_name.' '.PHP_EOL.'
        The last name is: '.$last_name.' '.PHP_EOL.'
        Email: '.$email.' '.PHP_EOL.'
        year: '.$year.' '.PHP_EOL.'
        school: '.$school.' '.PHP_EOL.'
        field: '.$field.' '.PHP_EOL.'
        Comments: '.$comments.' '.PHP_EOL.'
        ';
        
    
    $headers = array(
    'From'=> 'noreply@gmail.com',
    'Reply-to'=> ''.$email.''
    );
    
    mail($to, $subject, $body, $headers);
    header('Location: thx.php');
    
    }
    
    
    } // end if server request

    ?>
   

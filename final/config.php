<?php // our config file

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav ['index.php'] = 'Home';
$nav ['about.php'] = 'About';
$nav ['daily.php'] = 'Daily';
$nav ['hotels.php'] = 'Hotels';
$nav ['contact.php'] = 'Contact';


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
  $title = 'Home of my IT261 Final';
  $body = 'home';
  $headline = 'Welcome to my Home page!';
  break;
    case 'about.php':
  $title = 'About page of my IT261 Final';
  $body = 'about inner';
  $headline = 'Welcome to my About page!';
  break;
    case 'daily.php':
  $title = 'Daily page of my IT261 Final';
  $body = 'daily inner';
  $headline = 'Welcome to my Daily page!';
  break;
    case 'hotels.php':
  $title = 'Worst Hotels';
  $body = 'project inner';
  $headline = 'Welcome to my Worst Hotels page!';
  break;
    case 'contact.php':
    $title = 'Contact page of my IT261 Final';
    $body = 'contact inner';
    $headline = 'Welcome to my Contact page!';
  break;
    case 'gallery.php':
  $title = 'Gallery page of my IT261 Final';
  $body = 'gallery inner';
  $headline = 'Welcome to my Gallery page!';
  break;
    case 'hotels-view.php':
    $title = 'Hotel View Page';
    $body = 'hotel-view inner';
    $headline = 'Welcome to View Page!';
  break;
    case 'login.php':
  $title = 'Login Page';
  $body = 'login inner';
  $headline = 'Welcome to my Login Page!';
  break;
  case 'register.php':
    $title = 'Register Page';
    $body = 'register inner';
    $headline = 'Welcome to the register Page!';
    break;
    case 'thx.php':
        $title = 'Thank You';
        $body = 'thx inner';
        $headline = 'Thank you Page!';
        break;


}
// initialize/define our variables
 $first_name = '';
 $last_name = '';
 $email = '';
 $username = '';
 $password = '';
 $success = 'You have successfully logged on';
 $errors = array();

  // This is my form php start
  $first_name = '';
  $last_name = '';
  $city = '';
  $comments = '';
  $privacy = '';
  
  $email = '';
  
  $first_name_Err = '';
  $last_name_Err = '';
  $city_Err = '';
  $comments_Err = '';
  $privacy_Err = '';
   
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
  
  if(empty($_POST['hotel'])) {
      $year_Err = 'Please pick a hotel';
      } else {
          $year = $_POST['year'];
  }
  
  if(empty($_POST['city'])) {
      $city_Err = 'Please enter your city';
      } else {
          $city = $_POST['city'];
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
  $_POST['city'],
  $_POST['email'],
  $_POST['comments'],
  $_POST['privacy']
  
  )) {
  
      $to = 'keithsalo@gmail.com';
      $subject = 'city,' .date('m/d/y');
      $body = '
      The first name is: '.$first_name.' '.PHP_EOL.'
      The last name is: '.$last_name.' '.PHP_EOL.'
      Email: '.$email.' '.PHP_EOL.'
      city: '.$city.' '.PHP_EOL.'
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

  function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
    echo 'Error message: <b> '.$errorMsg.'</b>';
    die();
}  else {
    echo ' Houston, we have a problem!';
    die();
}
  
  
}

if(isset($_GET['today'])) {
    $today = $_GET['today'];
    } else {
    $today = date('l');
    }
    
      //switch
        
      switch($today) {
        case 'Saturday' :
        $hotel = '<h2>Saturday is Motel 6 day!</h2>';
        $pic = 'motel6.jpg';
        $alt = 'Motel 6 ';
        $content = 'This is the worst motel I have ever stayed in, EVER. The room was very poorly maintained, popcorn ceiling with sheet rock cracks, Bathroom ceiling peeling paint and water stained, dry rotted door frame on bathroom door, bath tub drain stopped up, multiple burn holes on bed spread, Door light burned out, Exit light burned out. Exterior courtyard unmaintained. We stayed there 4 nights and 2 of those our room was not made up AND someone had been in the room as the toilet had been used and not flushed, towels missing and not replaced. We bought an air freshener for the room as the smoke odor was offensive. -Review from Glendale California';
        break;
        
        case 'Sunday' :
            $hotel = '<h2>Sunday is time for Days Inn to shine! </h2>';
            $pic = 'dinn.jpg';
            $alt = 'Days Inn';
            $content = 'We arrived at the Days Inn in Brampton Ontario and booked a room. Upon entering I saw that there was dried coffee dripping down the bathroom door so we requested a new room as this one didn\'t seem clean. Before even taking our shoes off in the 2nd room, we noticed there was dried food on top of the night stand. So we went to reception and asked for a refund since they were obviously not cleaning the rooms properly and wanted to go to a different hotel. -Review from Pensacola Florida';
            break;
        
            case 'Monday' :
                $hotel = '<h2>Monday is Quality Inn time!</h2>';
                $pic = 'qinn.jpg';
                $alt = 'Quality Inn';
                $content = 'My wife and I booked this hotel when we attended a nearby wedding. This was by far the worst and most disgusting hotel I have ever stayed in North America. It beat out a hotel in central Turkey that had a hole in the floor toilet that doubled as the shower, or I might have said the world. To be fair, the Turkish hotel cost 5 dollars. This "Quality?" Inn was a dump. The furniture in the first room was broken and mildew covered the carpet near the window. -Review from Stroudsburg, Pennsylvania ';
                break;
        
                case 'Tuesday' :
                    $hotel = '<h2>Tuesday time for the Quest Inn!</h2>';
                    $pic = 'quinn.jpg';
                    $alt = 'Quest Inn';
                    $content = 'I have stayed in some real stink holes in my time, but this one was by far the worst! When I got to my room there was marijuana stems between the sheets and it appeared the sheets had been used by a hooker just before I arrived. I also found a used tampon in the dresser drawer. When I complained to the manager, he demanded I leave and called the police. If I could have found another room anywhere in town I most certainly would have, and even seriously considered sleeping in my car. After reflection, I should have. This place is the most disgusting and vile place I have ever seen! DO NOT GO NEAR THIS PLACE! -Review from Springfield, Illinois';
                    break;
        
                    case 'Wednesday' :
                        $hotel = '<h2>Best Western Plus is our Wednesday pic</h2>';
                        $pic = 'binn.jpg';
                        $alt = 'Best Western Plus';
                        $content = 'I HAVE TO BE HONEST WHEN I GAVE MY FEEDBACK the worst stay i have ever been for one night and checked in late as well, flies in the room, heavy smoked as i always requested for a non smoking room, i was coughing all night did get enough rest. conveyed to the guy who checked me in named michael, he just shrugged his shoulders..soo i said alright he won\'t do anything so here i am THE WORST BW EVER.';
                        break;
        
                        case 'Thursday' :
                            $hotel = '<h2>Thursday is La Quinta time!</h2>';
                            $pic = 'lqinn.jpg';
                            $alt = 'La Quinta';
                            $content = 'My husband & I have stayed at this hotel several times in the past. Last night was the worse. The first room we were assigned was 208. It had a seriously bad cat oder present & the air wasn\'t working. So we went to the front desk & got another room. This room was 209 it didn\'t have the cat oder but it did have a strong smell of cigarettes. We had to keep the door open for nearly 2 hours just trying to air it out. My husband even sprayed a little cologne around. That helped some but that wasn\'t it. There were little black hairs coming out of the air vent. I seen them on the bed spread. Even though is shook them off them still kept appearing. So we turned on the TV. Well, all appeared fine until you actually wanted to watch TV, something was wrong with the screen. Anything with a dark background you could not see, you could listen, but not see a picture.';
                            break;
        
                            case 'Friday' :
                                $hotel = '<h2>Friday is Holiday Inn day!</h2>';
                                $pic = 'hinn.jpg';
                                $alt = 'Holiday Inn';
                                $content = 'Given a room on the highway end - was very noisy. Asked for another room - only two available were next to noisy kids. Decided not to stay but was told we would be charged because we checked in more than 30 minutes ago. 15 of those were spent waiting for other folks to check in. Receptionist was not able to help. Asked to talk to the manager, they were not available and had to be called and did not want to issue a refund and would not talk with me. -Review From Denver, Colorado';
                                break;
        
        }

        // end switch

        

 

 

 

 

 

 

 

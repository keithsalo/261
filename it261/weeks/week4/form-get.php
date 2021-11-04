<?php
// our first form
// don't care about html
//the form elements are important
// form attributes and values are important
// use the Global variable of $_POST
// the two input fields will be name and email

if(isset($_GET['name'],   
         $_GET['email'])) {
$name = $_GET['name'];
$email = $_GET['email'];
// if(empty($_GET['name'] && 
//          $_GET['email'])) {
//     echo 'Please fill out the fields!';
// } else {
//     echo $name;
//     echo '<br>';
//     echo $email;
//     }
} else {
   echo '
   <form action="" method="get">
<label>NAME</label>
<input type="text" name="name">

<label>EMAIL</label>
<input type="email" name="email">

<input type="submit" value="Send it!!!">

    </form>
   '; 
}

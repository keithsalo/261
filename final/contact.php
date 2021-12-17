<?php // index.php

// this index page is the home page of your website
// also after creating this  index.php page you wil not be able to access it unless you login as a user, or register first, then login!

session_start();

include('config.php');

// if the user does not login correctly they will be directed to the login page?

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('includes/header.php');



if(isset($_SESSION['success'])) :?>

<div class="success">
<h3>
<?php echo $_SESSION['success'];
unset($_SESSION['success']);
?>
</h3>
</div>  <!-- end div success -->
<?php endif ; 

if(isset($_SESSION['username'])) : ?>

<div class="welcome-logout">
<h3>Hello
<?php echo $_SESSION['username']; ?>
</h3>
<p class="outlog"><a href="index.php?logout='1' ">Logout</a></p>
</div> <!-- end welcome-logout div -->
<?php endif ; ?>
</header>
<div id="wrapper">

<main>
<h1><?php echo $headline; ?></h1>

        <h2>Please fill out our terrible hotels form!</h2>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])   ;?>" method="post">
<fieldset>
<label for="first_name">First Name</label>
<input type="text" name="first_name" value="
<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>
">
<span class="error">
<?php echo $first_name_Err;  ?>
</span>

<label for="last_name">Last Name</label>
<input type="text" name="last_name" value="
<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>
">
<span class="error">
<?php echo $last_name_Err;  ?>
</span>

<label for="email">Email</label>
<input type="text" name="email" value="
<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>
">
<span class="error">
<?php echo $email_Err;  ?>
</span>

<label for="city">City you live in</label>
<input type="text" name="city" value="
<?php if(isset($_POST['city'])) echo htmlspecialchars($_POST['city']) ;?>
">
<span class="error">
<?php echo $city_Err;  ?>
</span>



<label for="year">Number of hotels you stay at per year</label>
<ul>
<li>
<input type="radio" name="hotel" value="under 2"
<?php if(isset($_POST['hotel']) && $_POST['under 2'] == 'under 2') echo 'checked="checked" '  ;?>
>under 2
</li>
<li>
<input type="radio" name="hotel" value="3-6"
<?php if(isset($_POST['hotel']) && $_POST['3-6'] == '3-6') echo 'checked="checked" '  ;?>
>3-6
</li>
<li>
<input type="radio" name="hotel" value="6 or more"
<?php if(isset($_POST['hotel']) && $_POST['6 or more'] == '6 or more') echo 'checked="checked" '  ;?>
>6 or more
</li>

</ul>
<span class="error">
<?php echo $year_Err;  ?>
</span>

<label for="hotels">Bad Hotels you've stayed at</label>
<ul>
<li>
<input type="checkbox" name="hotels[]" value="Holiday Inn"
<?php if(isset($_POST['hotels']) && in_array('Holiday Inn', $hotels)) echo 'checked="checked" '  ;?>
>Holiday Inn
</li>
<li>
<input type="checkbox" name="hotels[]" value="Motel 6"
<?php if(isset($_POST['hotels']) && in_array('Motel 6', $hotels)) echo 'checked="checked" '  ;?>
>Motel 6
</li>
<li>
<input type="checkbox" name="hotels[]" value="Quality Inn"
<?php if(isset($_POST['hotels']) && in_array('Quality Inn', $hotels)) echo 'checked="checked" '  ;?>
>Quality Inn
</li>
</ul>
<span class="error">
<?php echo $hotels_Err;  ?>



<label for="comments">
<textarea name="comments" placeholder="Any additional info" >
<?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments'])   ;?>
</textarea>
<span class="error">
<?php echo $comments_Err;  ?>
</span>

<label for="privacy">Privacy</label>
<ul>
<li><input type="radio" name="privacy" value="agree"
<?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'checked="checked" '  ;?>

> I agree</li>
</ul>
<span class="error">
<?php echo $privacy_Err;  ?>
</span>

<input type="submit" value="Send it">
<p><a href="">Reset</a></p>




</fieldset>
</form>
</main>



<!-- your footer include will be placed at the bottom of the page -->

</div> <!-- end div wrapper-->
<?php
include('includes/footer.php');



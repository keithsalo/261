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
<h1>Welcome to the home page!</h1>
<?php
if(isset($_GET['today'])) {
    $today = $_GET['today'];
    } else {
    $today = date('l');
    }
    ?>
   
    
        <div id="wrapper">
    <h1>Weekly Bad hotel review round-up!</h1>
    <?php
    echo $hotel;
    ?>
    <img src ="images/<?php echo $pic;  ?>" alt = "<?php echo $alt;?>">
    <p><?php echo $content;
    ?></p>
    
    <h2>Check out our daily Hotel spotlight</h2>  
    
    <ul>
    <li><a href= "daily.php?today=Saturday">Saturday</a></li>
    <li><a href= "daily.php?today=Sunday">Sunday</a></li>
    <li><a href= "daily.php?today=Monday">Monday</a></li>
    <li><a href= "daily.php?today=Tuesday">Tuesday</a></li>
    <li><a href= "daily.php?today=Wednesday">Wednesday</a></li>
    <li><a href= "daily.php?today=Thursday">Thursday</a></li>
    <li><a href= "daily.php?today=Friday">Friday</a></li>
    
    
    
    </ul>
    </div> <!-- end wrapper-->



<!-- your footer include will be placed at the bottom of the page -->

</div> <!-- end div wrapper-->
<?php
include('includes/footer.php');



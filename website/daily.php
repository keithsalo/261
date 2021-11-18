<?php
// include('config.php');
include('includes/header.php');

if(isset($_GET['today'])) {
    $today = $_GET['today'];
    } else {
    $today = date('l');
    }
    ?>
  
 
    <style>
    #wrapper {
        width:940px;
        margin:20px auto;
    
    }
    
    
    body {
        background-color: lightblue;
    }
    
    
    </style>
    
    
    
    
        <div id="wrapper">
    <h1>A list of Happy Hours in West Seattle</h1>
    <?php
    echo $happy;
    ?>
    <img src ="images/<?php echo $pic;  ?>" alt = "<?php echo $alt;?>">
    <p><?php echo $content;
    ?></p>
    
    <h2>Check out our daily Happy Hour Spots</h2>
    
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

    
    <?php include('includes/footer.php'); ?>

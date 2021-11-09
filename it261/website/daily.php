<?php
include('config.php');
include('includes/header.php');

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
        $happy = '<h2>Sunday is Happy Hour Day at West 5 from4-6pm!</h2>';
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
    ?>
    <!doctype html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Switch Homework</title>
    <style>
    #wrapper {
        width:940px;
        margin:20px auto;
    
    }
    
    
    body {
        background-color: lightblue;
    }
    
    
    </style>
    
    </head>
    
    <body>
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

    <?php
    include('includes/footer.php'); ?>
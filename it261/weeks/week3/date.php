<?php
// the date function
echo date("l jS \of F Y h:i:s A");
echo '<br>';
echo date("H:i");
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo date("H:i");
// why do I change the clock from 12 to 24hr?
// I will use an if/else/if statement, resulting on a different message based on the time of day
// If the time is less than 11, it's morning 
// If the time is less than 16, it's afternoon
// Else, its evening 
// we need to assign our time to a variable!
$time = ("H:i");
if($time <= 11) {
echo '<h2 style="color:yellow;"Good Morning, Keith</h2>';
} elseif ($time <= 16) {
    echo '<h2 style="color:lightblue;"Good Afternoon, Keith</h2>';
} else {
    echo '<h2 style="color:purple;">Good Evening, Keith</h2>';
}
// we can place html elements inside our echo

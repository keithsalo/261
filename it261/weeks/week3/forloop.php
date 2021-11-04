<?php
//for loops
// tricky!!


for ($x = 0; $x <= 21; $x+= 3) {
  echo "The number is: $x <br>";
}

echo '<br>';

// is  a for loop for our famous celsius to far. converter

// do not call out the celsius variable OUTSIDE of the loop!!!
    
    for ($celsius = 0; $celsius <= 100; $celsius+= 1) {
    $far = ($celsius * 9/5 + 32);
    $friendly_far = floor($far);
        echo '<b>Fahrenheit:</b> '.$friendly_far.' <b>Celsius:</b> <span style="color:red; font-weight:bold;">'.$celsius.' </span><hr>';

        

  }

  echo '<br>';
  // kilometers and we have miles

  for ($kilometers = 1; $kilometers <= 180; $kilometers+= 1) {
    $miles = ($kilometers * 0.62137);
    $friendly_miles = floor($miles);
        echo '<b> Miles:</b> '.$friendly_miles.' <b> Kilometers:</b> <span style="color:green; font-weight:bold;">'.$kilometers.' </span><hr>';
        
  }


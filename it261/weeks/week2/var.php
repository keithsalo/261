<?php

//var.php
// a variable is a container for information 

$name = 'Keith';
$weather = 'Today is a sunny day';
$body_temp = 98.6;
//my 98.6 is a float - if it were 98, it would be an integer (decimal point)

echo $name;
echo '<br>';
echo 'My name is $name';
echo '<br>';
echo '<br>';
echo "My name is $name";
echo '<br>';
//if you use single quotes around a variable, the value of the variable will not displays
//if you use double quotes, the variable value will display!

echo 'My name is '.$name.' ';
echo '<br>';
echo $weather;
echo '<br>';
echo $body_temp;
echo '<br>';
echo 'The normal body temperature is '.$body_temp.' and all is well!';
echo '<br>';
$name = 'Sharon';
echo $name;
echo '<br>';
$x= 20;
$y= 5;
echo $x;
echo '<br>';
$z= $x + $y;
echo '<br>';
echo $z;
$z= $x * $y;
echo '<br>';
echo $z;
echo '<br>';
//continue with own name

$first_name= 'Keith';
$last_name= 'Salo';

echo $first_name .' '. $last_name;
echo '<br>';
echo ''.$first_name .' '. $last_name.'';
echo '<br>';
echo 'Here are the names with a single\'s quote! '.$first_name.' '.$last_name.' ';
//Punctuation challenges - inside single quotes, you MUST nest the variable with the following '.$variable.'... Now when you have an apostrophe, you must use ESCAPE before apostrophe 
echo '<br>';
echo "Here are the names with a double's quote! $first_name$last_name";
echo '<br>';
$name = 'Keith ';
$name .= 'Salo';
echo $name;
echo '<br>';

$x = 20;
$x *= 2;
echo $x;

echo '<br>';

$x = 120;
$x /= 2;
echo $x;

echo '<br>';

$x = 120;
$x *= .09;
echo $x;

// our first function -  number_format ()
echo '<br>';
$x = 137;
$x /= 4;
// result is 34.25
$friendly_x = number_format($x, 1);
echo $friendly_x;
echo '<br>';
// second preset function - the Date function
echo date('Y');
echo '<br>';
echo date('l');
echo '<br>';
// arrays - you cannot echo an array!
$fruit [] = 'orange';
$fruit []= 'banana';
$fruit []= 'grapes';
$fruit []= 'apples';
$fruit []= 'cherries';
echo '<br>';
echo $fruit[3]; // you can echo an indexed option
echo '<br>';
$fruit = array (
'orange',
'banana',
'grapes',
'apples',
'cherries',
);

$fruit = [
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries',
    'strawberries',
];
//CANNOT echo an array!
echo $fruit;
echo '<br>';
print_r($fruit);
echo '<br>';
var_dump($fruit);

echo '<br>';
//another array in the world of websites

$nav[]= 'Home';
$nav[]= 'About';
$nav[]= 'Daily';
$nav[]= 'Contact';
$nav[]= 'Gallery';

echo $nav[0];

echo '<br>';
//associative array

$nav['index.php']= 'Home';
$nav['about.php']= 'About';
$nav['daily.php']= 'Daily';
$nav['contact.php']= 'Contact';
$nav['gallery.php']= 'Gallery';

//index is the key of the array, and home is the vale(key, value relationship)
$nav = array(
    'index.php'=>'home',
    'about.php'=>'about',
    'daily.php'=>'daily',
    'contact.php'=>'contact',
    'gallery.php'=>'gallery'
);
echo '<pre>';
var_dump ($nav);
echo '</pre>';

echo '<br>';

$show = 'The Crown';
$show_actor = 'Olivia Colman';
$show_genre = 'Historical Fiction';

echo 'My favorite series during 2021 was "'.$show. '" starring, ' .$show_actor.', and it is a '.$show_genre.'';

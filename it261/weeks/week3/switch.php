<?php
// class coffee exercise
// if today is Saturday, it will be pumpkin latte day
// we will start with the isset() function
// the we will introduce our first GLOBAL variable
// our switch

// $variable = 'Life is good!';
// if(isset($variable)) {
// echo 'Yippy-skippy!!!';
// } else {
// echo 'Not';
// }

// starting the switch
// if something is set, $today , then all is well
// else, today is TODAY

// GLOBAL VARIABLES are capitalized and start with $_GET


if(isset($_GET['today'])) {
$today = $_GET['today'];
} else {
$today = date('l');
}

//switch

switch($today) {
case 'Saturday' :
$coffee = '<h2>Saturday is our Cap  Day!</h2>';
$pic = 'cap.jpg';
$alt = 'Cappuccino';
$content = 'A <b>cappuccino</b> is an espresso-based coffee drink that originated in Italy, and is prepared with steamed milk foam. Variations of the drink involve the use of cream instead of milk, using non-dairy milk substitutes and flavoring with cinnamon or chocolate powder.';
break;

case 'Sunday' :
    $coffee = '<h2>Sunday is our Pumpkin Latte Day!</h2>';
    $pic = 'pumpkin.jpg';
    $alt = 'Pumpkin Latte';
    $content = '';
    break;

    case 'Monday' :
        $coffee = '<h2>Monday is our Americano Day!</h2>';
        $pic = 'americano.jpg';
        $alt = 'Americano';
        $content = 'An <b>Americano</b> is an espresso drink made with hot water and espresso, also called a Caffe Americano. The drink can be made with either one or two shots of espresso, and varying ratios of water. Diluting the strong dark espresso roast brings the flavor closer to a drip coffee: which might be where the name originated!';
        break;

        case 'Tuesday' :
            $coffee = '<h2>Tuesday is our Regular Joe Day!</h2>';
            $pic = 'regular.jpg';
            $alt = 'Plain Black Coffee';
            $content = 'Black coffee is simply coffee that is normally brewed without the addition of additives such as sugar, milk, cream, or added flavors. While it has a slightly bitter taste compared to when it is flavored with additives, many people love a strong cup of black coffee.';
            break;

            case 'Wednesday' :
                $coffee = '<h2>Wednesday is our Green Tea Day!</h2>';
                $pic = 'green-tea.jpg';
                $alt = 'Green Tea';
                $content = 'A brewed <b>green tea</b> is typically green, yellow or light brown in color, and its flavor profile can range from grass-like and toasted (pan fired) to vegetal, sweet and seaweed-like (steamed). If brewed correctly, most green tea should be quite light in color and only mildly astringent.';
                break;

                case 'Thursday' :
                    $coffee = '<h2>Thursday is our Chai Latte Day!</h2>';
                    $pic = 'chai-latte.jpg';
                    $alt = 'Chai Latte';
                    $content = 'The <b>chai latte</b> is hot, milky, fragrant, gently spicy, and popular in cafés everywhere. However, despite the fact that it’s served in coffee shops and named after the latte, it actually contains no coffee whatsoever. ';
                    break;

                    case 'Friday' :
                        $coffee = '<h2>Friday is our Bubble Tea Day!</h2>';
                        $pic = 'bubble_tea.jpg';
                        $alt = 'Bubble Tea';
                        $content = '<b>Bubble Tea</b> is the name given to the wide variety of refreshing flavoured fruit teas and milk teas served ice cold or piping hot with chewy tapioca balls that you suck up through a big fat straw! ... With an organic base of green or black tea, our delicious drinks are described as a nudge along the evolutionary scale.';
                        break;

}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Switch Classwork Exercise</title>
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
<h1>My Wonderful switch classwork exercise!</h1>
<?php
echo $coffee;
?>
<img src ="images/<?php echo $pic;  ?>" alt = "<?php echo $alt;?>">
<p><?php echo $content;
?></p<>

<h2>Check out our daily specials</h2>

<ul>
<li><a href= "switch.php?today=Saturday">Saturday</a></li>
<li><a href= "switch.php?today=Sunday">Sunday</a></li>
<li><a href= "switch.php?today=Monday">Monday</a></li>
<li><a href= "switch.php?today=Tuesday">Tuesday</a></li>
<li><a href= "switch.php?today=Wednesday">Wednesday</a></li>
<li><a href= "switch.php?today=Thursday">Thursday</a></li>
<li><a href= "switch.php?today=Friday">Friday</a></li>



</ul>
</div> <!-- end wrapper-->
</body>
</html>
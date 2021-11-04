<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Week 5 Trip Calculator</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
<form action="
<?php  echo htmlspecialchars($_SERVER['PHP_SELF'])   ;?>
" method="post">
<fieldset>
<legend>Trip Calculator</legend>

<label for="miles">How many miles will you be driving? </label>
<input type="text" name="miles" value="<?php
                if(isset($_POST['miles'])) echo $_POST['miles']; ?>"></input>

<label for="gas">Price per gallon</label>
<ul>
<ul>
<li><input type="radio" name="gas" value="3.00">$3.00</li>
<li><input type="radio" name="gas" value="3.50">$3.50</li>
<li><input type="radio" name="gas" value="4.00">$4.00</li>
</ul>



<label for="fuel">Fuel Efficiency</label>

<select name="fuel">
<option value="" NULL>Select one!</option>
<option value="Poor">Poor</option>
<option value="Average">Average</option>
<option value="Good">Good</option>




</select>

<input type="submit" value="Calculate">
<input type="submit" value="Reset">

</fieldset>
</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST') {

    // if our posts is empty, then we will call out a specific echo!
    
    if(empty($_POST['miles'])) {
        echo '<span class="error">Please fill out the miles you will be driving</span>';
    }
    
    if(empty($_POST['gas'])) {
        echo '<span class="error">Please fill out the miles per gallon </span>';
    }
    
    
    
    
    if($_POST['fuel'] == NULL) {
    echo '<span class="error">Please choose your vehicles fuel efficiency</span>';
    }
    
    if(isset(
      $_POST['miles'],
      $_POST['gas'],  
      $_POST['fuel']  
        
    )) {
    $miles = $_POST['miles'];
    $gas = $_POST['gas'];
    $fuel = $_POST['fuel'];
    if($fuel == 'Poor') {
        $fuel = 10;
    } elseif($fuel == 'Average') {
        $fuel = 20;
    } elseif($fuel == 'Good') {
        $fuel = 30;
    }
    
    $total = $miles / floatval($fuel) * $gas;
    $total =  number_format($total , 2) ;
    
    echo '
    <div class="box">
    
    <p>It will cost you $'.$total.'!</p>
    
    </div>
    ';
    
    
    
    
    } // chose isset
    
    
    
    } // server request
    
    
    
    
    ?>
    </body>
    </html>
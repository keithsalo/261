<!doctype html>
<html>
<head>
<title>My Adder Assignment</title>
<style>
p {
        color:red;
        text-align: center;
    }
    
    h1 {
        color:green;
    }
    
    h2 {
        font-size:1.5em;
        text-align: center;
    }

    a {
        text-align:center;
        display: block;
    }
    
    form {
        width:350px;
        margin:0 auto;
        border:1px solid red;
        padding:10px;
    }
    
    
    h1 {
        text-align: center;
    }
</style>
</head>
<body>
<h1>Adder.php</h1> 
<form action="" method="post">
<label> Enter the first number:</label>
<input type="text" name="num1"><br>  
<label>Enter the second number:</label>
<input type="text" name="num2"><br>  
<input type="submit" value="Add Em!!">   
</form> 
<?php

if(isset($_POST['num1'],
$_POST['num2'])) {
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2;
echo '<h2>You added '. $num1 .' and '.$num2.'</h2>';
echo ' <p> and the answer is <br>
<style="color:red;">'. $myTotal .'!</p>';
echo '<a href="">Reset page</a>';
}
?>
<!--wrong form action tag on line 44 -->
<!--missing " on line 47-->
<!--no closing php tag on line 12-->
 <!--extra {?> at the end-->
 <!--2 closing label tags in form-->
 <!--incorrect nesting punctuation for echo-->
 <!--missing <!doctype html> line 1-->
 <!--extra <p> tag around line 48-->
 <!--uppercase N in $num2-->
 <!--single quotes in like 48-->

</body>
</html>
<?php // trees-view.php

// include('config.php');
include('credentials.php');

// if isset $_GET['today'] ect...

if(isset($_GET['id'])) {
$id = (int)$_GET['id'];

} else {
    header('Location: gallery.php');
}

$sql = 'SELECT * FROM trees WHERE trees_id = '.$id.''; 

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result - assign query to result

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
// now time for the while loop - and the while loop will return the array
while($row = mysqli_fetch_assoc($result)){
    // we are not echoing here, we are assigning our row first name to $treename
$treename = stripslashes($row['treename']);
$classification = stripslashes($row['classification']);

$feedback = '';
} // ending while

} else {
    $feedback = 'Something is not working!';
}

include('includes/header.php');
// for the BIG assignment you will now call out the header INCLUDE!

?>
<main>
<h1>Welcome to <?php echo $treename ;?>'s page!</h1>

<?php
if($feedback == ''){
echo '<ul>';
echo '<li><b>Tree Name:</b> '.$treename.'</li>';
echo '<li><b>Classification:</b> '.$classification.'</li>';

echo '<p>Return back to the <a href="gallery.php">trees page!</a></p>';
}


?>
</main>

<aside>
<?php
if($feedback == '') {
echo '<img class="center" src="images/trees'.$id.'.jpg" alt="'.$treename.'">';
echo '<p class="blurb">'.$classification.'</p>';

}


?>
</aside>
</div> <!-- end wrapper -->
<?php

mysqli_free_result($result);
mysqli_close($iConn);
include('includes/footer.php');
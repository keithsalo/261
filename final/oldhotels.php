<?php
include('config.php');
include('includes/header.php');
include('credentials.php');
?>
    <div id="wrapper">
    
    <main>
      

        <h1><?php echo $headline; ?></h1>
        <h2>A Short list of some of the Worst hotels in America</p>
        <?php
// We need to grab our table and assign it to a variable 

$sql = 'SELECT * FROM hotels';

// we need to connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result - assign query to result

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// time for the if statement -- if we have more than 0 rows.  were good

if(mysqli_num_rows($result) > 0) {
// now time for the while loop - and the while loop will return the array
while($row = mysqli_fetch_assoc($result)){

echo '<ul>';
echo '<li>'.$row['hotel_name'].'</li>';
echo '<li>'.$row['location'].'</li>';

echo '</ul>';
echo '<h3> '.$row['hotel_name'].', check out more information <a href="project-view.php?id='.$row['hotel_id'].'">here!</a></h3>';
}// closing while

} else {
    echo 'Houston, we have a problem';
}

mysqli_free_result($result);
mysqli_close($iConn);

?>

    </main>

    <aside>
    <h3>Our Aside for our Project</h3>

    </aside>

    <?php
    include('includes/footer.php'); ?>
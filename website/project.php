<?php
// include('config.php');
include('includes/header.php');
include('credentials.php');
?>
    <div id="wrapper">
    
    <main>
      

        <h1><?php echo $headline; ?></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eros est, tincidunt nec cursus sed, feugiat in risus. Morbi et purus ut magna egestas pharetra. Integer ullamcorper quam pharetra, vehicula tortor a, rhoncus libero. Aliquam molestie eget ante quis efficitur.</p>
        <?php
// We need to grab our table and assign it to a variable 

$sql = 'SELECT * FROM trees';

// we need to connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result - assign query to result

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// time for the if statement -- if we have more than 0 rows.  were good

if(mysqli_num_rows($result) > 0) {
// now time for the while loop - and the while loop will return the array
while($row = mysqli_fetch_assoc($result)){
echo '<h3>For more information about '.$row['treename'].', please click <a href="project-view.php?id='.$row['trees_id'].'">here!</a></h3>';
echo '<ul>';
echo '<li>'.$row['treename'].'</li>';
echo '<li>'.$row['classification'].'</li>';
echo '</ul>';
echo '<hr>';
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
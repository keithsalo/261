<?php
// tree.php
// tree-view.php
// config file
// credential file
// don't forget, this needs to be uploaded onto server, will not work on localhost

include('config.php');
include('includes/header.php');

// for your big database assignment, you HEADER INCLUDE would go right here!
?>
<main>
<h1>Trees of the Pacific Northwest</h1>

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
echo '<h3>For more information about '.$row['treename'].', please click <a href="tree-view.php?id='.$row['trees_id'].'">here!</a></h3>';
echo '<ul>';
echo '<li>'.$row['treename'].'</li>';
echo '<li>'.$row['classification'].'</li>';
echo '<li>'.$row['email'].'</li>';
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
<h3>My Mystery Aside</h3>

</aside>


</div> <!-- end wrapper -->
<?php
include('includes/footer.php');
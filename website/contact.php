<?php
// include('config.php');
include('includes/header.php');?>
    <div id="wrapper">
    
    <main>
      

        <h1><?php echo $headline; ?></h1>

        <h2>Please fill out our form!</h2>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])   ;?>" method="post">
<fieldset>
<label for="first_name">First Name</label>
<input type="text" name="first_name" value="
<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>
">
<span class="error">
<?php echo $first_name_Err;  ?>
</span>

<label for="last_name">Last Name</label>
<input type="text" name="last_name" value="
<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>
">
<span class="error">
<?php echo $last_name_Err;  ?>
</span>

<label for="email">Email</label>
<input type="text" name="email" value="
<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>
">
<span class="error">
<?php echo $email_Err;  ?>
</span>

<label for="school">Name of School</label>
<input type="text" name="school" value="
<?php if(isset($_POST['school'])) echo htmlspecialchars($_POST['school']) ;?>
">
<span class="error">
<?php echo $school_Err;  ?>
</span>

<label for="field">Field of Study</label>
<input type="text" name="field" value="
<?php if(isset($_POST['field'])) echo htmlspecialchars($_POST['field']) ;?>
">
<span class="error">
<?php echo $field_Err;  ?>
</span>

<label for="year">Year expecting to graduate</label>
<ul>
<li>
<input type="radio" name="year" value="female"
<?php if(isset($_POST['year']) && $_POST['year'] == '2021') echo 'checked="checked" '  ;?>
>2021
</li>
<li>
<input type="radio" name="year" value="female"
<?php if(isset($_POST['year']) && $_POST['year'] == '2022') echo 'checked="checked" '  ;?>
>2022
</li>
<li>
<input type="radio" name="year" value="male
<?php if(isset($_POST['year']) && $_POST['year'] == '2023') echo 'checked="checked" '  ;?>
">2023
</li>
<li>
<input type="radio" name="year" value="other"
<?php if(isset($_POST['year']) && $_POST['year'] == '2024') echo 'checked="checked" '  ;?>
>2024
</li>
</ul>
<span class="error">
<?php echo $year_Err;  ?>
</span>



<label for="comments">
<textarea name="comments" placeholder="Any additional info" >
<?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments'])   ;?>
</textarea>
<span class="error">
<?php echo $comments_Err;  ?>
</span>

<label for="privacy">Privacy</label>
<ul>
<li><input type="radio" name="privacy" value="agree"
<?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'checked="checked" '  ;?>

> I agree</li>
</ul>
<span class="error">
<?php echo $privacy_Err;  ?>
</span>

<input type="submit" value="Send it">
<p><a href="">Reset</a></p>




</fieldset>
</form>

   


    </main>

    <aside>
    <h3>Our Aside for our form</h3>

    </aside>

    <?php
    include('includes/footer.php'); ?>
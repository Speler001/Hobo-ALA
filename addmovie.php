<?php include_once("titel.php"); titel("Addmovie | Hobo"); keywords("");
    include_once('header.php');
    include_once('headerad.php');
if(isset($_SESSION['fname'])){}else{echo "<script> setTimeout(function() {location.href = 'login';}, 0);</script>";} ?>
<section style="height: 100vh; width: 100%; background: url(./icons/background.jpg) no-repeat ; background-size: cover; background-position: center center; margin-left: 0;">

<section class='forms'>
    <a href="index"><img src="icons/LOGO.png" alt=""></a>
    <form method="POST" action="includes/addfilm.inc.php">
        <p>Add Film</p>
        <input type="text" name="titel" id="" placeholder="Serie's titel">
        <textarea cols="30" rows="10" name="description" id="" placeholder="Serie's description"></textarea>
        <input type="number" id="yearInput" name="years" min="1900" max="2099" placeholder="Films's release year">
        <input type="file" name="picname" id="picname">
        <input type="file" name="vidname" id="vidname">
        <p id='error' value=""><?php if(isset($_GET['stat'])){if($_GET['stat'] == "added"){echo "The film is added";}elseif($_GET['stat'] == "notadded"){echo "The film is not added";} } ?></p>
        <button class='loginbutton' id='sbutton' name='submit'>add</button>
    </form>
</section>
</section>
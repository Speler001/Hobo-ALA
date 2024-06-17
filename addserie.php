<?php include_once("titel.php"); titel("Addserie | Hobo"); keywords("");
    include_once('header.php');
    include_once('headerad.php');
if(isset($_SESSION['fname'])){}else{echo "<script> setTimeout(function() {location.href = 'login';}, 0);</script>";} ?>
<section style="height: 100vh; width: 100%; background: url(./icons/background.jpg) no-repeat ; background-size: cover; background-position: center center; margin-left: 0;">

<section class='forms'>
    <a href="index"><img src="icons/LOGO.png" alt=""></a>
    <form method="POST" action="includes/addserie.inc.php">
        <p>Add Serie</p>
        <input type="text" name="titel" id="" placeholder="Serie's titel">
        <textarea cols="30" rows="10" name="description" id="" placeholder="Serie's description"></textarea>
        <input type="number" name="run" id="" placeholder="air = 1 | not = 0" min="0" max="1" step="1" value="0">
        <input type="number" id="yearInput" name="years" min="1900" max="2099" placeholder="Serie's release year">
        <input type="file" name="picname" id="picname">
        <p id='error' value=""><?php if(isset($_GET['stat'])){if($_GET['stat'] == "added"){echo "The serie is added";}elseif($_GET['stat'] == "notadded"){echo "The serie is not added";} } ?></p>
        <button class='loginbutton' id='sbutton' name='submit'>add</button>
    </form>
</section>
</section>
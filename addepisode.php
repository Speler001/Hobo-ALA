<?php include_once("titel.php"); titel("Addepisode | Hobo"); keywords(""); require('includes/dbconn.php');
    include_once('header.php');
    include_once('headerad.php');

if(isset($_SESSION['fname'])){}else{echo "<script> setTimeout(function() {location.href = 'login';}, 0);</script>";} ?>
<section style="height: 100vh; width: 100%; background: url(./icons/background.jpg) no-repeat ; background-size: cover; background-position: center center; margin-left: 0;">

<section class='forms'>
    <a href="index"><img src="icons/LOGO.png" alt=""></a>
    <form method="POST" action="includes/addepisode.inc.php">
        <p>Add Episode</p>
        <input type="text" name="titel" id="" placeholder="Serie's titel">
        <textarea cols="30" rows="10" name="description" id="" placeholder="Serie's description"></textarea>
        <select name="serie" id="serie">
            <?php 
            $sql = "SELECT * FROM serie";

            if($result = $conn->query($sql)){

                while($row = $result->fetch_array(MYSQLI_BOTH)){

                    $serie = $row['titel'];
                    $id = $row['id'];
                    echo "<option value='$id'>$serie</option>";
                }
            }
            ?>
        </select>
        <input type = "number" name='season' max='20' min='1' value='1'>
        <input type="file" name="picname" id="picname">
        <input type="file" name="vidname" id="vidname">
        <p id='error' value=""><?php if(isset($_GET['stat'])){if($_GET['stat'] == "added"){echo "The Episode is added";}elseif($_GET['stat'] == "notadded"){echo "The Episode is not added";} } ?></p>
        <button class='loginbutton' id='sbutton' name='submit'>add</button>
    </form>
</section>
</section>
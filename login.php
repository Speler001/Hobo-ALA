<?php include_once("titel.php"); titel("Login | Hobo"); keywords("");?>
<section style="height: 100vh; width: 100%; background: url(./icons/gifback.gif) no-repeat ; background-size: 1820px; background-position: center; margin-left: 0;">
<section class='forms'>
    <a href="index"><img src="icons/LOGO.png" width="200" style="position: relative; left: 150px;" alt=""></a>
    <form method="POST" action="includes/login.inc.php">
        <input type="email" name="email" id="" placeholder="Voer uw emailadres in">
        <input type="password" name="password" id="" placeholder="Voer uw wachtwoord in">
        <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyfields"){echo "<p class='Error'>Vul alle velden in!</p>";}
                elseif($_GET['error'] == "admin"){echo "<p class='Error'>Je bent geen administrator.</p>";}
                elseif($_GET['error'] == "invalidemail"){echo "<p class='Error'>Wrong email!</p>";}
                elseif($_GET['error'] == "invalidpassword"){echo "<p class='Error'>Verkeerde wachtwoord!</p>";}
                elseif($_GET['error'] == "none"){echo "<p class='Error check'>Je bent ingelogd!</p>"; echo "<script> setTimeout(function() {location.href = 'index';}, 2500);</script>";}        
                elseif($_GET['error'] == "payed"){echo "<p class='Error check'>Welkom bij HOBO! U kan inloggen.</p>";}
                if(isset($_SESSION['loggedin'])){echo "<script> setTimeout(function() {location.href = 'index';}, 500);</script>";}
            }
        ?>
        <button class='loginbutton' style="color: white;" name='submit'>Log in</button>
        <p style='font-size: 16px'>Geen account? <a href="signin" style="color: green;">Registeer hier!</a></p>
    </form>
</section>
</section>
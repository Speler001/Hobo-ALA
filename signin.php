<?php include_once("titel.php"); titel("Signin | Hobo"); keywords("");?>
<section style="height: 100vh; width: 100%; background: url(./icons/gifback.gif) no-repeat ; background-size: cover; background-position: center center; margin-left: 0;">

<section class='forms'>
    <a href="index"><img src="icons/LOGO.png" alt=""></a>
    <form method="POST" action="includes/signin.inc.php">
        <p>Sign in</p>
        <input type="text" name="fname" id="" placeholder="Voornaam">
        <input type="text" name="tname" id="" placeholder="Tussenvoegsel">
        <input type="text" name="lname" id="" placeholder="Achtenraam">
        <input type="email" name="email" id="" placeholder="Emailadres">
        <input type="password" name="password" id="pass1" placeholder="Wachtwoord" onInput="sbut()">
        <input type="password" name="password1" id="pass2" placeholder="Wachtwoord Opnieuw" onInput="sbut()">
        <p id='error' value=""></p>
        <button class='loginbutton' id='sbutton' name='submit'>Sign in</button>
    </form>
</section>
</section>

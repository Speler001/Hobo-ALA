<?php include_once("../titel.php"); titel("Payment | Hobo"); keywords("");?>
<script src="../css-js/script.js"></script>
<link rel="stylesheet" href="../css-js/style.css">

<section style="height: 100vh; width: 100%; background: url(../icons/gifback.gif) no-repeat ; background-size: cover; background-position: center center; margin-left: 0;">
<section class='forms'>
    <a href="index"><img src="../icons/LOGO.png" alt=""></a>
    <form method="POST" action="confirm.php" >
        <p>Pay!</p>
        <?php if(isset($_GET['error'])){echo "<p style='font-size: 18px; max-width: 400px'>We warned you... :((</p>";}else{echo "<p style='font-size: 15px; max-width: 400px'>Please select a payment method, and choose a useable one otherwise we'll be rude! be warned!</p>";}?>
        <select name="payment" id="">
            <option value="nothing" default>SELECT</option>
            <option value="abn">ABN AMRO</option>
            <option value="ing">ING BANK</option>
            <option value="robo">Rabobank</option>
        </select>
        <?php if(isset($_GET['error'])){echo "<p class='Error' style='font-size: 16px;'>YOU HAVEN'T SELECTED ANYTHING YOU IDIOT!!</p>";}?>
        <button class='loginbutton' name='submit' >Pay!</button>
    </form>
</section>
</section>

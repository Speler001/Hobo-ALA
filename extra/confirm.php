<?php include_once("../titel.php"); titel("Payment | Hobo"); keywords("");?>
<script src="../css-js/script.js"></script>
<link rel="stylesheet" href="../css-js/style.css">

<section style="height: 100vh; width: 100%; background: url(../icons/gifback.gif) no-repeat ; background-size: cover; background-position: center center; margin-left: 0;">
<section class='forms'>
    <a href="index"><img src="../icons/LOGO.png" alt=""></a>
    <form method="POST" action="../login?error=payed" >
        <p>Confirm!</p>
        <?php
        if(isset($_POST['payment'])){
            if($_POST['payment'] == "abn"){
                echo "<img src='../icons/abn.png' height='100px' style='background: rgb(0, 0, 0,0.50); border-radius: 15px; align-self: center;'>";
            }elseif($_POST['payment'] == "ing"){
                echo "<img src='../icons/ing.png' width='200px' style='background: rgb(0, 0, 0,0.50); border-radius: 15px; align-self: center;'>";
            }elseif($_POST['payment'] == "robo"){
                echo "<img src='../icons/rabo.png' height='100px' style='background: rgb(0, 0, 0,0.50); border-radius: 15px; align-self: center;'>";
            }elseif($_POST['payment'] == "nothing"){
                header("location: ./payment.php?error");
            }
        }?>
        <p style='font-size: 18px; max-width: 350px'>You're about to buy our subscription to Hobo! the best website for films and series where every minute is not wasted!</p>
        <div style='display:flex; flex-diraction: rows; justify-content: center; align-items: center;'>
        <input style='width: 20px' type="checkbox" name="yes" id="confirm" onInput=''>
        <p style='font-size: 18px; margin-left: 5px; max-width: 350px'>Please press this checkbox to confirm your payment!</p>
        </div>
        <button class='loginbutton' name='submit' id="submitButton" disabled>Confirm!</button>

    </form>
</section>
</section>
<script>
document.getElementById('confirm').addEventListener('input', function() {
  var submitButton = document.getElementById('submitButton');
  submitButton.disabled = !this.checked; // Enable/disable the button based on checkbox state
});
</script>
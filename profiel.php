<?php
include_once("titel.php");
titel("Profiel | Hobo");
require('includes/profiel_functie.php');

session_start();
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    header("Location: login.php");
    exit();
}

$user = getUserDetails($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiel | Hobo</title>
</head>
<body>
<section style="height: 100vh; width: 100%; background: url(./icons/gifback.gif) no-repeat; background-size: 1820px; background-position: center; margin-left: 0;">
    <section class='forms'>
        <a href="index.php"><img src="icons/LOGO.png" width="200" style="position: relative; left: 150px;" alt=""></a>
        <form method="POST" action="includes/profiel_functie.php">
            <input type="text" name="fname" value="<?php echo htmlspecialchars($user['fname']); ?>" placeholder="Voornaam">
            <input type="text" name="tname" value="<?php echo htmlspecialchars($user['tname']); ?>" placeholder="Tussenvoegsel">
            <input type="text" name="lname" value="<?php echo htmlspecialchars($user['lname']); ?>" placeholder="Achternaam">
            <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" placeholder="Email">
            <input type="password" name="password" placeholder="Nieuw wachtwoord">
            <button class='loginbutton' style="color: white;" name='update_profile'>Update Profiel</button>
        </form>

        <?php
        if (isset($_GET['success']) && $_GET['success'] == 'profile_updated') {
            echo "<p class='Success'>Profiel succesvol bijgewerkt!</p>";
        } elseif (isset($_GET['error']) && $_GET['error'] == 'update_failed') {
            echo "<p class='Error'>Profiel bijwerken mislukt, probeer opnieuw.</p>";
        }
        ?>
    </section>
</section>
</body>
</html>

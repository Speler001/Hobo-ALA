<?php

if(isset($_POST['submit'])){

    require('dbconn.php');

    function safe($input)
    {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

    $fname = safe($_POST['fname']);
    $fname = $conn->real_escape_string($fname);
    $tname = safe($_POST['tname']);
    $tname = $conn->real_escape_string($tname);
    $lname = safe($_POST['lname']);
    $lname = $conn->real_escape_string($lname);
    $email = safe($_POST['email']);
    $email = $conn->real_escape_string($email);
    $password = safe($_POST['password']);
    $password = $conn->real_escape_string($password);

    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `users` (`fname`, `tname`, `lname`, `email`, `password`, `authority`, `lang`) VALUES ('$fname', '$tname', '$lname', '$email', '$hashedpassword', 'customer', 'en')";

    if($conn->query($sql)){
        header("location: ../extra/payment.php");
    }else{
        echo "idk wtf is happening ";
        echo "<br>" . $fname . "<br>" . $tname . "<br>" . $lname . "<br>" . $email . "<br>" . $password . "<br>" . $hashedpassword;
        echo "Error: " . $conn->error;
    }
}
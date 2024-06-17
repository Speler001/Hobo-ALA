<?php
var_dump($_POST);
if(isset($_POST['submit'])){
    if(!empty($_POST['email']) && !empty($_POST['password'])){

        //if($_POST['email'] = "admin" && $_POST['password'] == "admin"){header("location: ../login?error=admin");}

        require('dbconn.php');

    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);
    echo "email: " . $email. "<br> passowrd: " . $pass;

    $sql = "SELECT * FROM `users` WHERE `email` = '$email' ";

    if($result = $conn->query($sql)){
        $row = $result->fetch_array(MYSQLI_BOTH);
        if($email == $row['email']){

            $dbpass = $row['password'];
            if(password_verify($pass, $dbpass)){
                session_start();
                $_SESSION['user'] = $row['id'];
                $_SESSION['fname'] = $row['fname'];
                $_SESSION['tname'] = $row['tname'];
                $_SESSION['lname'] = $row['lname'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $pass;
                $_SESSION['hpassword'] = $row['password'];
                $_SESSION['sprofile'] = '';
                $_SESSION['loggedin'] = true;
                header("location: ../login?error=none");
            }else{header("location: ../login?error=invalidpassword");
                echo "Error: " . $conn->error;}
        }else{
            header("location: ../login?error=invalidemail");
        }
    }else{header("location: ../login?error=nowork");}

    }else{header("location: ../login?error=emptyfields");}
}
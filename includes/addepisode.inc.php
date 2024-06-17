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

    $titel = safe($_POST['titel']);
    $titel = $conn->real_escape_string($titel);
    $description = safe($_POST['description']);
    $description = $conn->real_escape_string($description);
    $season = safe($_POST['season']);
    $season = $conn->real_escape_string($season);
    $picname = safe($_POST['picname']);
    $picname = $conn->real_escape_string($picname);
    $serie = safe($_POST['serie']);
    $serie = $conn->real_escape_string($serie);
    $vidname = safe($_POST['vidname']);
    $vidname = $conn->real_escape_string($vidname);

    $sql = "SELECT * FROM serie where id ='$serie'";
    $result = $conn->query($sql);
    $row = $result->fetch_array(MYSQLI_BOTH);

    $seriename = $row['titel'];

    $sql = "INSERT INTO `episodes` (`titel`, `description`, `season`, `picname`, `seriename`, `serieid`, `filename`) VALUES ('$titel', '$description', '$season', '$picname', '$seriename', '$serie', '$vidname')";

    if($conn->query($sql)){
        header("location: ../addserie?stat=added");
    }else{
        echo "idk wtf is happening ";
        echo "<br>" . $fname . "<br>" . $tname . "<br>" . $lname . "<br>" . $email . "<br>" . $password . "<br>" . $hashedpassword;
        echo "Error: " . $conn->error;
        //header("location: ../addepisode?stat=notadded");
    }

}
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
    $vidname = safe($_POST['vidname']);
    $vidname = $conn->real_escape_string($vidname);
    $picname = safe($_POST['picname']);
    $picname = $conn->real_escape_string($picname);
    $years = safe($_POST['years']);
    $years = $conn->real_escape_string($years);

    $sql = "INSERT INTO `films` (`titel`, `description`, `year`, `filename`, `picname`) VALUES ('$titel', '$description', '$years', '$vidname', '$picname')";

    if($conn->query($sql)){

        $sql = "SELECT * FROM films ORDER BY id DESC";

        $result = $conn->query($sql);
        $row = $result->fetch_array(MYSQLI_BOTH);
        $id = $row['id'];

        header("location: ../addgenre?stat=added&serieid=$id&type=film");
    }else{
        echo "idk wtf is happening ";
        echo "<br>" . $fname . "<br>" . $tname . "<br>" . $lname . "<br>" . $email . "<br>" . $password . "<br>" . $hashedpassword;
        echo "Error: " . $conn->error;
        header("location: ../addmovie?stat=notadded");
    }

}
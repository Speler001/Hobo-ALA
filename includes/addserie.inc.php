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
    $run = safe($_POST['run']);
    $run = $conn->real_escape_string($run);
    $picname = safe($_POST['picname']);
    $picname = $conn->real_escape_string($picname);
    $years = safe($_POST['years']);
    $years = $conn->real_escape_string($years);

    $sql = "INSERT INTO `serie` (`titel`, `description`, `uploadd`, `run`, `picname`) VALUES ('$titel', '$description', '$years', '$run', '$picname')";

    if($conn->query($sql)){

        $sql = "SELECT * FROM serie ORDER BY id DESC";

        $result = $conn->query($sql);
        $row = $result->fetch_array(MYSQLI_BOTH);
        $id = $row['id'];

        header("location: ../addgenre?stat=added&serieid=$id&type=serie");
    }else{
        echo "idk wtf is happening ";
        echo "<br>" . $titel . "<br>" . $description . "<br>" . $run . "<br>" . $picname . "<br>" . $years . "<br>" ;
        echo "Error: " . $conn->error;
        header("location: ../addserie?stat=notadded");
    }

}
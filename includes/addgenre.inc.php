<?php
require('dbconn.php');
if(isset($_POST['genre'])) {
    $type = $_POST['type'];
    $genre = $_POST['genre'];
    $serieid = $_POST['serieid'];
        $sql = "SELECT * FROM genserie WHERE serieid = '$serieid' AND genreid = '$genre'";
    
        if($result = $conn->query($sql)){if($result->num_rows > 0){echo "the genre is already added!";}else{
            $sql = "INSERT INTO genserie VALUES ('$type','$serieid', '$genre')";
    
            if($conn->query($sql)){
                echo "genre added to serie";
            }else {
                echo "Genre not set.";
            }
        } 
    }
}
?>

<?php
require_once('includes/dbconn.php');

if(isset($_GET['type'])){
    $type = $_GET['type'];
    $id = $_GET['id'];
    if($type == 'serie'){

        $sql = "DELETE FROM `serie` WHERE id = '$id'";

        if($conn->query($sql)){
            echo "it is deleted";
            header('Location: index');
        }
    }elseif($type == 'film'){
        $sql = "DELETE FROM `films` WHERE id = '$id'";

        if($conn->query($sql)){
            echo "it is deleted";
            header('Location: index');
        }

    }elseif($type == 'episode'){
        $sql = "DELETE FROM `episodes` WHERE id = '$id'";

        if($conn->query($sql)){
            echo "it is deleted";
            header('Location: index');
        }

    }

}


?>
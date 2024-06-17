<?php
require_once('dbconn.php');
$search = $_POST['searchs'];
if(!empty($search)){
    $sql1 = "SELECT * FROM films WHERE titel LIKE '%$search%' OR description LIKE '%$search%' OR year LIKE '%$search%'";
    $sql = "SELECT * FROM serie WHERE titel LIKE '%$search%' OR description LIKE '%$search%' OR uploadd LIKE'%$search%'";
    if($result = $conn->query($sql)){
        while($row = $result-> fetch_array(MYSQLI_BOTH)){
            $pic = $row['picname'];
            $name = $row['titel'];
            $id = $row['id'];
            echo "<div><a class='numClick' Data-id='$id' Data-type='serie'><img src='seriepic/$pic' height='150px'><h3>$name<h3></a></div>";

        }
    }
    if($result1 = $conn->query($sql1)){
        while($row1 = $result1-> fetch_array(MYSQLI_BOTH)){
            $pic = $row1['picname'];
            $name = $row1['titel'];
            $id = $row1['id'];
            echo "<div><a class='numClick' Data-id='$id' Data-type='film'><img src='seriepic/$pic' height='150px'><h3>$name<h3></a></div>";

        }
    }
}else{
    $sql1 = 'SELECT * FROM films';
    $sql = "SELECT * FROM serie";
    if($result = $conn->query($sql)){
        while($row = $result-> fetch_array(MYSQLI_BOTH)){
            $pic = $row['picname'];
            $name = $row['titel'];
            $id = $row['id'];
            echo "<div><a class='numClick' Data-id='$id' Data-type='serie'><img src='seriepic/$pic' height='150px'><h3>$name<h3></a></div>";

        }
    }
    if($result1 = $conn->query($sql1)){
        while($row1 = $result1-> fetch_array(MYSQLI_BOTH)){
            $pic = $row1['picname'];
            $name = $row1['titel'];
            $id = $row1['id'];
            echo "<div><a class='numClick' Data-id='$id' Data-type='film'><img src='seriepic/$pic' height='150px'><h3>$name<h3></a></div>";

        }
    }
}
?>
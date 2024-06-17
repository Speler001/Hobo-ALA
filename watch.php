<?php include_once("titel.php"); titel("Watching | Hobo"); keywords(""); include_once("header.php");
if(isset($_SESSION['fname'])){}else{echo "<script> setTimeout(function() {location.href = 'login';}, 0);</script>";}
require('includes/dbconn.php');?>

<section class='watch'>
    <div class='epiham' id='epiham'>
    <article class = 'episodes'>
        <?php
        
$id =  $_GET['Id'];
$type = $_GET['Type'];
if($type == 'serie'){


$sql = "SELECT * FROM serie WHERE id = '$id'";

$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_BOTH);

$sname = $row['titel'];
$spic = $row['picname'];
$supload = $row['uploadd'];
$sdis = $row['description'];


$sql2 = "SELECT * FROM episodes WHERE serieid = '$id' ORDER BY season DESC";
if($result2 = $conn->query($sql2)){
    $row2 = $result2->fetch_array(MYSQLI_BOTH);
    if($result2->num_rows > 0){
        $season = $row2['season'];
        $titel = $row2['titel'];
        $filename = $row2['filename'];
    }else{ $season = '';        $titel = '';
        $titel = '';}
}
}elseif($type == 'film'){

    $sql = "SELECT * FROM films WHERE id = '$id'";

$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_BOTH);

$sname = $row['titel'];
$spic = $row['picname'];
$supload = $row['year'];
$sdis = $row['description'];
$titel = $row['titel'];
$filename = $row['filename'];
$season = '';

}

    if($type == 'serie'){
    
    $sql = "SELECT * FROM episodes WHERE serieid = '$id'";

    if($result = $conn->query($sql)){

        while($row = $result->fetch_array(MYSQLI_BOTH)){
            $epname = $row['titel'];
            $epdis = $row['description'];
            $epid = $row['id'];
            $eppic = $row['picname'];

            echo "<div class='episode'>
            <a href=''><img src='seriepic/eppic/$eppic' alt='Serie Pic'></a>
            <div>
                <a href=''>$epname</a>
                <p>$epdis</p><a class='episodewatchbutton' href=''>Watch button</a>
            </div></div>";

        }

    }
}elseif($type == 'film'){

    $sql = "SELECT * FROM films WHERE id = '$id'";

    if($result = $conn->query($sql)){

        while($row = $result->fetch_array(MYSQLI_BOTH)){
            $epname = $row['titel'];
            $epdis = $row['description'];
            $epid = $row['id'];
            $eppic = $row['picname'];

            echo "<div class='episode'>
            <a href=''><img src='seriepic/$eppic' alt='Movie Pic'></a>
            <div>
                <a href=''>$epname</a>
                <p>$epdis</p><a class='episodewatchbutton' href=''>Watch button</a>
            </div></div>";

        }

    }
}
    ?>
</article>
    </div>
    <div>
        <div>
        <h1>
        <?php echo $titel; ?>
    </h1>
    <p><?php echo $sname; ?></p>
        </div>

    <a id='hambtn' onclick='hambtn1()'><img src="icons/hamburger.png" alt="" height='60px' style='filter: invert(100%);'></a>
    </div>

    <div class="video-container">
        <video controls src="vids/<?php echo $filename; ?>"></video>
    </div>
</section>
<script>
    const hambtn = document.getElementById('hambtn');
    const hamel = document.getElementById('epiham');

    f = 0;
function hambtn1(){
    if(f == 0){
        hamel.classList.add('epiham1');
        f = 1;
    }else if( f == 1){
        hamel.classList.remove('epiham1');
        f = 0;
    }
}
</script>
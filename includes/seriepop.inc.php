<?php

require_once('dbconn.php');

$id =  $_POST['Id'];
$type = $_POST['Type'];
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
    }else{ $season = '';}
}
}elseif($type == 'film'){

    $sql = "SELECT * FROM films WHERE id = '$id'";

$result = $conn->query($sql);
$row = $result->fetch_array(MYSQLI_BOTH);

$sname = $row['titel'];
$spic = $row['picname'];
$supload = $row['year'];
$sdis = $row['description'];
$season = '';

}



?>
<div class='serieinfo'>
    <a style='margin-left: auto;' id='menuubtn'onclick='hambtn1()'><img src="icons/dots.png" alt="menu dots" height='20px' ></a>
    <div class='menuu' id= 'menuu'>
        <a href="<?php echo "delete?id=$id&type=$type";?>">Delete</a>
        <a href="<?php echo "edit?id=$id&type=$type";?>">Edit</a>
    </div>
    <div class='seriecover' style='background-image: url(seriepic/<?php echo $spic; ?>);'><div></div></div>
    <?php echo "<div><h2>$sname</h2><p>$supload.  "; if($season < 10){echo "0" . $season;}else{echo $season;} echo " seasons</p></div> <p>$sdis</P>"; ?>
    <br>
    <p>Genres:</p>
    <p class='gname'>
    <?php 


    $sql = "SELECT * FROM genserie WHERE serieid = '$id' AND `type` = '$type'";

        if($result = $conn->query($sql)){

            while($row = $result->fetch_array(MYSQLI_BOTH)){

                $gid = $row['genreid'];

                $sql1 = "SELECT * FROM genre WHERE id = '$gid' ";
                if($result1 = $conn->query($sql1)){
                    while($row1 = $result1->fetch_array(MYSQLI_BOTH)){
                        $gname = $row1['genname'];
                        echo "<l class='gname1'>$gname</l>";
                    }
                }
            }

        }
    ?>
    </p>
    <div>
        <?php 
        if($type == 'serie'){
        ?>
    <Select>
        <option value="">Season 1</option>
        <option value="">Season 2</option>
        <option value="">Season 3</option>
    </Select>
    </div>
   <?php 
        }
   ?>
    <article class = 'episodes'>
    <?php 
    if($type == 'serie'){
    
    $sql = "SELECT * FROM episodes WHERE serieid = '$id'";

    if($result = $conn->query($sql)){

        while($row = $result->fetch_array(MYSQLI_BOTH)){
            $epname = $row['titel'];
            $epdis = $row['description'];
            $epid = $row['id'];
            $eppic = $row['picname'];

            echo "<div class='episode'>
            <a href='watch?Type=serie&Id=$id'><img src='seriepic/eppic/$eppic' alt='Serie Pic'></a>
            <div>
                <a href='watch?Type=serie&Id=$id'>$epname</a>
                <p>$epdis</p><a class='episodewatchbutton' href='watch?Type=serie&Id=$id'>Watch button</a>
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
            <a href='watch?Type=film&Id=$id'><img src='seriepic/$eppic' alt='Movie Pic'></a>
            <div>
                <a href='watch?Type=film&Id=$id'>$epname</a>
                <p>$epdis</p><a class='episodewatchbutton' href='watch?Type=film&Id=$id'>Watch button</a>
            </div></div>";

        }

    }
}
    ?>
    </article>
</div>
<script>
// const hambtns = document.getElementsByClassName('menuubtn');
// const hamels = document.getElementById('menuu');

// for (let i = 0; i < hambtns.length; i++) {
//     let press = hambtns[i];
//     let target = hamels;

//     press.addEventListener('click', function() {
//         target.classList.toggle('menuu1');
//     });
// }
const hamel = document.getElementById('menuu');
f = 0;
function hambtn1(){
    
    if(f == 0){
        hamel.classList.add('menuu1');
        f = 1;
    }else if( f == 1){
        hamel.classList.remove('menuu1');
        f = 0;
    }else{
        f = 0
    }
}
</script>
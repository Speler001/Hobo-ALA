<?php include_once("titel.php"); titel("Series | Hobo"); keywords(""); include_once("header.php");
if(isset($_SESSION['fname'])){}else{echo "<script> setTimeout(function() {location.href = 'login';}, 0);</script>";}
require('includes/dbconn.php');?>


<section>
<article class='seriepop' id='seriepop'>
    
</article>
    <article class='toparticle'>
        <?php
        
        $sql = "SELECT * FROM serie ORDER BY id DESC";

        $result = $conn->query($sql);
        $row = $result->fetch_array(MYSQLI_BOTH);

        $sql1 = "SELECT * FROM serie ORDER BY id ASC";

        $result1 = $conn->query($sql1);
        $row1 = $result1->fetch_array(MYSQLI_BOTH);
        $num1 = $row1['id'];
        $num2 = $row['id'];

        $rannum = random_int($num1, $num2);

        $sql2 = "SELECT * FROM serie WHERE id = '$rannum'";
        $result2 = $conn->query($sql2);
        $row2 = $result2->fetch_array(MYSQLI_BOTH);

        $pic = $row2['picname'];
        $desc = $row2['description'];
        $titel = $row2['titel'];
        $date = $row2['uploadd'];
        $id = $row2['id'];
        echo "
        <div class='frontmovie'>
        <h1>$titel</h1>
        <p>$date</p><br>
        <p>$desc</p>
        <button><a class='numClick' Data-id='$id' Data-type='serie'>Watch!</a></button>
        </div>";
        echo "<img src='seriepic/$pic'>";
        ?>
    </article>
    
    <h2 class='cutters'>New releases</h2>

    <article class = 'belowarticle'>
        
            <?php 
            $sql = "SELECT * FROM serie ORDER BY uploadd DESC";
            if($result = $conn->query($sql)){
                while($row = $result-> fetch_array(MYSQLI_BOTH)){
                    $pic = $row['picname'];
                    $name = $row['titel'];
                    $id = $row['id'];
                    echo "<div><a class='numClick' Data-id='$id' Data-type='serie'><img src='seriepic/$pic' height='150px'><h3>$name<h3></a></div>";

                }
            }
            ?>
        
    </article>
    <h2 class='cutters'>Mix</h2>
<article class = 'belowarticle'>
        <?php 
        $sql = "SELECT * FROM serie ORDER BY id ASC";
        if($result = $conn->query($sql)){
            while($row = $result-> fetch_array(MYSQLI_BOTH)){
                $pic = $row['picname'];
                $name = $row['titel'];
                $id = $row['id'];
                echo "<div><a class='numClick' Data-id='$id' Data-type='serie'><img src='seriepic/$pic' height='150px'><h3>$name<h3></a></div>";

            }
        }
        ?>
    
</article>
<h2 class='cutters'>Crime</h2>
<article class = 'belowarticle'>
        <?php 
        $sql = "SELECT * FROM genserie WHERE genreid = 5 AND `type` = 'serie'";
        if($result = $conn->query($sql)){
            while($row = $result-> fetch_array(MYSQLI_BOTH)){
                $sid = $row['serieid'];
                $sql1 = "SELECT * FROM serie WHERE id = '$sid'";
                if($result1 = $conn->query($sql1)){
                    while($row1 = $result1->fetch_array(MYSQLI_BOTH)){

                        $pic = $row1['picname'];
                        $name = $row1['titel'];
                        $id = $row1['id'];
                        echo "<div><a class='numClick' Data-id='$id' Data-type='serie'><img src='seriepic/$pic' height='150px'><h3>$name<h3></a></div>";
                    }

                }


            }
        }
        ?>
    
</article>
<h2 class='cutters'>Horror</h2>
<article class = 'belowarticle'>
        <?php 
        $sql = "SELECT * FROM genserie WHERE genreid = 3 AND `type` = 'serie'";
        if($result = $conn->query($sql)){
            while($row = $result-> fetch_array(MYSQLI_BOTH)){
                $sid = $row['serieid'];
                $sql1 = "SELECT * FROM serie WHERE id = '$sid'";
                if($result1 = $conn->query($sql1)){
                    while($row1 = $result1->fetch_array(MYSQLI_BOTH)){

                        $pic = $row1['picname'];
                        $name = $row1['titel'];
                        $id = $row1['id'];
                        echo "<div><a class='numClick' Data-id='$id' Data-type='serie'><img src='seriepic/$pic' height='150px'><h3>$name<h3></a></div>";
                    }

                }


            }
        }
        ?>
    
</article>
<h2 class='cutters'>Drama</h2>
<article class = 'belowarticle'>
        <?php 
        $sql = "SELECT * FROM genserie WHERE genreid = 6 AND `type` = 'serie'";
        if($result = $conn->query($sql)){
            while($row = $result-> fetch_array(MYSQLI_BOTH)){
                $sid = $row['serieid'];
                $sql1 = "SELECT * FROM serie WHERE id = '$sid'";
                if($result1 = $conn->query($sql1)){
                    while($row1 = $result1->fetch_array(MYSQLI_BOTH)){

                        $pic = $row1['picname'];
                        $name = $row1['titel'];
                        $id = $row1['id'];
                        echo "<div><a class='numClick' Data-id='$id' Data-type='serie'><img src='seriepic/$pic' height='150px'><h3>$name<h3></a></div>";
                    }

                }


            }
        }
        ?>
    
</article>
<h2 class='cutters'>Romance</h2>
<article class = 'belowarticle'>
        <?php 
        $sql = "SELECT * FROM genserie WHERE genreid = 8 AND `type` = 'serie'";
        if($result = $conn->query($sql)){
            while($row = $result-> fetch_array(MYSQLI_BOTH)){
                $sid = $row['serieid'];
                $sql1 = "SELECT * FROM serie WHERE id = '$sid'";
                if($result1 = $conn->query($sql1)){
                    while($row1 = $result1->fetch_array(MYSQLI_BOTH)){

                        $pic = $row1['picname'];
                        $name = $row1['titel'];
                        $id = $row1['id'];
                        echo "<div><a class='numClick' Data-id='$id' Data-type='serie'><img src='seriepic/$pic' height='150px'><h3>$name<h3></a></div>";
                    }

                }


            }
        }
        ?>
    
</article>
<h2 class='cutters'>Detective</h2>
<article class = 'belowarticle'>
        <?php 
        $sql = "SELECT * FROM genserie WHERE genreid = 9 AND `type` = 'serie'";
        if($result = $conn->query($sql)){
            while($row = $result-> fetch_array(MYSQLI_BOTH)){
                $sid = $row['serieid'];
                $sql1 = "SELECT * FROM serie WHERE id = '$sid'";
                if($result1 = $conn->query($sql1)){
                    while($row1 = $result1->fetch_array(MYSQLI_BOTH)){

                        $pic = $row1['picname'];
                        $name = $row1['titel'];
                        $id = $row1['id'];
                        echo "<div><a class='numClick' Data-id='$id' Data-type='serie'><img src='seriepic/$pic' height='150px'><h3>$name<h3></a></div>";
                    }

                }


            }
        }
        ?>
    
</article>
<h2 class='cutters'>Comedy</h2>
<article class = 'belowarticle'>
        <?php 
        $sql = "SELECT * FROM genserie WHERE genreid = 11 AND `type` = 'serie'";
        if($result = $conn->query($sql)){
            while($row = $result-> fetch_array(MYSQLI_BOTH)){
                $sid = $row['serieid'];
                $sql1 = "SELECT * FROM serie WHERE id = '$sid'";
                if($result1 = $conn->query($sql1)){
                    while($row1 = $result1->fetch_array(MYSQLI_BOTH)){

                        $pic = $row1['picname'];
                        $name = $row1['titel'];
                        $id = $row1['id'];
                        echo "<div><a class='numClick' Data-id='$id'><img src='seriepic/$pic' height='150px'><h3>$name<h3></a></div>";
                    }

                }


            }
        }
        ?>
    
</article>
<h2 class='cutters'>Teen</h2>
<article class = 'belowarticle'>
        <?php 
        $sql = "SELECT * FROM genserie WHERE genreid = 10 AND `type` = 'serie'";
        if($result = $conn->query($sql)){
            while($row = $result-> fetch_array(MYSQLI_BOTH)){
                $sid = $row['serieid'];
                $sql1 = "SELECT * FROM serie WHERE id = '$sid'";
                if($result1 = $conn->query($sql1)){
                    while($row1 = $result1->fetch_array(MYSQLI_BOTH)){

                        $pic = $row1['picname'];
                        $name = $row1['titel'];
                        $id = $row1['id'];
                        echo "<div><a class='numClick' Data-id='$id' Data-type='serie'><img src='seriepic/$pic' height='150px'><h3>$name<h3></a></div>";
                    }

                }


            }
        }
        ?>
</article>


</section>
<script>
    let seriepopnum = document.getElementsByClassName("numClick");
    let dpop = document.getElementById('seriepop');

    for(let i = 0; i < seriepopnum.length; i++){
        let Seriepopnum = seriepopnum[i];
        let id = Seriepopnum.getAttribute("Data-id");
        let type = Seriepopnum.getAttribute("Data-type");

        Seriepopnum.addEventListener("click", function() {


            $('#seriepop').load("includes/seriepop.inc.php?serie=&id=" + id, {
                Id : id,
                Type: type
            }, function() {
        // This callback is executed after the content is loaded
        displayflex();
    })  
        })
    };
    
    dpop.addEventListener("dblclick", function(){ddisplayflex();})
</script>

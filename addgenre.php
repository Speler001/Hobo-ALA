<?php include_once("titel.php"); titel("Addgenre | Hobo"); keywords("");
    include_once('header.php');
    include_once('headerad.php');
    require_once('includes/dbconn.php');
if(isset($_SESSION['fname'])){}else{echo "<script> setTimeout(function() {location.href = 'login';}, 0);</script>";} 

$type = $_GET['type'];
?>
<section style="height: 100vh; width: 100%; background: url(./icons/background.jpg) no-repeat ; background-size: cover; background-position: center center; margin-left: 0;">

<section class='forms'>
    <a href="index"><img src="icons/LOGO.png" alt=""></a>
    <form>
        <p>Add genre</p>
        <input type="text" name='type' id='type' value='<?php echo $type; ?>' style='display:none;'>
        <select name="genre" id="genre">
            <?php
            
            $sql ="SELECT * FROM genre";
            if(isset($_GET['genre'])){ $genre = $_GET['genre'];}else{$genre = '';}

            if($result = $conn->query($sql)){
                while($row = $result->fetch_array(MYSQLI_BOTH)){
                    $name = $row['genname'];
                    $id = $row['id'];
                    echo "<option value='$id' "; if(!empty($genre)){if($genre == $id){echo "SELECTED";}}  echo ">$name</option>";
                }
            }
            ?>
            
        </select>
        <input type="text" name='serieid' id='serieid' value='<?php if(isset($_GET['serieid'])){echo $_GET['serieid'];} ?>' style='display:none;'>
        <button id="updateSession">Add</button>
    </form>
</section>
</section>
<script>
$(document).ready(function() {
    $("#updateSession").click(function() {
        var selectedGenre = $("#genre").val();
        var selectedSenre = $("#serieid").val();
        var selectedIenre = $("#type").val();
        $.ajax({
            type: "POST",
            url: "includes/addgenre.inc.php",
            data: { genre: selectedGenre, serieid: selectedSenre, type: selectedIenre },
            success: function(response) {
                console.log("Session updated: " + response);
                alert(response);
            }
        });
    });
});
</script>
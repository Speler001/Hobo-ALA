<?php include_once("titel.php"); titel("Addmovie | Hobo"); keywords("");
    include_once('header.php');
if(isset($_SESSION['fname'])){}else{echo "<script> setTimeout(function() {location.href = 'login';}, 0);</script>";} ?>
<section>
<article class='seriepop' id='seriepop'>
    
    </article>
    <input type="text" placeholder="Search..." class="searchbtn" style="position: relative; left: 20px; box-shadow: 0 4px 1px -1px darkgreen; width: 98.5%; height: 40px; border-radius: 1px; border: 1px solid #ccc; padding: 0 15px; font-size: 16px; outline: none; transition: all 0.3s ease;" id="search">
<article class = 'belowarticle search' id='searchctn'>
<?php
require_once('includes/dbconn.php');

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

?>
</article>
</section>
<script>
        $(document).ready(function() {
  function Search() {
    var search = $('#search').val();
    console.log(search);
    $("#searchctn").load("includes/search.inc.php?search", {
      searchs: search
    });

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

  }

  $('#search').on('input', Search);
});

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
<style>
    .searchbtn::placeholder {
        color: #aaa;  /* Placeholder text color */
        font-style: italic;  /* Italicized placeholder text */
    }

    .searchbtn:focus {
        border-color: #007BFF;  /* Border color on focus */
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);  /* Shadow effect on focus */
    }

    .searchbtn:hover {
        border-color: #007BFF;  /* Border color on hover */
    }
</style>
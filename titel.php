<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icons/LOGO1.png">

<?php
function keywords($Key){
    $key = $Key;
    if(!empty($key)){
        echo "<meta name='keywords' content='$key'>";
    }else{
        echo "<meta name='keywords' content='Hobo Movies Films Series Netflix Aflevering Episode Video Minuten Uren'>";
    }
    
};
function titel($Titel){
    $titel = $Titel;
    if(!empty($titel)){
        echo "<title>$titel</title>";
    }else{
        echo "<title>Hobo</title>";
    }
    
};
session_start();
?>
    <script src="css-js/script.js"></script>
    <link rel="stylesheet" href="css-js/style.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="  crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
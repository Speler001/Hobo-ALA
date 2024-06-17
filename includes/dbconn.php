<?php
$servername = "Localhost";
$username = "root";
$password = "";
$database = "hobonew";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn -> connect_error) {
    die("connection faild: ".$conn -> connect_error);
}
?>
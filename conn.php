<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CS230";	

$conn = new mysqli($servername,$username,$password,$dbname) or die(mysqli_error());
?>
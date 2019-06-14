<?php

include 'conn.php';

header("Location: template.php");
$creator = mysqli_real_escape_string($conn, $_POST['creator']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$type = mysqli_real_escape_string($conn, $_POST['type']);
$identifier = mysqli_real_escape_string($conn, $_POST['identifier']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$language = mysqli_real_escape_string($conn, $_POST['language']);
$description = mysqli_real_escape_string($conn, $_POST['description']);

$sql = "INSERT INTO eBook_MetaData (creator,title,type,identifier,date,language,description) VALUES('$creator','$title','$type','$identifier','$date','$language','$description');";	


?>
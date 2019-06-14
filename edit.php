<?php 

include 'Style.php';
include 'conn.php';

$sqli = "SELECT * FROM eBook_MetaData WHERE id='".$_POST['id']."' ";
$result = mysqli_query($conn,$sqli);
$row = mysqli_fetch_assoc($result);



 ?>
	<?php
	include 'conn.php';
	$sqli = 'SELECT * FROM eBook_MetaData;';
$result = mysqli_query($conn,$sqli);
$resultCheck = mysqli_num_rows($result);
?>
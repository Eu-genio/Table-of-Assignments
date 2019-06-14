<?php include 'Style.php';?>

<!DOCTYPE> <head>
<title>eBook_MetaData</title>
<table class ="Library" align = "center">

<thead>

<tr>
<th>ID(Not Editable)</th>
<th>Creator</th>
<th>Title</th>
<th>Type</th>
<th>Identifier</th>
<th>Date</th>
<th>Language</th>
<th>Description</th>
<th>Operations</th>
<th>Operations</th>
<th>
</tr>
</thead>

<tbody>
<tr>
	<form method = "POST">
	<td name = 'id'></td>
    <td><input name = 'creator' type = "text" placeholder="-"></td>
	<td><input name = 'title' type = "text" placeholder="-"></td>
	<td><select name = "type">
    	<option value="Fiction" selected>Fiction</option>
    	<option value="Non-Fiction">Non-Fiction</option>
    	<option value="Young Adult">Young Adult</option>
    	<option value="Romance">Romance</option>
    </select>
    </td>
	<td><input name = 'identifier' type = "text" placeholder="-"></td>
	<td><input name = 'date' type = "text" placeholder="yyyy-mm-dd"></td>
	<td><select name = "language">
    	<option value="English" selected>English</option>
    	<option value="Italian">Italian</option>
    	<option value="French">French</option>
    	<option value="Spanish">Spanish</option>
    </select>
    </td>
	<td><input name = 'description'type = "text" placeholder="-"></td>
	<td><button type = "submit" name = "AddRow">Create Row</button></td>
	<td><button type= "submit" name ="ShowTable">Retrieve Table</button></td>
</form>
</tr>

<?php
if(isset($_POST["AddRow"]))
{
include 'conn.php';
include 'AddRow.php';
mysqli_query($conn, $sql);
}
 ?>
<?php 
if(isset($_POST["ShowTable"])){
include 'ShowTable.php';
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<form method = 'POST'>";
        echo "<td><input type = 'hidden'name = 'id' value = '". $row['id'] ."'>". $row['id'] . "</td>";

        echo "<td><input name = 'creator' type = 'text' value='". $row['creator'] . "'></td>";

        echo "<td><input name = 'title' type = 'text' value='". $row['title'] . "'></td>";

        echo "<td><select name = 'type'>
        <option selected>".$row['type']."</option>
        <option value='Fiction'>Fiction</option>
        <option value='Non-Fiction'>Non-Fiction</option>
        <option value='Young Adult'>Young Adult</option>
        <option value='Romance'>Romance</option>        
        </select></td>";

        echo "<td><input name = 'identifier' type = 'text' value='". $row['identifier'] . "'></td>";
        echo "<td><input name = 'date' type = 'text' value='". $row['date'] . "'></td>";

        echo "<td><select name = 'language'>
        <option value = '".$row['language']."' selected>".$row['language']."</option>
        <option value = 'English'>English</option>
        <option value = 'Italian'>Italian</option>
        <option value = 'French'>French</option>
        <option value = 'Spanish'>Spanish</option>
        </select></td>";

        echo "<td><input name = 'description' type = 'text' value='". $row['description'] . "'></td>";
        echo "<td><button type = 'submit' name='update' >Update</button></td>";
        echo "<td><button type = 'submit' name='delete' >Delete</button></td>";
        echo "</form>";
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}
?>

<?php
if(isset($_POST['delete'])){
    include 'conn.php';

    $id = mysqli_real_escape_string($conn, $_POST['id']);

    mysqli_query($conn,"DELETE FROM eBook_MetaData WHERE ID = ".$id." ");
}
?>

<?php 
if(isset($_POST['update'])){
include 'conn.php';

$id = mysqli_real_escape_string($conn, $_POST['id']);
$creator = mysqli_real_escape_string($conn, $_POST['creator']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$type = mysqli_real_escape_string($conn, $_POST['type']);
$identifier = mysqli_real_escape_string($conn, $_POST['identifier']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$language = mysqli_real_escape_string($conn, $_POST['language']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
mysqli_query($conn,"UPDATE ebook_metadata SET creator='".$creator."', title='".$title."', type='".$type."', identifier='".$identifier."', date='".$date."', language='".$language."', description='".$description."' WHERE id=".$id."") or die(mysql_error()); 
}
?>

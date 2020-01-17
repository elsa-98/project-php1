<?php session_start();?>
<?php
require_once"facultybase.php";
require_once"connection.php";

$result=mysqli_query($conn,"SELECT * from add_faculty WHERE id='".$_SESSION["id"]."'");
?>
<table border='4'>
	<tr>
	<th>NAME</th>
	<th>EMAIL</th>
	<th>MOBILENO</th>
	<th>QUALIFICATION</th>
	<th>BATCH CHARGE</th>
	<th>USERNAME</th>
	<th>PASSWORD</th>
	</tr>
	<?php
while($row=mysqli_fetch_assoc($result))
{
	echo"<tr>";
		echo "<td>"."{$row['name']}"."</td>";
		echo "<td>"."{$row['email']}"."</td>";
		echo "<td>"."{$row['mobileno']}"."</td>";
		echo "<td>"."{$row['qualification']}"."</td>";
		echo "<td>"."{$row['batchincharge']}"."</td>";
		echo "<td>"."{$row['username']}"."</td>";
		echo "<td>"."{$row['password']}"."</td>";
		echo "</tr>";
		
	echo "</table>";
}
?>
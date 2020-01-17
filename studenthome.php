<?php
include("studentbase.php");
require_once"connection.php";
session_start();
$result=mysqli_query($conn,"SELECT * from add_student WHERE id='".$_SESSION["id"]."'");
?>
<table border='4'>
	<tr>
	<th>NAME</th>
	<th>DOB</th>
	<th>GENDER</th>
	<th>EMAIL</th>
	<th>MOBILENO</th>
	<th>QUALIFICATION</th>
	<th>BATCH</th>
	<th>USERNAME</th>
	<th>PASSWORD</th>
	</tr>
	<?php
while($row=mysqli_fetch_assoc($result))
{
	echo"<tr>";
		echo "<td>"."{$row['name']}"."</td>";
		echo "<td>"."{$row['dob']}"."</td>";
		echo "<td>"."{$row['gender']}"."</td>";
		echo "<td>"."{$row['email']}"."</td>";
		echo "<td>"."{$row['mobileno']}"."</td>";
		echo "<td>"."{$row['qualification']}"."</td>";
		echo "<td>"."{$row['batch']}"."</td>";
		echo "<td>"."{$row['username']}"."</td>";
		echo "<td>"."{$row['password']}"."</td>";
		echo "</tr>";
		
	echo "</table>";
}
?>
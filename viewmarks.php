<?php
include("connection.php");
include("studentbase.php");
session_start();
$result=mysqli_query($conn,"SELECT * from assessment WHERE id='".$_SESSION["id"]."'");
?>
	
<table border='4'>
	<tr>
	<th>NAME</th>
	<th>BATCH</th>
	<th>ASSESSNO</th>
	<th>SUB1</th>
	<th>SUB2</th>
	<th>SUB3</th>
	<th>SUB4</th>
	<th>MAXMARKS</th>
	
	</tr>
	<?php
		while($row = mysqli_fetch_array($result))
		{
			echo"<tr>";
		echo "<td>"."{$row['name']}"."</td>";
		echo "<td>"."{$row['batch']}"."</td>";
		echo "<td>"."{$row['assessno']}"."</td>";
		echo "<td>"."{$row['sub1']}"."</td>";
		echo "<td>"."{$row['sub2']}"."</td>";
		echo "<td>"."{$row['sub3']}"."</td>";
		echo "<td>"."{$row['sub4']}"."</td>";
		echo "<td>"."{$row['maxmark']}"."</td>";
		echo "</tr>";
		}
	echo "</table>";
	mysqli_close($conn);
	?>
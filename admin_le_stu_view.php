
<?php
session_start();
?>
<?php
include("connection.php");
include("facultybase.php");
$result=mysqli_query($conn,"SELECT * from stuleave WHERE id='".$_SESSION["id"]."'");
?>

<table border='4'>
	<tr>
	<th>NAME</th>
	<th>LEAVEID</th>
	<th>REASON</th>
	<th>STATUS</th>
	</tr>
	<?php
		while($row = mysqli_fetch_array($result))
		{
			echo"<tr>";
		echo "<td>"."{$row['name']}"."</td>";
		echo "<td>"."{$row['leaveid']}"."</td>";
		echo "<td>"."{$row['reason']}"."</td>";
		echo "<td>"."{$row['status']}"."</td>";
		echo "</tr>";
		}
	echo "</table>";
	mysqli_close($conn);
	?>
	<form action="sapproving.php" method="post">
	<input type="text" placeholder="id" name="leaveid">
	<input type="submit" placeholder="approve" value="approve" name="approve">
	</form>
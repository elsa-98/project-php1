<?php
require_once'connection.php';
	$name=$_POST['name'];
	$batch=$_POST['batch'];
	$hour1=$_POST['hour1'];
	$hour2=$_POST['hour2'];
	$hour3=$_POST['hour3'];
	$hour4=$_POST['hour4'];
	
	
if(isset($_POST['submit']))
{
	$sq="INSERT INTO attendance(name,batch,hour1,hour2,hour3,hour4)VALUES ('".$name."','".$batch."','".$hour1."','".$hour2."','".$hour3."','".$hour4."')";
		if(!$result = $conn->query($sq))
		{
			die('there was an error running in the query ['.$conn->error.']');
		}
		else
		{
			echo "thank you";
		}
	mysqli_close($conn);
}
?>
			

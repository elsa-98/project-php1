<?php
require_once'connection.php';
	$name=$_POST['name'];
	$batch=$_POST['batch'];
	$assessno=$_POST['assessno'];
	$sub1=$_POST['sub1'];
	$sub2=$_POST['sub2'];
	$sub3=$_POST['sub3'];
	$sub4=$_POST['sub4'];
	$maxmark=$_POST['maxmark'];
	
if(isset($_POST['submit']))
{
	$sq="INSERT INTO assessment(name,batch,assessno,sub1,sub2,sub3,sub4,maxmark)VALUES ('".$name."','".$batch."','".$assessno."','".$sub1."','".$sub2."','".$sub3."','".$sub4."','".$maxmark."')";
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
			

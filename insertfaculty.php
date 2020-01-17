<?php
require_once'connection.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobileno=$_POST['mobileno'];
	$qualification=$_POST['qualification'];
	$batchincharge=$_POST['batchincharge'];
	$username=$_POST['username'];
	$password=$_POST['password'];
if(isset($_POST['submit']))
{
	$sq="INSERT INTO add_faculty(name,email,mobileno,qualification,batchincharge,username,password)VALUES ('".$name."','".$email."','".$mobileno."','".$qualification."','".$batchincharge."','".$username."','".$password."')";
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
			

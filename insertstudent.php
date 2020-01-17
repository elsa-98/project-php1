<?php
require_once'connection.php';
	$name=$_POST['name'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$mobileno=$_POST['mobileno'];
	$qualification=$_POST['qualification'];
	$batch=$_POST['batch'];
	$username=$_POST['username'];
	$password=$_POST['password'];
if(isset($_POST['submit']))
{
	$sq="INSERT INTO add_student(name,dob,gender,email,mobileno,qualification,batch,username,password)VALUES ('".$name."','".$dob."','".$gender."','".$email."','".$mobileno."','".$qualification."','".$batch."','".$username."','".$password."')";
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
			

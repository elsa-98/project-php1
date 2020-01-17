<?php
include("connection.php");
if(isset($_POST['submit']))
{

	$username=$_POST['username'];
	$password=$_POST['password'];
	$sqs="select * from add_student WHERE username='".$username."' and password='".$password."'";
	$result=mysqli_query($conn,$sqs);
	if(mysqli_num_rows($result)>0)
	{
		header("location:studenthome.php");
	}
	else
	{
		echo "failed";

	}

}
?>
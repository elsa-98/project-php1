<?php
include("connection.php");
if(isset($_POST['submit']))
{

	$username=$_POST['username'];
	$password=$_POST['password'];
	$sqs="select * from add_faculty WHERE username='".$username."' and password='".$password."'";
	$result=mysqli_query($conn,$sqs);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			session_start();
			$_SESSION["id"]=$row["id"];
			header('location:faculty_home.php');
		}
		
	}
	else
	{
		echo "failed";

	}

}
?>
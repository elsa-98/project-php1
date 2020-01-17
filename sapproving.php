<?php
include("connection.php");
if(isset($_POST['approve']))
{
	$id=$_POST['leaveid'];
	$sql="UPDATE stuleave SET status='Approved' where leaveid='".$id."'";
	if(mysqli_query($conn,$sql))
	{
		require_once "admin_le_stu_view.php";
	}
}
?>
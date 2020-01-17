<?php
include("connection.php");
if(isset($_POST['approve']))
{
	$id=$_POST['leaveid'];
	$sql="UPDATE facleave SET status='Approved' where leaveid='".$id."'";
	if(mysqli_query($conn,$sql))
	{
		require_once "admin_le_fac_view.php";
	}
}
?>
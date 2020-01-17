<?php 
include("facultybase.php");
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
							
							
							<form action="insertstuleave.php" name="login" method="post" class="m-auto py-3   p-3 form-style rounded">

							
								Student Name:<input type="text" class="frm" name="name" >
								Leaveid :<input type="text" class="frm" name="leaveid">
								Reason:<input type="text" class="frm" name="reason" >
								status:<input type="text" class="frm" name="status" readonly value="pending" required="required" >
								
								
								
							<button type="submit" name="submit" class="btn-primary mt-md-3 px-5 rounded shadow">Submit</button>
								

						</form>

</body>
</html>

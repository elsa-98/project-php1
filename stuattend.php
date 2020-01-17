<?php 
include("facultybase.php");
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
							
							
							<form action="insertattend.php" name="login" method="post" class="m-auto py-3   p-3 form-style rounded">

							
								Student Name:<input type="text" class="frm" name="name" >
								Batch :<input type="text" class="frm" name="batch">
								Hour1:<input type="text" class="frm" name="hour1" >
								Hour2:<input type="text" class="frm" name="hour2">
								Hour3:<input type="text" class="frm" name="hour3">
							    Hour4:<input type="text" class="frm" name="hour4">
								
								
							<button type="submit" name="submit" class="btn-primary mt-md-3 px-5 rounded shadow">Submit</button>
								

						</form>

</body>
</html>

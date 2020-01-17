<?php 
include("facultybase.php");
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
							
							
							<form action="insertstudent.php" name="login" method="post" class="m-auto py-3   p-3 form-style rounded">

							
								Student Name:<input type="text" class="frm" name="name" >
								dob:<input type="text" class="frm" name="dob" >
								Gender:<input type="text" class="frm" name="gender" >
								Email:<input type="text" class="frm" name="email">
								Mobileno:<input type="text" class="frm" name="mobileno">
							    Qualification:<input type="text" class="frm" name="qualification">
								Batch :<input type="text" class="frm" name="batch">
								username:<input type="text" class="frm" name="username">
								password:<input type="text" class="frm" name="password">
							<button type="submit" name="submit" class="btn-primary mt-md-3 px-5 rounded shadow">Submit</button>
								

						</form>

</body>
</html>

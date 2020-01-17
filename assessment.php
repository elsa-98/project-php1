<?php 
include("facultybase.php");
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
							
							
							<form action="insertassess.php" name="login" method="post" class="m-auto py-3   p-3 form-style rounded">

							
								Student Name:<input type="text" class="frm" name="name" >
								Batch :<input type="text" class="frm" name="batch">
								Assessmentno:<input type="text" class="frm" name="assessno" >
								Sub1:<input type="text" class="frm" name="sub1">
								Sub2:<input type="text" class="frm" name="sub2">
							    Sub3:<input type="text" class="frm" name="sub3">
								Sub4:<input type="text" class="frm" name="sub4">
								Max mark:<input type="text" class="frm" name="maxmark">
								
								
							<button type="submit" name="submit" class="btn-primary mt-md-3 px-5 rounded shadow">Submit</button>
								

						</form>

</body>
</html>

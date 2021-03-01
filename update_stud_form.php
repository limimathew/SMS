<?php
$mysql=mysqli_connect("localhost","root","","studentmngsys");
if($mysql===false)
{
	die("Error.OCcured".mysqli_connect_error());
}
?>
<html>
<head>
	<style>
	background-image: url('imgages.jfif');
	</style>
</head>
<body>

	<?php
		$id=$_GET['id'];
		$query="select * from stud_details where id=$id";
		$result=mysqli_query($mysql,$query);
		$row=mysqli_fetch_assoc($result);
			
	?>
<form action="update_data.php" method="post">
  <h1>Update Form</h1>
  <input type="hidden" name="id" value="<?php echo $row['id'];?>"></br>
  <label>Student name:</label></br>
  <input type="text" name="name" value="<?php echo $row['name'];?>"></br>
  <label>student rollno:</label><br>
  <input type="text" name="rollno" value="<?php echo $row['rollno'];?>"></br>
   <label for="address">Address:</label><br>
  <input type="text" id="address" name="address" value="<?php echo $row['address'];?>"></br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" value="<?php echo $row['email'];?>"></br></br>
  
  <input type="submit" value="Update">
</form> 
	
</body>
</html>
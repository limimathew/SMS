<!DOCTYPE html>
<?php
$mysql=mysqli_connect("localhost","root","","studentmngsys");
if($mysql===false)
{
	die("Error.OCcured".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<body>
​
<h2>Student details Forms</h2>
​
<form action="insertdata.php" method="post">
  <label for="name">Student name:</label><br>
  <input type="text" id="name" name="name" placeholder="Name"><br>
  <label for="rollno">student rollno:</label><br>
  <input type="text" id="rollno" name="rollno" placeholder="Rollnumber"><br>
   <label for="address">Address:</label><br>
  <input type="text" id="address" name="address" placeholder="Address"><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" placeholder="Email"><br><br>
  
  <input type="submit" value="Submit">
</form> 

</body>
</html>
​

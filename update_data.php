<?php
$mysql=mysqli_connect("localhost","root","","studentmngsys");
if($mysql===false)
{
	die("Error:could not connet".mysqli_connect_error());
}
$id=$_POST['id'];
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$address=$_POST['address'];
$email=$_POST['email'];
		 $query="update stud_details set name='$name',rollno=$rollno,address='$address',
                 email='$email' where id=$id";
		 if(mysqli_query($mysql,$query))
		 {
			header("Location:selectdata.php");
		 }
		 else
		 {
			 echo "Error: $query".mysqli_error($mysql);
		 }
		 mysqli_close($mysql);
?>
		
		

<?php
$mysql=mysqli_connect("localhost","root","","studentmngsys");
if($mysql===false)
{
	die("Error:could not connet".mysqli_connect_error());
}
     $id=$_GET['id'];
	 $query="delete from  stud_details  where id=$id";
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
		
		

<?php
$mysql=mysqli_connect("localhost","root","","studentmngsys");
if($mysql===false)
{
	die("Error.OCcured".mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
	
	h1{
		text-align:center;
		
	}
	table,th,td{
	   margin-left:30px;
	   border:2px solid #00ff00;
	   border-collapse:collapse;
	   padding:10px;
	   text-align:center;
	   width:500px;
	   height:50px;
	  
   }
  div{
	backgroundcolor:gray;
  }
   
</style>
</head>
<body>
<div>
<form method="get" action="#">
<table>
<h1>Student details</h1>
<a  href="stdform.php"><h3>Insert new student</h3></a>
<thead>
 <tr>
  <th>sl No</th>
  <th>Student Name</th>
  <th>Student Rollno</th>
  <th>Student Address</th>
  <th>Student Email</th>
  <th>Action</th>
 </tr>
</thead>
<tbody>
<?php
$query="select * from stud_details";
$result=mysqli_query($mysql,$query);

if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>
				<td>".$row['id']."</td>
				<td>".$row['name']."</td>
				<td>".$row['rollno']."</td>
				<td>".$row['address']."</td>
				<td>".$row['email']."</td>
				<td><a href='update_stud_form.php?id=".$row['id']."'>Update</a>/
				    <a href='delete_stud.php?id=".$row['id']."'>Delete</a></td>
			  </tr>";
	}
}
else
{
	echo "no result";
}
mysqli_close($mysql);
?>
</tbody>
</table>
<form>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		table td,th{
		 padding:10px;


		}
		.po {
  position: absolute;
  top: 80px;
  right:220px;
}
	</style>
</head>
<body>
	<h1> Candiates registartion</h1>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Father Name</th>
			<th>Gender</th>
			<th>AAdhar Number</th>
			<th>Mobile</th>
			<th>Email</th>
		</tr>
			

<?php
error_reporting(0);
require 'connect.php';

$query="SELECT * FROM  sform2 ORDER BY id DESC LIMIT 3";
$result=mysqli_query($mycon,$query);
while ($row = mysqli_fetch_assoc($result)) 
{
	 ?>
	<tr>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['Fname']?></td>
		<td><?php echo $row['selc3']?></td>
		<td><?php echo $row['Adhno']?></td>
		<td><?php echo $row['mobile']?></td>
		<td><?php echo $row['email']?></td>
		
	</tr>
	<?php
}


?>
<table border="1" class="po"><br><br>
		<tr>
			
			<th>ID</th>
			<th>Pass Type</th>
			<th>Source</th>
			<th>Destination</th>
			<th>Date</th>
			<th>Date</th>
			<th>amount</th>
		</tr>


<?php
require 'connect.php';

$query="SELECT * FROM  sform3 ORDER BY id DESC LIMIT 3" ;
$result=mysqli_query($mycon,$query);
while ($row = mysqli_fetch_array($result)) 
	
{
	 ?>
	<tr class="dg">
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['secl5']?></td>
		<td><?php echo $row['place1']?></td>
		<td><?php echo $row['place2']?></td>
		<td><?php echo $row['dob1']?></td>
		<td><?php echo $row['dob2']?></td>
		<td><?php echo $row['amount']?></td>

		
</tr>
	<?php
}


?>
</table>
</table>
<button><a href="Admin.php">Back</a></button>
</body>
</html>
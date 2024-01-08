<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Father Name</th>
			<th>Gender</th>
			<th>AAdhar Number</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Pass Type</th>
			<th>Source</th>
			<th>Destination</th>
			<th>Date</th>
			<th>Date</th>
			<th>amount</th>

<?php
require 'connect.php';

$query="SELECT * FROM  form1 f1, form3 f3 where f1.id=f3.id";
$result=mysqli_query($mycon,$query);
while ($row=mysqli_fetch_assoc($result)) 
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
		<td><?php echo $row['selc5']?></td>
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
</body>
</html>



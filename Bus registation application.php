<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Application</title>
	<style type="text/css">
		body{
			background-color:#ccc;
            height:100vh;
		}
		fieldset{
			padding:10px;
			height:50%;
			width: 50%;
			background-color:white;
			border-radius:10px;
			opacity:0.9;
			border:1px solid #30475e;

		}
		legend
		{
			border: 1px solid blue;
			background-color:dodgerblue;
			border-radius:4px;
		    font-family: sans-serif;
		    background-size:cover;
			border-radius:8px;
			border:1px solid #30475e;
		}
		table th,td{
			
			padding: 10px;
			border:none;
		}
		input[type="text"],input[type="number"],input[type="date"],input[type="radio"],input[type="email"]{
			padding:5px;
			width:180%;
		}
		input[type="submit"]{
			padding: 10px;
			border: 2px solid blue;
			border-radius:4px;
			cursor:pointer;
		}
		select{
			padding:10px;
			width:185%;

		}
		h2{
			padding:20px;
		}
		input[type="file"]{
			padding:5px;
			width:180%;

		}
		select.dis{
			padding:10px;
			width:150%;
		}
		input.man{
			padding:10px;
			width:150%;
		}
		textarea.area{
			padding:50px;
		}
	</style>
</head>
<body>
	<div><h1 align="center" style="color:blue">BUS REGISTRATION APPLICATION</div>
<div>
	<center>
		<form method="post">
	<fieldset>
		<legend>Student 10th Details </legend>
		<table>
			<tr>
				<th>SSC Board Type</th><th><select name="selc1">
					<option>--select--</option>
					<option>AP SSC</option>
					<option>CBSC</option>
					<option>ICSE</option>
					<option>ORIENTAL</option>
					<option>APOS</option>
					<option>OTHER BOARD</option>
                     </select>

				</th>
			</tr> 
				<tr>
				<th>SSC Regular/Supplementary</th><th><select name="selc2">
					<option>--select--</option>
					<option>Regular</option>
					<option>Supplementary</option></select></th>
					<tr>
					<th>SSC Yearof Pass</th><th><input type="text"nam="sscyear"></th>
				</tr>
				<tr>
					<th>SSC Hall Ticket</th><th><input type="text"nam="sschall"></th>
				</tr>
				<tr>
					<th>Date of Birth</th><th><input type="date"nam="date"></th>
				</tr>

		</table>
	</fieldset>
	<fieldset>
		<legend>Student 10th Details </legend>
		<table>
			<tr>
				<th>Name</th><th><input type="text" name="name"></th>
			</tr>
			<tr>
				<th>Father's/Guardian's Name</th><th><input type="text" name="Fname"></th>
			</tr>
			<tr>
				<th>Gender<th><select name="selc3">
					<option>--select--</option>
		 			<option value="male">Male</option>
		 			<option value="female">Female</option>
		 		</select></th></th>
			</tr>
			<tr>
				<th>AAdhaar No</th><th><input type="text" name="Adhno"></th>
			</tr>
			<tr>
				<th>Mobile NO</th><th><input type="number" name="mobile"></th>
			</tr>
			<tr>
				<th>Email</th><th><input type="text" name="email"></th>
			</tr>

		</table>
	</fieldset>
	<fieldset>
		<legend>Address Details</legend>
		<table>
			<tr><th>Photo</th><th><input type="file" name="image"></th></tr>
			<tr>
				<th>Distric<th><select class="dis" name="selc4">
					<option value="12">ANANTAPUR</option>
                 <option value="10">CHITTOOR</option>
                 <option value="4">EAST GODAVARI</option>
                 <option value="7">GUNTUR</option>
                 <option value="11">KADAPA</option>
                 <option value="22">KHAMMAM</option>
                 <option value="6">KRISHNA</option>
                 <option value="13">KURNOOL</option>
                 <option value="9">NELLORE</option>
                 <option value="8">PRAKASAM</option>
                 <option value="1">SRIKAKULAM</option>
                 <option value="3">VISAKHAPATNAM</option>
                 <option value="5">WEST GODAVARI</option>
				</select></th></th>
			</tr>
			<tr>
				<th>Mandal</th><th><input class="man" type="text" name="Mandal"></th>
			</tr>
			<tr>
				<th>Village</th><th><input class="man" type="text" name="village"></th>
			</tr>
			<tr>
				<th>Addresss</th><th><textarea class="area" name="addre"></textarea></th>
			</tr>
		</table>
	</fieldset>
	<fieldset>
		<legend>Institution  Details </legend>
		<table>
			<tr>
				<th>Institution Name</th><th><input type="text" name="iname"></th></tr><tr>
				<th>Course Name</th><th><input type="text" name="cname"></th></tr>
				<tr>
				<th>Admission No</th><th><input type="text" name="Adno"></th></tr>
				<tr>
				<th>Distric</th><th><input type="text" name="distric"></th></tr>
				<tr>
				<th>Madal</th><th><input type="text" name="imandal"></th></tr>
			</tr>
			<tr>
				<th>Addresss</th><th><textarea name="iaddress"></textarea></th>
		</table>
	</fieldset>
	<fieldset>
		<legend>Route  Details </legend>
		<table>
			<tr><th>PassType</th><th><select name="selc5"><option>---select--</option>
				<option>Monthly</option>
				<option>Quatarly</option>
				<option>Yearly</option></th></select></tr>
				<tr>
					<th>Route</th><th><input type="text" placeholder="start" name="place1"></th></tr>
					<tr>
					<th>Route</th><th><input type="text" placeholder="Destination" name="palce2"></th></tr>
                <tr>
					<th>Start-Date</th><th><input type="Date" placeholder="start" name="dob1"></th></tr>
					<tr>
					<th>End-Date</th><th><input type="Date" placeholder="Destination" name="dob2"></th></tr>

		</table>
	</fieldset>
	</form>
</center>
</div>
<div><center><input type="submit" value="submit" name="submit"></center></div>
<?php
require 'connect.php';
if(isset($_POST['submit']))
{
	$selc1=$_POST['selc1'];
	$selc2=$_POST['selc2'];
	$sscyear=$_POST['sscyear'];
	$sschall=$_POST['sschall'];
	$date=$_POST['date'];
	

	$query = "INSERT INTO  `studentpass` VALUES (Null,'$selc1','$selc2','$sscyear','$sschall','$date')";
		
		if(mysqli_query($mycon,$query))
		{
			echo '<h2>data inserted</h2>';
		}
		else
		{
			echo '<h2> please try again</h2>';
		}

}
?>


</body>
</html>
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
			height:70%;
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
		button{
			padding:20px;
	width:150px;
	background-color:#C8BFE7;
	color:black;+
	padding:10px;
	text-anchor:none;
	border-radius:6px;
	border:none;
		}
	</style>
</head>
<body>
	
		
	
	<div><h1 align="center" style="color:blue">BUS REGISTRATION APPLICATION</div>
		
<div id="login-popup">
	<center>
		<form method="post" >

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
				<th>Gender<th><select name="selc3" required>
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
         <tr>
         <th><button type="submit"  name="submit">submit</button></th><th><button><a href="click.php">Back</a></button></th>
         </tr>
		</table>
	</tr>
</table>
</fieldset>
</form>
</center>
</div>
</h1>
</div>
<?php
	require 'connect.php';
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$Fname=$_POST['Fname'];
        $selc3=$_POST['selc3'];
		$Adhno=$_POST['Adhno'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$query ="INSERT INTO  `form1`   (`id`,`name`,`Fname`,`selc3`,`Adhno`,`mobile`,`email`) VALUES (NULL,'$name','$Fname','$selc3','$Adhno','$mobile','$email')";
		
		if(mysqli_query($mycon,$query))
		{
			echo "<script>
			alert('DATA INSETRED SUCEESFULLY'); </script>";
		}
		else
		{
			echo '<h2> please try again</h2>';
		}
	}
	?>
	
</body>
</html>
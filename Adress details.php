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
			height:90%;
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
			
			padding:10px;
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
	
		
	
	<div><h1 align="center" style="color:blue">BUS PASS REGISTRATION APPLICATION</div>
		
<div id="login-popup">
	<center>
		<form method="post" enctype="multipart/from-data">

	<fieldset>
		<legend>Address Details</legend>
		<table>
			
			<tr>
				<th>Distric<th><select class="dis" name="selc4">
					<option value="ANANTAPUR">ANANTAPUR</option>
                 <option value="CHITTOOR">CHITTOOR</option>
                 <option value="EAST GODAVARI">EAST GODAVARI</option>
                 <option value="GUNTUR">GUNTUR</option>
                 <option value="KADAPA">KADAPA</option>
                 <option value="KHAMMAM">KHAMMAM</option>
                 <option value="KRISHNA">KRISHNA</option>
                 <option value="KURNOOL">KURNOOL</option>
                 <option value="NELLORE">NELLORE</option>
                 <option value="PRAKASAM">PRAKASAM</option>
                 <option value="SRIKAKULAM">SRIKAKULAM</option>
                 <option value="VISAKHAPATNAM">VISAKHAPATNAM</option>
                 <option value="WEST GODAVARI">WEST GODAVARI</option>
				</select></th></th>
			</tr>
			<tr>
				<th>Mandal</th><th><input class="man" type="text" name="Mandal"></th>
			</tr>
			<tr>
				<th>Village</th><th><input class="man" type="text" name="village"></th>
			</tr>
			<tr>
				<th>Addresss</th><th><textarea class="area" name="addre"></textarea></th><br>
				
			</tr>
<tr>
	<th><button type="submit"  name="submit">submit</button></th><th><button><a href="click.php">Back</a></button></th>
</tr>
         	
         
		
	
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

		
		$selc4=$_POST['selc4'];
        $Mandal=$_POST['Mandal'];
		$village=$_POST['village'];
		$addre=$_POST['addre'];
		$query ="INSERT INTO  `form2`   (`selc4`,`Mandal`,`village`,`addre`) VALUES ('$selc4','$Mandal','$village','$addre')";
		
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
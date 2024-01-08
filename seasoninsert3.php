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
			height:80%;
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
		input[type="text"].search{
			width:40%;
			border-radius:8px;
		}

	</style>
</head>
<body>
	
        
       

        
    </form>
		
	
		
	
	<div><h1 align="center" style="color:blue">BUS REGISTRATION APPLICATION</div>
		
<div id="login-popup">
	<center>
		<form method="post" >

	<fieldset>
		<legend>Route  Details </legend>
	
		<table>
			<tr>

				<th>ID:<input type="text" name="id" class="search"></th></tr>
<tr>
				<th>PassType</th><th><select name="secl5" required><option>---select--</option>
				<option>Monthly</option>
				<option>Quatarly</option>
				<option>Yearly</option></th></select></tr>
				<tr>
					<th>Route</th><th><input type="text" name="place1" placeholder="start" ></th></tr>
					<tr>
					<th>Route</th><th><input type="text" name="place2" placeholder="Destination" ></th></tr>
                <tr>
					<th>Start-Date</th><th><input type="Date" name="dob1" placeholder="start" name="dob1"></th></tr>
					<tr>
					<th>End-Date</th><th><input type="Date" name="dob2" placeholder="Destination" name="dob2"></th></tr>

		          <tr>
		          	<th>Amount</th><th><input type="text" name="amount"></th>
		          </tr>
		          <tr><th>Chalannumber</th><th><input type="text" name="Chalannumber"></th></tr>
	    
	
	<tr>
	<th><button value="update" name="update">update</button></th>
		<th><button ><a href="seasonalpassinsert.php">Back</a></button></th>
</tr>
         
</table>
</fieldset>
</form>
</center>
</div>
</h1>
</div>
<?php
error_reporting(0);
	require 'connect.php';
	if(isset($_POST['update']))
    {
        $id=$_POST['id'];
          $query = "UPDATE `sform3`  SET  secl5='$_POST[secl5]', place1='$_POST[place1]', place2='$_POST[place2]', dob1='$_POST[dob1]', dob2='$_POST[dob2]' ,Chalannumber='$_POST[Chalannumber]'where id=$_POST[id]";

            $result = mysqli_query($mycon,$query);
           if($result)
           {
             echo '<script> alert("inseted") </script>';
           }
           else
           {
            echo '<script> alert(" not inseted") </script>';
           }
}
	?>

	



</body>
</html>
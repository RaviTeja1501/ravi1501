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
		<form method="post">
	<fieldset id="form">
		<legend>Student 10th Details </legend>
        
		<table>
			<tr>
				<th>ID:<input type="text" name="id" class="search"></th></tr>
				<tr>
				<th>SSC Board Type</th><th><select name="secl1" required>
					<option value="">--select--</option>
					<option value="AP SSC<">AP SSC</option>
					<option value="CBSC">CBSC</option>
					<option value="ICSE ">ICSE</option>
					<option value="ORIENTAL">ORIENTAL</option>
					<option value="APOS">APOS</option>
					<option value="OTHER BOARD">OTHER BOARD</option>
                     </select>

				</th>
			</tr> 
				<tr>
				<th>SSC Regular/Supplementary</th><th><select name="secl2" required>
					<option value="">--select--</option>
					<option value="Regular">Regular</option>
					<option value="Supplementary">Supplementary</option></select></th>
					<tr>
					<th>SSC Yearof Pass</th><th><input type="text" name="sscyear"></th>
				</tr>
				<tr>
					<th>SSC Hall Ticket</th><th><input type="text" name="sschall"></th>
				</tr>
				<tr>
					<th>Date of Birth</th><th><input type="date" name="date"></th>
				</tr>
             <tr>
             	<th><button value="update" name="update">update</button></th>
                 	<th><button ><a href="student Upadtes.php">Back</a></button></th>
             </tr>
             
		</table>
	</tr>
</table>
</fieldset>
</form>
</form>
</center>
</div>
</h1>
</div>
<?php
	require 'connect.php';
	if(isset($_POST['update']))
    {
        $id=$_POST['id'];
          $query = "UPDATE `form6`  SET  secl1='$_POST[secl1]', secl2='$_POST[secl2]', sscyear='$_POST[sscyear]', sschall='$_POST[sschall]', date='$_POST[date]' where id=$_POST[id]";

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
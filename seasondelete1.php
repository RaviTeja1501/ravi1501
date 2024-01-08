<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Delete Data</title>
	<style type="text/css">
		body{
			background-color: lightblue;
		}
		input{
			width:40%;
			height:5%;
			border:1px;
			border-radius:5px;
			padding:8px 15px 8px 15px;
			margin:10px;
		}
	</style>
</head>
<body>
<center>
	<h1> Delete Data </h1>

	<form method="post">
		<input type="text" name="id"><br>
		<input type="submit" name="delete" value=" Delete Data">
	</form>
</center>


</body>
</html>
<?php
	require 'connect.php';
	if(isset($_POST['delete']))
    {
        $id=$_POST['id'];
         $query = "DELETE FROM `sform1` WHERE id='$id'";

           $result_run = mysqli_query($mycon,$query);
           if($result_run)
           {
             echo '<script> alert("Deleted") </script>';
           }
           else
           {
            echo '<script> alert(" not Deleted") </script>';
           }
}
	?>
<center><button><a href="Admin.php">Back</a></button></center>
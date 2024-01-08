<?php
require 'connect.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{
			background-color:white;
			background-size: cover;

		}
		form{
			
			background-color:#ccc;
			height:70vh;
			border-radius:4px;

		}
		h1{
			background-color:#30475e;
			color:white;
		}
		input[type="text"],[type="password"],[type="number"],[type="date"]{
			width:90%;
			height:30px;
			font-size: 20px;
			margin: 10px;
			outline: none;
		}
		input[type="submit"]
		{
			padding: 20px;
			width: 90%;
			color:white;
			background:#30475e;
			cursor: pointer;
			outline: none;
			font-size: 16px;
		}
	</style>
</head>
<body>
	<center>
		

	
<form method="post" action="">
	<h1>Login</h1>
	<input type="text" placeholder="Admin" name="Admin"><br>
	<input type="password" placeholder="password" name="password"><br>
	<button value="submit" name="submit">submit</button>
    <button><a href="BUSPASS MANANGEMENT SYSTEM.php">Home</a></button>
	
</form>
</center>
<?php
if(isset($_POST['submit']))
{
	$query="SELECT * FROM `adminlogin` WHERE  `Admin` ='$_POST[Admin]' AND `password`= '$_POST[password]'";
	$result = mysqli_query($mycon,$query);
	if(mysqli_num_rows($result)==1)
	{
		session_start();
		$_SESSION['AdminloginId']=$_POST['Admin'];
		header("location: Admin.php");

	}
	else{
		echo '<script> alert("Incorrect  username or Password") </script>';
	}
}

?>
</body>
</html>
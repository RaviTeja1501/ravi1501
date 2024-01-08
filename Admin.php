<?php
session_start();
	if(!isset($_SESSION['AdminloginId']))
	{
		header("location: Admin.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin pannel</title>
	<style type="text/css">
		*{
	margin:0;
	padding:0;
	font-family:sans-serif;
}
body{
	background-color:#ccc;
	background-position:center;
	background-size:cover;
}
.container{
	width:1400px;
	height:900px;
	margin:8% auto;
	background:white;
	border-radius: 5px;
	position:relative;
	

}
button{

	
	margin:20px;
	width:150px;
	background-color:#C8BFE7;
	color:black;
	padding:10px;
	border-radius:6px;
	border:none;
	
}
button a{
	text-decoration:none;
	color:revert-layer;
	font-weight:900;
	

}
.container1
{
	
	width:800px;
	height:300px;
	margin:8% auto;
	background:#ddd;
	border-radius: 5px;
	position:relative;
	opacity:0.3;
	
}

	</style>
</head>
<body>

<div class="container">
	<form method="post">
	<h1 style="color:skyblue;">DashBoard</h1><button name="logout">Logout</button><br><br><br>
  <center>  <div class="container1" class="" id="con">
		<button><a href="No of candiates register.php">No of candiated</a></button>
		<button><a href="student Upadtes.php">Inserted</a></button>
		<button><a href="delete.php">Delete</a></button>
		<button><a href="latestrecordpass.php">Latestet records</a></button>
		<button><a href="seasonalpassinsert.php">seasonal pass Insert</a></button>
		<button><a href="seasonpassdelete.php">seasonal pass delete</a></button>
		<button><a href="No of records season pass.php">Latest records season pass</a></button>
		<button><a href="latestrecordpass season.php"> season Pass</a></button>
		<button style="margin-bottom:20px;"><a href="Issue Ticket.php">Dowload Pass </a></button><button><a href="Issue Ticket1.php">Dowload Pass season </a></button>
		
</div></center>




</form>


</div>








<?php
if(isset($_POST['logout']))
{
	session_destroy();
	header("location: Adminlogin.php");
}
?>
</body>
</html>
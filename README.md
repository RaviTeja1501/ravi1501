
	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BUS PASS MANEGEMENT SYSTEM website</title>
	<style type="text/css">
		*{

margin:0;
padding:0;
box-sizing:border-box;
text-decoration:none;
font-family:poppins;
	
}
body{
	background-color:#ccc;

}

header{
	top:0;
	display:flex;
	flex-direction:row;
	align-items:center;
	justify-content:space-around;
	background-color:#30475e;
	color:white;
	padding: 20px 0;
    position:sticky;
	top:0;
	}

	header nav a{
	color:white;
	margin-right:30px;
	font-weight:550;
	}
	header div.sign-in-up button{
	background-color:#75cfb8;
	font-size:16px;
	font-weight:550;
	padding:4px 12px;
	border:2px solid green;
	border-radius:4px;
	margin:20px,0;
	outline:none;
		}
		header div.sign-in-up button:last-child{
			background-color:bisque;
		}

		
		.tablereg{
			top:30px;
			padding-left:150px;
			padding-top:50px;
			border:1px solid #C8BFE7;

		}
		table.reg{
			padding:100px;
			background-color:white;
			width:40%;
			opacity:0.5;
			color:#30475e;
			border-radius:20px;
            
		}
		 table.reg{
			border:1px solid #30475e;
		}
		
		.about{
			background-color:white;
			width:100%;
			padding:50px;
		}
        .contact{
        	background-color:#30475e;
        	padding:30px;
        	color:white;
        	font-weight:900;
        }


	</style>
<body>
<header>
	<table><tr><th>
	<h1><img src="LOGO8.png" width="60px"></h1></th><th>
	<h3 style="color:#FFC90E">BUSPASS MANAGEMENT SYSTEM</h3></th>
</tr>
</table>
	<nav>
		<a href="#">Home</a>
		<a href="about.html">About</a>
		<a href="viewpass.php">View Pass</a>
		
		
	</nav>
	<div class="sign-in-up">
	
	<button><a  href="Adminlogin.php">Admin</a></button></div>
</header>
</div><br><br>
<div class="tablereg">
	<table class="home">
		<tr>
			<th>
	<table class="reg">
		<tr class="reg1">
			<th><a href="click.php">Click Here Regitration</a></th>

		     </tr>

	</table>
</th>
<th><th>
	<table class="reg">
		<tr class="reg1">
			<th><a href="Registration details.php">Regitration Deatails</a></th>

		     </tr>

	</table>
</th>
<th><th>
	<table class="reg">
		<tr class="reg1">
			<th><a href="seasonpassview.php">Season deatilsBusPass</a></th>

		     </tr>

	</table>
</th>

</tr>

</table>
</div>
	<div class="tablereg">
	<table class="home">
		<tr>
			<th>
	<table class="reg">
		<tr class="reg1">
			<th style="padding:10px;"><a href="seasonalpass.php">ClickPass Season </a></th>

		     </tr>

	</table>
</th>
<th><th>
	<table class="reg">
		<tr class="reg1">
			<th style="padding:10px;"><a href="Application1.php"> generalpass Details</a></th>

		     </tr>

	</table>
</th>
<th><th>
	<table class="reg">
		<tr class="reg1">
			<th style="padding:10px;"><a href="student Documents.php">Documents verified </a></th>

		     </tr>

	</table>
</th>

</tr>

</table>
</div><br>
<center><div class="contact">
	Contact Us:-<br>
	            For Related Queries:<br>
	            E-mail:onlineBusPass@gmail.com<br>
	            Phone number:0866 2570005<br></center>
</div>
</body>
</html>

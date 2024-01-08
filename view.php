<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Application</title>
    <style type="text/css">
         .search{
            width:40%;
            padding:10px;
            margin:2px;
        }
        .hi{
           
            margin:30px;
            padding:50px;
            border:1px solid #24C7AD;
            background-color:white;
            color:black;
            border-radius:6px;
            opacity:0.9;
        }
       
        .hi1{
            background-color:#24C7AD;
            color:blue;
            width:50%;
            padding:500px;
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
<center>
	<h1>ID CARD</h1>
	<div>
		<form method="POST">
		id:<input type="text" name="id" class="search"><br>
        <input type="submit" name="search" value="search for application" class="search">
     
       </form>
       <table class="hi">
       	
       	<?php

        require 'connect.php';
        if (isset($_POST['search']))

        {
        	$name=$_POST['id'];
            
        	$query = "SELECT * FROM form1  where id='$name' or Fname='$name'";

            $query_run = mysqli_query($mycon,$query);
             while($row = mysqli_fetch_assoc($query_run))
             {
             	?>
               <div class="id">
             	<tr class="hi1">
                    <th bgcolor="white">BUS PASS ID CARD</th></tr></div>
                    <tr><td><hr width="200%"></td></tr>
                    <tr>
             		<td>ID:</td><td colspan="3"><?php echo $row['id'];?></td></tr>

             		<tr>
             		<td>Name:</td><td colspan="6"> <?php echo $row['name']; ?> </td></tr>
                    <tr>
             		<td>Father Name:</td><td colspan="6"> <?php echo $row['Fname']; ?> </td></tr>
             		<tr>
                    <td>Gender:</td><td colspan="6"> <?php echo $row['selc3']; ?> </td></tr>
                    <tr>
                    <td>AAdhar Number:</td><td colspan="6"> <?php echo $row['Adhno']; ?> </td></tr>
                    <tr>
                    <td>Mobile:</td><td colspan="6"> <?php echo $row['mobile']; ?> </td></tr>
                    <tr>
             	    <td>Email:</td><td colspan="6"> <?php echo $row['email']; ?> </td></tr>
                    
             	</tr>

             	
             	<?php
             }

        }
        
        
       	?>
        
       </table>
       
   </div>
    <button ><a href="viewpass.php">Back</a></button>
    <button onclick="window.print()">print</button>
</center>

</body>
</html>
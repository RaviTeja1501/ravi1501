
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
            padding:20px;
            border-collapse:collapse;
            background-color:#24C7AD;
            color:blue;
            width:30%;
           
           
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
	<h1>Route Deatails Issue pass</h1>
	<div>
		<form method="POST">
		id:<input type="text" name="id" class="search"><br>
        <input type="submit" name="search" value="search for application" class="search">
      
       </form>
       <table  class="hi">
       
       	<?php

        require 'connect.php';
        if (isset($_POST['search']))

        {
        	$name=$_POST['id'];
            
        	$query = "SELECT * FROM sform3  where id='$name' or secl5='$name'";

            $query_run = mysqli_query($mycon,$query);
             while($row = mysqli_fetch_assoc($query_run))
             {
             	?>
             	<tr>
                    <th>Season pass Route Issued</th></tr>
                     <tr><td><hr width="180%"></td></tr>
                    <tr>
             		<td>ID</td><td colspan="3"><?php echo $row['id'];?></td></tr>
             		<tr>
             		<td>Pass TYpe</td><td colspan="6"> <?php echo $row['secl5']; ?> </td>
             	</tr>
             		<tr><td>Source</td><td colspan="6"> <?php echo $row['place1']; ?> </td></tr>
             		<tr>
                    <td>Destination</td><td colspan="6"> <?php echo $row['place2']; ?> </td></tr>
                    <tr>
                    <td>FRom Date</td><td colspan="6"> <?php echo $row['dob1']; ?> </td></tr>
                     <tr>
                   <td>To Date</td> <td colspan="6"> <?php echo $row['dob2']; ?> </td></tr>
                     <tr>
                   <td>Amount</td> <td colspan="6"> <?php echo $row['amount']; ?> </td></tr>
             	
             	<?php
             }

        }
        
        
       	?>

       </table>
   </div>
    <button><a href="viewpass.php">Back</button>
</center>

</body>
</html>
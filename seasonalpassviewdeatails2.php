
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
            border-collapse:collapse;
            margin:30px;
            padding:50px;
        }
        button{
             width:10%;
            padding:10px;
            margin:2px;
        }
    </style>
</head>
<body>
<center>
	<h1>Appliacalication Print</h1>
	<div>
		<form method="POST">
		id:<input type="text" name="id" class="search"><br>
        <input type="submit" name="search" value="search for application" class="search">
      
       </form><br>
       <table border="1">
       	<tr>
       		<th>id</th>
       		<th>Pass Type</th>
       		<th>Start</th>
       		<th>Destination</th>
       		<th>date of  start </th>
       		<th>date of end</th>
       		<th>Amount</th>
       		
       		
       	</tr>
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
             		<td><?php echo $row['id'];?></td>
           
             		<td> <?php echo $row['secl5']; ?> </td>
             	
             		<td> <?php echo $row['place1']; ?> </td>
             	
                    <td> <?php echo $row['place2']; ?> </td>
         
                    <td> <?php echo $row['dob1']; ?> </td>
               
                    <td> <?php echo $row['dob2']; ?> </td>
                  <td> <?php echo $row['amount']; ?> </td></tr>
                   
             	
             	<?php
             }

        }
        
        
       	?>

       </table>
   </div><br><br>
    <button ><a href="seasonpassview.php">Back</a></button>
</center>

</body>
</html>
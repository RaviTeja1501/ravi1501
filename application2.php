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
	<h1>Appliacalication from6</h1>
	<div>
		<form method="POST">
		id:<input type="text" name="id" class="search"><br>
        <input type="submit" name="search" value="search for application" class="search">
       
       </form>
       <table border="1" class="hi">
       	<tr>
       		<th>id</th>
       		<th>SSc Board type</th>
       		<th>SSC regular/Supplementary</th>
       		<th>SSc pass year</th>
       		<th>SSC hallticket number</th>
       		<th>Date of birth</th>
       		
       		
       		
       	</tr>
       	<?php

        require 'connect.php';
        if (isset($_POST['search']))

        {
        	$name=$_POST['id'];
            
        	$query = "SELECT * FROM form6  where id='$name' or sschall='$name'";

            $query_run = mysqli_query($mycon,$query);
             while($row = mysqli_fetch_assoc($query_run))
             {
             	?>
             	<tr>
             		<td><?php echo $row['id'];?></td>
                    <td><?php echo $row['secl1'];?></td>
             
             	<td> <?php echo $row['secl2']; ?> </td>
             		<td> <?php echo $row['sscyear']; ?> </td>
             		
                    <td> <?php echo $row['sschall']; ?> </td>
                
                    <td> <?php echo $row['date']; ?> </td></tr>
                   
             	
             	<?php
             }

        }
        
        
       	?>

       </table>
   </div>
    <button ><a href="Application1.php">Back</a></button>
</center>

</body>
</html>
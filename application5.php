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
        <input type="submit" name="submit">
       </form>
       <table border="1">
       	<tr>
       		<th>id</th>
       		<th>Instition Name</th>
       		<th>Course Name</th>
       		<th>Admission No</th>
       		<th>Distric</th>
       		<th>Mandal</th>
            <th>Address</th>
       		
       		
       		
       	</tr>
       	<?php

        require 'connect.php';
        if (isset($_POST['search']))

        {
        	$name=$_POST['id'];
            
        	$query = "SELECT * FROM form4  where id='$name' or iname='$name'";

            $query_run = mysqli_query($mycon,$query);
             while($row = mysqli_fetch_assoc($query_run))
             {
             	?>
             	<tr>
             		<td><?php echo $row['id'];?></td>
           
             		<td> <?php echo $row['iname']; ?> </td>
         
             		<td> <?php echo $row['cname']; ?> </td>
                 <td> <?php echo $row['Adhno']; ?> </td>
              
                    <td> <?php echo $row['distric']; ?> </td>
                  
                    <td> <?php echo $row['imandal']; ?> </td>
                   
             	
                    <td> <?php echo $row['iaddress']; ?> </td></tr>
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
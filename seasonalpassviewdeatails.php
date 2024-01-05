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
       
       </form>
       <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <td>Father Name</td>
            <th>Gender</th>
            <th>AAhar No</th>
            <th>Mobile</th>
            <th>Email</th>
            
            
            
        </tr>
        <?php

        require 'connect.php';
        if (isset($_POST['search']))

        {
            $name=$_POST['id'];
            
            $query = "SELECT * FROM sform2  where id='$name' or name='$name'";

            $query_run = mysqli_query($mycon,$query);
             while($row = mysqli_fetch_assoc($query_run))
             {
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
     
                    <td> <?php echo $row['name']; ?> </td>
                            <td > <?php echo $row['Fname']; ?> </td>
                  
                    <td> <?php echo $row['selc3']; ?> </td>
              
                    <td> <?php echo $row['Adhno']; ?> </td>
             
                    <td> <?php echo $row['mobile']; ?> </td>
     
                    <td> <?php echo $row['email']; ?> </td>
                </tr>
                
                <?php
             }

        }
        
        
        ?>

       </table>
   </div>
    <button ><a href="seasonpassview.php">Back</a></button>
</center>

</body>
</html>
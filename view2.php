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
    <h1>Appliacalication Print</h1>
    <div>
        <form method="POST">
        id:<input type="text" name="id" class="search"><br>
        <input type="submit" name="search" value="search for application" class="search">
        
       </form>
       <table class="hi">
        <tr>
            
           
            
           
           
            
            
        </tr>
        <?php

        require 'connect.php';
        if (isset($_POST['search']))

        {
            $name=$_POST['id'];
            
            $query = "SELECT * FROM sform2  where id='$name' or Fname='$name'";

            $query_run = mysqli_query($mycon,$query);
             while($row = mysqli_fetch_assoc($query_run))
             {
                ?>
                  <th bgcolor="white">Season Pass ID  Card</th></tr>
                  <tr><td><hr width="200%"></td></tr>
                  <tr>
                    <th>ID</th><td ><?php echo $row['id'];?></td></tr>

          <tr>
                     <th>Name</th><td > <?php echo $row['name']; ?> </td></tr>
             
                   <tr> 
                    <th>Father Name</th><td > <?php echo $row['Fname']; ?> </td>
                </tr>
                <tr>
               
                    <th>Gender</th><td > <?php echo $row['selc3']; ?> </td></tr>
                    <tr>
          
                    <th>AAdhar No</th><td > <?php echo $row['Adhno']; ?> </td></tr>
                    <tr>
              
                   <th>Mobile</th> <td > <?php echo $row['mobile']; ?> </td></tr>
            <tr>
                    <th>Email</th><td > <?php echo $row['email']; ?> </td></tr>
           
                
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
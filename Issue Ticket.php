<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Application</title>
    <style type="text/css">
         .search{
            width:30%;
            padding:10px;
            margin:2px;
        }
       .hi{
            margin:10px;
            padding:40px;
            border:1px solid #24C7AD;
            background-color:white;
            color:black;
            border-radius:6px;
            opacity:0.9;

        }
       
        .hi1{
            padding:10px;
            padding-left:40px;
            border-collapse:collapse;
            background-color:#24C7AD;
            color:blue;
            width:120%;
            margin:0;
             border:1px solid black;

           
           
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
        hr{
            margin:0px;
            width:100%;
        }
        .h{
            padding:5PX;
            border:1px solid black;
            width:60%;


        }
        
    </style>
</head>
<body>
<center>
	<h1>Route Deatails Issue pass</h1> 
	<div>
		<form method="POST" >
		id:<input type="text" name="id"class="search"><br>
        <input type="submit" name="search" value="search for application"class="search">
        
       </form >
       
        

        
       <table  class="hi">
       
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
                    <tr><td><hr style="width:230%;"><td><hr style="width:100%;"></td></td></tr>
                    <tr>
                    <td>ID:</td><td colspan="3" ><?php echo $row['id'];?><td rowspan="7"><table class="h"><tr><th ><img src="" id="profile"></th></tr></table></td>



                </td></tr>

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
          <tr><th><hr style="width:230%;"></th>
            <th><hr style="width:100%;"></th></tr>

       	<?php

        require 'connect.php';
        if (isset($_POST['search']))

        {
        	$name=$_POST['id'];
            
        	$query = "SELECT * FROM form3  where id='$name' or selc5='$name'";

            $query_run = mysqli_query($mycon,$query);
             while($row = mysqli_fetch_assoc($query_run))
             {
             	?>
             	<tr class="hi1">
                    <th bgcolor="white">Route Deatails Issue pass</th></tr>
                     <tr><td><hr style="width:230%;"><td><hr style="width:100%;"></td></td></tr>
                    <tr>
             		<td>ID</td><td colspan="3"><?php echo $row['id'];?></td>
                     </td>
                     
                 </tr>
             		<tr>
             		<td>Pass Type</td><td> <?php echo $row['selc5']; ?> </td>
                    <td>



                    </td>
             	</tr>
             		<td>Source</td><td> <?php echo $row['place1']; ?> </td></tr>
             		<tr>
                    <td>Destination</td><td> <?php echo $row['place2']; ?> </td></tr>
                    <tr>
                   <td> From Date</td><td> <?php echo $row['dob1']; ?> </td></tr>
                     <tr>
                    <td>
                   To Date </td><td> <?php echo $row['dob2']; ?> </td></tr>
                   <td>Amount<td> <?php echo $row['amount']; ?> </td>

               </tr>
                   <tr>
                    <td>Chalannumber:<td> <?php echo $row['chalannumber']; ?> </td></p></td>
                   </tr>

          <tr><th><hr style="width:230%;"></th>
            <th><hr style="width:100%;"></th></tr>
             	 
             	<?php
             }

        }
        
        
       	?>


       </table>
       <div class="hero">
   
    <input type="file" id="input feild">

</div>
<script type="text/javascript">
    let profile = document.getElementById("profile");
    let inputFeild = document.getElementById("input feild");

    inputFeild.onchange =function () {
        profile.src= URL.createObjectURL(inputFeild.files[0]);
    }
</script>
   </div>
   <button><a href="Admin.php">Back</a></button>
</center><br>
<center><button onclick="window.print()">print</button></center>

</body>
</html>
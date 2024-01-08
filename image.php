<form method="post" enctype="multipart/from-data">
       <input type="file" / >
      <input type="submit" name="file"/>
   </form>



    <?php

        $mycon=mysqli_connect('localhost','root','');
        mysqli_select_db($mycon,'msc finalyear project');
       if(isset($_POST['file'])){
       
        $image=$_FILES['image']['name'];
         $query="INSERT INTO `images` (`id`,`image`) VALUES (NULL,'$image')";

            if(mysqli_query($mycon,$query))
          {
            echo 'inseted';
          }
           else{
            'not inserted';
           }

       }

   ?>
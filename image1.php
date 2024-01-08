<?php
require 'connect.php';



?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>image upload</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="file"/>
	<input type="submit" value="upload"/>
	
</form>


</body>
</html>
<?php
require 'connect.php';
if(isset($_POST['file']))
{
	$imagename=addslashes($_FILES['file']['name']);
	$image=addslashes(file_get_contents($_FILES['file']['tmp_name']));

	$query="INSERT INTO `images` (`id`,`image`,`image_name`) VALUES (NULL,'$imagename','$image')";
	if(mysqli_query($mycon,$query))
	{
		echo 'image inserted';
	}
     

	}



?>
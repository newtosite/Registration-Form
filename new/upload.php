<!DOCTYPE html>
<?php
 echo $_GET['Email'];   
/*$next = http_build_query($send);
header("Location:insert.php?$send");*/
	?>
<html>
<head>
<title>Capture webcam image with php and jquery - ItSolutionStuff.com</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
        #results { padding:20px; border:1px solid; background:#ccc; }
    </style>
</head>
<body>
     <form action="insert.php" method="post" enctype="multipart/form-data">
		Upload Photo
		<br><input type="file" name="photo" accept="image/*">
		<input type="file" accept="image/*" capture="user">
		<br>
		Upload License
		<br><input type="file" name="lic" accept="image/*">
		
		<br>
		Upload RC
		<br><input type="file" name="rc" accept="image/*">
		
		<br>
		Upload Insurance
		<br><input type="file" name="insu" accept="image/*">
		<br><br>
		<input type="submit" name="upload">
		
	 </form>
	 
</body>
</html>
		
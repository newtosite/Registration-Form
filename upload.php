<!DOCTYPE html>
<?php
 echo $_GET['Email'];   
/*$next = http_build_query($send);
header("Location:insert.php?$send");*/
	?>
<html>
<body>
     <form action="insert.php" method="post" enctype="multipart/form-data">
		Upload Photo
		<br><input type="file" name="photo" accept="image/*">
		
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
		
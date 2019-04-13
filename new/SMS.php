<?php
	session_start();
	$regValue = $_POST['mob'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>SMS</title>
	<link rel="stylesheet" type="text/css" href="SMS.css">
</head>
<body>
	<div>
		<form action="sms_send.php" method="POST">
			<label for="fname" style="margin:8px 30px;">MOBILE NO</label>
			<input type="text" id="fname" name="mob" style="margin:8px 29px;" value="<?php echo htmlspecialchars($regValue); ?>">
			<br>
			<input type="submit" name ="submit" value="SEND SMS">
		</form>
	</div>
</body>
</html>
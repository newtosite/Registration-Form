<?php
	session_start();
	$host = "localhost";
	$username = "root";
	$password = "";
	$db_name = "telematica";
	$tbl_name = "owner";
	$con = mysqli_connect("$host","$username","$password")or die("cannot connect");
	$select_db = mysqli_select_db($con,$db_name)or die("cannot select DB");
	if(isset($_POST['Email']))
	{
		$email = $_POST['Email'];
		$ab = "SELECT * FROM owner WHERE Email='$email'";
		$result = mysqli_query($con,$ab) or die(mysqli_error($con));
		$cnt = mysqli_num_rows($result);
		if($cnt==true)
		{
			$query = "SELECT Password from owner WHERE Email ='$email' and Password IS NOT NULL";
			$res = mysqli_query($con,$query) or die(mysqli_error($con));
			$val = mysqli_num_rows($res);
			//echo "the value is ".$val;
			if($val == true)
			{
?>
				<html>
				<head>
					<title>Password</title>
					<link rel="stylesheet" type="text/css" href="CheckPassword.css">
				<head>
				<body>
					<div>
						<form name="form1" method="post" action="CheckPassword.php">
							<label for="Password" style="margin:8px 18px;">PASSWORD</label>
							<input name="Password" type="password" id="Password" style="margin:8px 13px;" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td>
							<input type="hidden" name ="Email" id="Email" value="<?php echo htmlspecialchars($_POST['Email']); ?>">
							<br>
							<input type="submit" name="Submit" value="LOGIN"></td>
						</form>
					</div>
				</body>	
				</html> 
<?php
			} 
			else 
			{
?>
				<html>
				<head>
					<title>Confirm Password</title>
					<link rel="stylesheet" type="text/css" href="Password.css">
				<head>
				<body>
					<div>
						<form name="form11" method="post" action="ConfirmPassword.php">
							<label for="Password" style="margin:8px 28px;">PASSWORD</label>
							<input name="Password" type="password" id="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td>
							<input type="text" name ="Email" id="Email" value="<?php echo htmlspecialchars($_POST['Email']); ?>">
							<br>
							<label for="cPassword" style="margin:8px 28px;">CONFIRM PASSWORD</label>
							<input name="cPassword" type="password" id="cPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td>
							<br>
							<input type="submit" name="Submit" value="Login"></td>
						</form>
					</div>
				</body>
				</html>
<?php
			}
			//header('location:update.php');
		}
		else
		{
?>
			<html>
				<head>
					<title>Oops</title>
					<link rel="stylesheet" type="text/css" href="Oops.css">
				<head>
				<body>
					<div>
						<center><h2 style='color:red'>ACCESS DENIED</h2></center>
						<center><h3 style='color:red'>Contact administrator to create yout account or visit the near by store to buy the device</h3></center>
					</div>
				</body>
			</html>
<?php
			//header('location:update.php');
		}
	}
	ob_end_flush();
?> 

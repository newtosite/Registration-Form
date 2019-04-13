<?php
	session_start();
	$host = "localhost";
	$username = "root";
	$password = "";
	$db_name = "telematica";
	$tbl_name = "owner";
	$con = mysqli_connect("$host","$username","$password")or die("cannot connect");
	$select_db = mysqli_select_db($con,$db_name)or die("cannot select DB");
	if(isset($_POST['password']))
	{
		$email = $_POST['Email'];
		$password = $_POST['password'];
		$ab = "SELECT * FROM owner WHERE Email='$email' and Password = '$password'";
		$result = mysqli_query($con,$ab) or die(mysqli_error($con));
		$cnt = mysqli_num_rows($result);
		if($cnt==true)
		{
			echo "<center><h2 style='color:green'>ACCESS GRANTED</h2></center>";
?>
			<!--<html>
			<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
				<tr>
					<form name="form1" method="post" action="check_valid_login.php">
						<td>
							<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
								<tr>
									<td width="78">Password</td>
									<td width="6">:</td>
									<td width="294"><input name="password" type="password" id="Password"></td>
									<input type="hidden" name ="Email" id="Email" value="<?php echo htmlspecialchars($_POST['mob']); ?>">
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><input type="submit" name="Submit" value="Login"></td>
								</tr>
							</table>
						</td>
					</form>
				</tr>
			</table>
		</html> -->
<?php
		//header('location:update.php');
		}
		else
		{
			echo "<center><h2 style='color:red'>ACCESS DENIED</h2></center>";
			echo "<center><h3 style-'color:red'>Contact administrator to create yout account or visit the near by store to buy the device</h3></center>";
			//header('location:update.php');
		}
	}
	ob_end_flush();
?> 

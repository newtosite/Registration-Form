<?php
session_start();
$host="localhost";
$username="root";
$password="ejyafQzrRXwYHtUh";
$db_name="id9146188_telematique";
$tbl_name="owner";
$con=mysqli_connect("$host","$username","$password")or die("cannot connect");
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");

if(isset($_POST['Email']))
{
$email=$_POST['Email'];
$ab="SELECT * FROM owner WHERE Email='$email'";
$result=mysqli_query($con,$ab) or die(mysqli_error($con));
$cnt=mysqli_num_rows($result);
if($cnt==true)
{
	$query = "SELECT Password from owner WHERE Email ='$email' and Password IS NOT NULL";
	$res = mysqli_query($con,$query) or die(mysqli_error($con));
	$val = mysqli_num_rows($res);
	echo "the value is ".$val;
	if($val == true)
	{
		echo "<center><h2 style='color:green'>ACCESS GRANTED</h2></center>";
		echo "<center><h2>Create Password </h2></center>";
		?>
		<html>
			<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<tr>
			<form name="form1" method="post" action="check_valid_login.php">
			<td>
			<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
			<tr>
			<td width="78">Password</td>
			<td width="6">:</td>
			<td width="294"><input name="Password" type="password" id="Password"></td>
			<input type="hidden" name ="Email" id="Email" value="<?php echo htmlspecialchars($_POST['Email']); ?>">
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="Submit" value="Login"></td>
			</tr>
			</table>
		</td></form></tr></table></html> <?php
	} else {
		?>
		<html>
			<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
			<tr>
			<form name="form11" method="post" action="add_pass.php">
			<td>
			<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
			<tr>
			<td width="78">Password</td>
			<td width="6">:</td>
			<td width="294"><input name="Password" type="password" id="Password"></td>
			<input type="text" name ="Email" id="Email" value="<?php echo htmlspecialchars($_POST['Email']); ?>">
			</ tr>
			<tr>
			<td width="78">Confirm Password</td>
			<td width="6">:</td>
			<td width="294"><input name="cPassword" type="password" id="cPassword"></td>
			</tr>
			<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="Submit" value="Login"></td>
			</tr>
			</table>
		</td></form></tr></table></html>
		<?php
	}
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

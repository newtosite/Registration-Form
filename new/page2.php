<?php
session_start();
$servername="localhost";
$username="root";
$password="ejyafQzrRXwYHtUh";
$dbname="id9146188_telematique";
$tbl_name="owner";
$conn=mysqli_connect($servername,$username,$password,$dbname) or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname) or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql) or die(mysqli_error($connection));

$dob=$_POST['dob'];
$first_name=$_POST['firstname'];
$last_name=$_POST['lastname'];
$rc=$_POST['rc'];
$license=$_POST['lic'];
$email=$_POST['email'];
$regValue = $_POST['mob'];
$query="INSERT INTO owner(First_name,Last_name,DOB,Reg_num,License_num,Mobile_num,Email) VALUES('$first_name','$last_name','$dob','$rc','$license','$regValue','$email')";
mysqli_query($conn,$query) or die(mysqli_error($conn));

Mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Registration Form</h3>

<div>

  <form action="page2.html" method="post">
    <label for="fname">Mobile Number</label>
    <input type="text" id="fname" name="firstname" value="<?php echo htmlspecialchars($_POST['mob']); ?>">
	<input type="submit" value="send sms">
  </form>
</div>

</body>
</html>
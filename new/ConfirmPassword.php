<?php
	session_start();
	//echo" Hello";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "telematica";
	$tbl_name = "owner";
	$conn = mysqli_connect($servername,$username,$password,$dbname) or die(Mysqli_error());
	$select_db = mysqli_select_db($conn,$dbname) or die(mysqli_error($conn));
	$sql = "SELECT * FROM $tbl_name";
	$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	$password = $_POST['Password'];
	$email = $_POST['Email'];
	header('Location:upload.php?$email='.$_POST['Email']);
	$next = http_build_query($send);
	header("Location:upload.php?$send");
	$query = "UPDATE owner SET Password = '$password' WHERE Email = '$email'";
	mysqli_query($conn,$query) or die(mysqli_error($conn));
	Mysqli_close($conn);
?>
<?php
    session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="telematica";
$tbl_name="owner";
$conn=mysqli_connect($servername,$username,$password,$dbname) or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname) or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));

    $img = $_POST['image'];
    $folderPath = "C:/xampp/htdocs/FinalProject/";
  
    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = uniqid() . '.jpg';
  
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);
  
    print_r($fileName);
$query="UPDATE owner SET License_img = '$file' WHERE Email = 'ramyashree048@gmail.com'";
  mysqli_query($conn,$query) or die(mysqli_error($conn));
?>
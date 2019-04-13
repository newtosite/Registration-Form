<?php
session_start();
//echo" Hello";
$servername="localhost";
$username="root";
$password="";
$dbname="telematica";
$tbl_name="owner";
$conn=mysqli_connect($servername,$username,$password,$dbname) or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname) or die(mysqli_error($conn));
 $email_password=$_GET['Password'];
    $email_add = $_GET['Email'];
    //storing all necessary data into the respective variables.
$photo = $_FILES['photo'];
$photo_name = $photo['name'];
$photo_type = $photo ['type'];
$photo_size = $photo ['size'];
$photo_path = $photo ['tmp_name'];

$lic = $_FILES['lic'];
$lic_name = $lic['name'];
$lic_type = $lic ['type'];
$lic_size = $lic ['size'];
$lic_path = $lic ['tmp_name'];

$rc = $_FILES['rc'];
$rc_name = $rc['name'];
$rc_type = $rc ['type'];
$rc_size = $rc ['size'];
$rc_path = $rc ['tmp_name'];

$insu = $_FILES['insu'];
$insu_name = $insu['name'];
$insu_type = $insu ['type'];
$insu_size = $insu ['size'];
$insu_path = $insu ['tmp_name'];

//Restriction to the image. You can upload any types of file for example video file, mp3 file, .doc or .pdf just mention here in OR condition. 

//if($photo_name!="" && ($photo_type="image/jpeg"||$photo_type="image/png"||$photo_type="image/gif")&& $photo_size<=614400)

//if(move_uploaded_file ($photo_path,'images/'.$photo_name))//"images" is just a folder name here we will load the file.
$query="insert into owner(Face_img,Rc_img,License_img,Insu_img)values('$photo_name','$rc_name','$lic_name','$insu_name') WHERE Email = '$email' and Password = '$password'";//mysql command to insert file name with extension into the table. Use TEXT datatype for a particular column in table.
 mysqli_query($conn,$query) or die(mysqli_error($conn));


if($query==true)
{
    echo "File Uploaded";
}

Mysqli_close($conn);
//To retrieve uploaded file immediately or write code in separate .php file if you wanna later or by clicking.
//$result=  mysql_query("SELECT photo FROM user");
//$row=  mysql_fetch_array($result);
//echo "<img src='images/".$row['photo']."' height = '130px' width = '130px'>";
?>

<?php
ob_start();
include "db.php";
$u=$_POST['id'];
$link=$_POST['link'];
$img=$u.".jpg"; 
/*$target = "images/"; */
//$target = $target . basename( $_FILES['photo']['name']);
$target = "images/" . $img;   
$pic=($_FILES['photo']['name']);
if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
 { 
      mysql_query("update into topimages set imgname='$img',link='$link' where imgname='$img'");
	echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory"; 
header("location:home_banner.php?id=$img");
} 
else 
{ 
	echo "Sorry, there was a problem uploading your file.";
} 
ob_end_flush();
?>
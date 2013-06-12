<?php

$sid=$_GET['id'];

include "db.php";
$name1=mysql_query("select cid from sub_category where sid=$sid");
while($r1=mysql_fetch_array($name1))
{
$var1=$r1[0];
}
$name=mysql_query("select sub_cat_name from sub_category where sid=$sid");
while($r=mysql_fetch_array($name))
{
$var=$r[0];
}
mysql_query("delete from sub_category where sid=$sid");

$msg="SubCategory $var Deleted Succesfully";




header("location:subcategories.php?msg=$msg&IndustryID=$var1");

?>
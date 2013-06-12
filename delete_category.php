<?php

$cid=$_GET['id'];

include "db.php";
$name=mysql_query("select cat_name from category where cid=$cid");
while($r=mysql_fetch_array($name))
{
$var=$r[0];
}
$rs=mysql_query("delete from category where cid=$cid");

$msg="Category $var Deleted Succesfully";
header("location:categories.php?msg=$msg");

?>
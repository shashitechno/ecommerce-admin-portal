<?php

$u=$_POST['username'];
$p=$_POST['password'];

include "db.php";

$rs=mysql_query("select * from login where username='$u'");


$flag=0;

while($r=mysql_fetch_array($rs))
{
if($r[1]==$u && $r[2]==md5($p))
{
$flag=1;
break;
}}

if($flag==1)
{
setcookie("username",$u,time()+60*60*10);
$my_t=date("l, F d, Y h:i" ,time());

header("location:home.php");
}
else
{
header("location:index.php?err=1");
}
?>
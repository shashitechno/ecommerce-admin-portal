<?php

include "db.php";
$username=$_POST['username'];
$password=$_POST['password'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$rs=mysql_query("select * from login where username='$username'");
$flag=0;
while($r=mysql_fetch_array($rs))
{
   if($r[1]==$username && $r[2]==md5($password))
   {
      $flag=1;
   }
   else 
   {
       header("location:edit_login.php?err=1");
   }
}
if($flag==1)
{
    
   
   mysql_query("update login set password=md5('$pass') where username='$username'");
  // header("location:edit_login.php?sucess=1");
}
?>
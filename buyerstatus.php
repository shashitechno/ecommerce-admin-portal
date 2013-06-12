<?php
ob_start();
include "db.php";
if(isset($_GET['BuyerID']))
{
$rs=mysql_query("select status from trade_lead");
while($r=mysql_fetch_array($rs))
{
 if($r[0]=='In-Active')
 {
   mysql_query("update trade_lead set status='Active' where id=$_GET[BuyerID]");
    header("location:buyers.php?msg=status Updated to Active SuccessFully");
 }
 else
 {
     mysql_query("update trade_lead set status='In-Active' where id=$_GET[BuyerID]");
	 header("location:buyers.php?msg=status Updated to In-Active SuccessFully");
 }
}
}
ob_end_flush();
?>
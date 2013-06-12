<?php
include "db.php";
$rs=mysql_query("select email from trade_lead where id=$_GET[id]");
while($r=mysql_fetch_array($rs))
{
$var=$r[0];
}
mysql_query("delete from trade_lead where id=$_GET[id]");

header("location:buyers.php?msg=The Buyer $var Deleted Sucessfully");
?>
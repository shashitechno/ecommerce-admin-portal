<?php
include "db.php";

$rs = mysql_query("SELECT email FROM trade_lead WHERE id = '".mysql_real_escape_string($_GET['id'])."'");
while( $r = mysql_fetch_array($rs) ){
  $var = $r[0];
}

mysql_query("DELETE FROM trade_lead WHERE id = '".mysql_real_escape_string($_GET['id'])."'");

header("location:buyers.php?msg=The Buyer $var Deleted Sucessfully");
?>

<?php

require "db.php";

setcookie("username",$u,time()-1);

header("location:index.php");
?>
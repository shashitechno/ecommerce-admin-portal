<?php
if(!isset($_COOKIE['username']))
{
header("location:index.php");
}
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script src='scripts/gen_validatorv5.js' type='text/javascript'></script>
<script src='scripts/sfm_moveable_popup.js' type='text/javascript'></script>

<style type='text/css'>
.error_strings
{
    font-family:Verdana;
    font-size:10px;
    color:#660000;
}
.sfm_float_error_box
{
    position:absolute;
    z-index:999;
    cursor:default;
    font-family:Verdana;
    font-size:10px;
    color:#660000;
    background-color:#ffff66;
    border-style:solid;
    border-width:1px;
    border-color:#660000;
}
.sfm_float_box_td
{
    padding:3px;
    cursor:default;
    font-family:Verdana;
    font-size:10px;
    color:#660000;
    background-color:#ffff66;
}
.sfm_close_box
{
    font-family:Verdana;
    font-size:10px;
    font-weight:bold;
    color:#ffffff;
    background-color:#660000;
    border-width:0px;
    text-align:center;
}
.sfm_cr_box
{
    font-family:Verdana;
    font-size:10px;
    color:#888888;
    border-style:solid;
    border-width:0px;
    border-color:#660000;
}
.sfm_cr_box a
{
    color:#888888;
}
</style>
<title>World Biggest B2B Portal .:: Admin Control Panel ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style.css" rel="stylesheet" type="text/css">

<link href="menu.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>
<body>
	<table width="1003" border="0" align="center" cellspacing="0">
		<Tr  align="center">
			<Td colspan="2">
				<table border="0" cellpadding="5" cellspacing="0" style="vertical-align:top">
					<Tr align="center">
						<Td  align="center" width="361"><h2>Hello Admin!!</Td>
					</Tr>
			  </table>
			</td>
		</Tr>
		<Tr>
			<Td height='24' background='images/headCap.gif' align="right" colspan="2">
			<div  style="float:left; margin:0 0 0 200px; font-weight:bold "class="style2">
				Welcome to Administrator Control Panel
			</div>
			 <span class="style1" >admin</span>
			 | <a href='logout.php' class='topcap'>Logout</a>
			
			
			</td>
		</Tr>
		<Tr>
			<Td height='24' align="Center" colspan="2"></td>
		</Tr>
		<tr>
			<td>
				<div style="margin: 0 0 0 10px "><div id='editlogin_errorloc' class='error_strings' style=''></div>

  <tr>
  
  <?php
  if(isset($_GET['err']))
  {
     echo "<font color=red>Username Or Password You Entered Is Wrong</font>";
  }
  else if(isset($_GET['sucess']))
  {
     echo "<font color=red>Password Changed Succesfully</font>";
  }
  ?>
<form name=editlogin action=editlogin.php method=post>
<table width="80%" border="0" align=right>
    <td colspan="2" align="center">Welcome TO Admin Panel!!</td>
  </tr>
  <tr>
    <td align="center">Username</td>
    <td align="left"><input type="text" name="username" /></td>
  </tr>
  <tr>
    <td align="center">Current Password</td>
    <td><input type="password" name="password" /></td>
  </tr>
  <tr>
    <td align="center">New Password</td>
    <td><input type="password" name="pass" /></td>
  </tr>
  <tr>
    <td align="center">Confirm Pasddword</td>
    <td><input type="password" name=cpass /></td>
  </tr>
  <tr>
    <td height="74" colspan="2" align="center"><input type="submit" value="GO" /></td>
  </tr>
</table>
</form>
<script type='text/javascript'>
// <![CDATA[
var editloginValidator = new Validator("editlogin");

editloginValidator.EnableOnPageErrorDisplay();
editloginValidator.SetMessageDisplayPos("right");

editloginValidator.EnableMsgsTogether();
editloginValidator.addValidation("username","req","Please fill in username");
editloginValidator.addValidation("password","req","Please fill in password");
editloginValidator.addValidation("pass","req","Please fill in New password");
editloginValidator.addValidation("cpass","req","Please fill in confirm password");
editloginValidator.addValidation("cpass","eqelmnt=pass","Password Do not Macthes!");

// ]]>
</script>


					<table border="0" cellpadding="0" cellspacing="0" width="200px" >
						<Tr>
							<Td><img src="images/successstory/1.gif" width="9" height="26" border="0"></Td>
							<Td background="images/successstory/bar-box_03_0.gif" class="storyheading" width="200"><strong>Control Menu</strong></Td>
							<Td><img src="images/successstory/3.gif" width="9" height="26"></Td>
						</Tr>
						<Tr>
						  <Td background="images/bar-box_09.gif" ></Td>
						  <Td background="images/bar-box_10.gif">
							<div class="colL" style="width:100%; margin-top:12px;">
								<div class="menu menuSkinA">
									<ul>
										<li class="listSize"><a href="countries.php"><strong>Countries</strong></a></li>
										<li class="listSize"><a href="categories.php"><strong>Categories</strong></a></li>										
										<li class="listSize"><a href="seller.php"><strong>Sellers</strong></a></li>
										<li class="listSize"><a href="gold_seller.php"><strong>Gold Sellers</strong></a></li>
										<li class="listSize"><a href="buyers.php"><strong>Buyers</strong></a></li>										
																				
										<li class="listSize"><a href="top_banners.php"><strong>Top Banners</strong></a></li>
										<li class="listSize"><a href="right_banners.php"><strong>Right Side Small Banners</strong></a></li>
									
										<li class="listSize"><a href="settings.php"><strong>Settings</strong></a></li>
										 <li class="listSize"><a href="edit_login.php"><strong>Change Admin Login</strong></a></li>
										
									</ul>
								</div>
							</div>          	<!-- lefte menu -->	
						  </Td>
						  <Td background="images/bar-box_11.gif"></Td>
						</Tr>
						<Tr>
						  <Td><img src="images/bar-box_15.gif" border="0"></Td>
						  <Td background="images/bar-box_16.gif"></Td>
						  <Td><img src="images/bar-box_17.gif"></Td>
						</Tr>

				  </table>			 </div>

			</td>
			<Td align="center" valign="top">
						</Td>
		</tr>
</table>




</body>
</html>
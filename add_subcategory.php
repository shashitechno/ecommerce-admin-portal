<?php
ob_start();
if(!isset($_COOKIE['username']))
{
  header("location:index.php");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>World Biggest B2B Portal .:: Add Category ::.</title>
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
<script language="javascript">
function validate(theform)
{
	if(theform.Category.value == "")
	{
		alert("Please enter SubCategory");
		theform.Category.focus()
		return false;
	}
	
	return true;
}
</script>
</head>
<body >
	<table width="1003" border="0" align="center" cellspacing="0">
		<Tr  align="center">
			<Td colspan="3">
				<table border="0" cellpadding="5" cellspacing="0" style="vertical-align:top">
					<Tr align="center">
						<Td  align="center" width="361"><img src="images/logo.jpg"></Td>
					</Tr>
			  </table>
			</td>
		</Tr>
		<Tr>
			<Td height='24' colspan="2" align="right" background='images/headCap.gif'> <span class="style1" >admin |
			<a href='home.php' class='topcap'>Home</a></span>
			</span></td>
		</Tr>
		<Tr>
			<Td height='24' colspan="2" align="Center"> <span class="style2" style="font-weight:bold " >Welcome to Administrator Control Panel</span></td>
		</Tr>
		<tr valign="top">
			<td width="218">
				<div style="margin-left:10px">
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
   			<td width="781">
				<div style="margin:0 10px 0 10px; ">
					<table border="0" cellpadding="0" cellspacing="0" width="600" >
						<Tr>
							<Td width="16" height="24"><img src="images/1.gif"></Td>
							<Td background="images/2.gif" class="style2" style="font-weight:bold ">Categories</Td>
							<Td width="16" height="24"><img src="images/3.gif"></Td>
						</Tr>
						<Tr >
							<Td background="images/7.gif"></Td>
							<Td align="center" valign="top" background="images/9.gif">
														<div style="margin:10px" align="left">
								<form action="add_subcategory.php?IndustryID=<?php echo $_GET['IndustryID']; ?>" method="post" onSubmit="return validate(this);">
									<table width="48%" align="center">
								
									<tr >
										<td class="style2" style="font-weight:bold; font-size:12px">
										Industry Name:
										</td>
										<td>
											<input type="text" name="Category" id="Category" value=""/>
										</td>
									</tr>
									<tr align="center">
										<td colspan="2">
										</br>
											<input type="hidden" name="continue" id="continue"  value="true"/>
											<input type="submit" name="Submit" id="Submit"  value="  Submit  "/>
										</td>
									</tr>
								
							  	</table>
							  </form>
							 </div>
							</Td>

							<Td background="images/8.gif"></Td>
						</Tr>
						<Tr>
							<Td width="16" height="26"><img src="images/4.gif"></Td>
							<Td background="images/6.gif"></Td>
							<Td width="16" height="26"><img src="images/5.gif"></Td>
						</Tr>
					</table>
				</div>
			</td>

		</tr>
		<tr>
		
		</tr>
</table>
</body>
</html>
<?php
if(isset($_POST['Submit']))
{
require "db.php";
$cid=$_GET['IndustryID'];
$newc=$_POST['Category'];
mysql_query("INSERT INTO `mqblikoc_trade`.`sub_category` (`cid`, `sid`, `sub_cat_name`) VALUES ($cid, '', '$newc');");
$msg="SubCategory $newc Added Successfully..!";
header("location:subcategories.php?IndustryID=$cid&msg=$msg");
}
?>
<?php
ob_end_flush();
?>
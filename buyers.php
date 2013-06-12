
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
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

<script>
function ConfirmDelete(id)
{
	var result = confirm("Are you sure you want to Delete this Buyer?");
	if (result==true)
	{
		window.location = "buyer_delete_profile.php?id="+id;
	}
}

</script>

</head>
<body >
	<table width="1003" border="0" align="center" cellspacing="0">
		<Tr  align="center">
			<Td colspan="3">
				<table border="0" cellpadding="5" cellspacing="0" style="vertical-align:top">
					<Tr align="center">
						<Td  align="center" width="361"><h2>Hello Admin!!</h2></Td>
					</Tr>
			  </table>
			</td>
		</Tr>
		<Tr>

			<Td height='24' colspan="2" align="right" background='images/headCap.gif'>
			<div  style="float:left; margin:0 0 0 200px; font-weight:bold "class="style2">
				Welcome to Administrator Control Panel
			</div>
				<span class="style1" >
					admin |
					<a href='home.php' class='topcap'>Home</a>|
					<a href='logout.php' class='topcap'>Logout</a>
				</span>
			</td>
		</Tr>
		<Tr>
			<Td height='24' colspan="2" align="Center"> 
				<div style="float:left; margin-Left:200px;">
										
				</div>

			</td>
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
					<h1 style="text-align:center; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px; color:#990000; ">Buyers</h1>
<?php
if(isset($_GET['msg']))
{
echo "<font color=red>'$_GET[msg]'</font>";
}
?>
<p align="center">
<form method="post" action="buyers.php">
Search: <input type="text" name="search"> 

Search By: <select name="searchby">
<option value="All Fields">All Fields</option>
<option value="Company Name">Company Name</option>
<option value="Address">Address</option>
<option value="Name">Name</option>
<option value="Phone">Phone</option>
</select>
<input type="hidden" name="searching" value="true">
<input type="submit" value="Search" name=action>
</form>
</p>

								<table width="99%" cellspacing="1" cellpadding="5" align="center">
							<tr style="background-color:#000066;">
										<td class="whitebold" style="font-weight:bold; font-size:12px" >First Name</td>
										<td class="whitebold" style="font-weight:bold;font-size:12px" >Last Name</td>
										<td class="whitebold" style="font-weight:bold;font-size:12px" >Company Name</td>
										<td class="whitebold" style="font-weight:bold;font-size:12px" >Business Email</td>
										<td class="whitebold" style="font-weight:bold;font-size:12px" >Status</td>
										<td class="whitebold" style="font-weight:bold;font-size:12px" >Details</td>
										<td class="whitebold" style="font-weight:bold;font-size:12px" >Delete</td>
							</tr>

									<!-- Start Catetory Admin -->
									<?php
									include "db.php";
									$query=$_POST['search'];
									if(isset($_POST['action']))
									{
									if($_POST['searchby']=='All Fields')
									{
									
									$rs=mysql_query("select * from trade_lead,register where trade_lead.Trade_type='BO' AND register.email=trade_lead.email AND register.comp_name LIKE '%$query%' OR register.street_address LIKE '%$query%' OR register.street_address LIKE '%$query%' OR register.name LIKE '%$query%' OR register.ph_number LIKE '%$query%'");
	                                 }
									 else if($_POST['searchby']=='Company Name')
									 {
									   $rs=mysql_query("select * from trade_lead,register where trade_lead.Trade_type='BO' AND register.email=trade_lead.email AND register.comp_name LIKE '%$query%'");
									 }
									 else if($_POST['searchby']=='Address')
									 {
									  $rs=mysql_query("select * from trade_lead,register where trade_lead.Trade_type='BO' AND register.email=trade_lead.email AND register.street_address LIKE '%$query%'");
									 }
									 else if($_POST['searchby']=='Name')
									 {
									   $rs=mysql_query("select * from trade_lead,register where trade_lead.Trade_type='BO' AND register.email=trade_lead.email AND register.name LIKE '%$query%'"); 
									 }
									 else if($_POST['searchby']=='Phone')
									 {
									   $rs=mysql_query("select * from trade_lead,register where trade_lead.Trade_type='BO' AND register.email=trade_lead.email AND register.ph_number LIKE '%$query%'");
									 }
									 }
									 else 
									 {
									    $rs=mysql_query("select * from trade_lead,register where trade_lead.Trade_type='BO' AND register.email=trade_lead.email");
									 }
									 if(mysql_num_rows($rs)==0)
									{
									   echo "<font color=red>No Records TO Display</font>";
									}
									else 
									{
									   echo "<font color=red><b>".mysql_num_rows($rs)."</b>&nbsp;&nbsp;Records Found<font>";
									}
									while($r=mysql_fetch_array($rs))
									{
									
									
									echo "<Tr class='currentData' bgcolor='#eeeeee'><td class='adminvalues' >";
									echo "$r[10] </td><td class='adminvalues' >-</td><td class='adminvalues' >";
									echo " $r[19]</td><td class='adminvalues' >";
									echo "$r[12] </td><td class='adminvalues' ><a class='edit' href='buyerstatus.php?BuyerID=$r[0]&status=True'>$r[11]</a></td><td class='adminvalues' ><a class='edit' href='buyer_details.php?BuyerID=54'>Details</a></td>";

															echo "<td><a class='delete' href='javascript:ConfirmDelete($r[0]);'>Delete</a></td></tr>";
									}
									?>
															
														
														</table>

			</td>

		</tr>
		<tr>
		
		</tr>
</table>
</body>
</html>
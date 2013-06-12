

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>World Biggest B2B Portal - Admin Control Panel</title>
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
	var result = confirm("Are you sure you want to Delete this Country ?");
	if (result==true)
	{
		window.location = "delete_country.php?id="+id;
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
						<Td  align="center" width="361"><h2>Welcome Admin!!</h2></Td>
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
				<br>
<br>

					* <a href="add_country.php" class="edit">Add new Country</a>

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

				<div style="margin:0 10px 0 10px; ">
					<table border="0" cellpadding="0" cellspacing="0" width="100%" >
						<Tr>
							<Td width="16" height="24"><img src="images//1.gif"></Td>
							<Td background="images//2.gif" class="style2" style="font-weight:bold ">
							<table width="100%">
							<tr>
										<td width="74%" class="style1" style="font-weight:bold; font-size:12px">Country</td>
										<td width="15%" class="style1" style="font-weight:bold;font-size:12px">Edit</td>
										<td width="11%" class="style1" style="font-weight:bold;font-size:12px">Delete</td>
							
							</tr>
							</table>
							</Td>
							<Td width="16" height="24"><img src="images//3.gif"></Td>
						</Tr>
						<Tr>
							<Td background="images//7.gif"></Td>
							<Td valign="top" background="images//9.gif">
								<table width="100%">
									<!-- Start Catetory Admin -->
									<Tr class='currentData' bgcolor='#eeeeee'>
														<td class='adminvalues'>Armenia</td>
														<td align='Center'><a class='edit' href='edit_country.php?CountryID=81'>EDIT</a> </td>
														<td align='Center'><a class='delete' href='javascript:ConfirmDelete(81);'>DELETE</a> </td>
														</tr><Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues'>Egypt</td>
														<td align='Center'><a class='edit' href='edit_country.php?CountryID=84'>EDIT</a> </td>
														<td align='Center'><a class='delete' href='javascript:ConfirmDelete(84);'>DELETE</a> </td>
														</tr><Tr class='currentData' bgcolor='#eeeeee'>
														<td class='adminvalues'>Iran</td>
														<td align='Center'><a class='edit' href='edit_country.php?CountryID=83'>EDIT</a> </td>
														<td align='Center'><a class='delete' href='javascript:ConfirmDelete(83);'>DELETE</a> </td>
														</tr><Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues'>uganda</td>
														<td align='Center'><a class='edit' href='edit_country.php?CountryID=82'>EDIT</a> </td>
														<td align='Center'><a class='delete' href='javascript:ConfirmDelete(82);'>DELETE</a> </td>
														</tr><Tr class='currentData' bgcolor='#eeeeee'>
														<td class='adminvalues'>uk</td>
														<td align='Center'><a class='edit' href='edit_country.php?CountryID=85'>EDIT</a> </td>
														<td align='Center'><a class='delete' href='javascript:ConfirmDelete(85);'>DELETE</a> </td>
														</tr><Tr class='currentData' bgcolor='#cccccc'  height='3'>
														<td> </td>
														<td align='Center'></td>
														<td align='Center'></td>
														</tr>								</table>
							</Td>

							<Td background="images//8.gif"></Td>
						</Tr>
						<Tr>
							<Td width="16" height="26"><img src="images//4.gif"></Td>
							<Td background="images//6.gif"></Td>
							<Td width="16" height="26"><img src="images//5.gif"></Td>
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


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
</head>
<body >
	<table width="1003" border="0" align="center" cellspacing="0">
		<Tr  align="center">
			<Td colspan="3">
				<table border="0" cellpadding="5" cellspacing="0" style="vertical-align:top">
					<Tr align="center">
						<Td  align="center" width="361"><h3>Hello Admin!!</h3></Td>
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
<br>

<h1 style="text-align:center; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:18px; color:#990000; ">Buyer Details</h1>


<p align="center">
<strong><a href="buyingleads.php?BuyerID=54">Buying Leads</a> | <a href="buyer_comments.php?BuyerID=54">Ratings/Comments</a> | <a href="buyer_blogs.php?BuyerID=54">Blogs</a></strong>
</p>

								<table width="100%" cellpadding="5" cellspacing="0" border="1" bordercolor="#000066">
								<Tr bgcolor="#000066"><td colspan="2" class="whitebold">Personal Information</td></Tr>

								<?php
									include "db.php";
									$rs=mysql_query("select * from register where email in(select email from trade_lead where Trade_type='SO')");
									$i=0;
									while($r=mysql_fetch_array($rs))
									{
									
								               
							echo "<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='150' >First Name:</td>
															<td >$r[0]</td></tr>
                                  					
													
													<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='150' >Last Name:</td>
															<td >$r[1]</td>
														</tr>
														
														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='150' >Sex:</td>
															<td  >$r[2]</td>
														</tr>
														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='150' >Industry ID:</td>
															<td  >$r[3]</td>
														</tr> 							
														
														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='150' >Street Address1:</td>
															<td  >$r[4]</td>
														</tr>
														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='150' >Street Address2:</td>
															<td  >$r[5]</td>
														</tr>
														
														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='150' >Street Address3:</td>
															<td >$r[6]</td>
														</tr>
														
														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='150' >City:</td>
															<td  >$r[7]</td>
														</tr>

														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='150' >Province</td>
															<td  >$r[8]</td>
														</tr>
														
														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='150' >Country</td>
															<td  >$r[9]</td>
														</tr>

														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='150' >Zip Postal Code</td>
															<td  >$r[10]</td>
														</tr>

														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='150' >Phone:</td>
															<td  >123456789</td>
														</tr>

														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='150' >Mobile:</td>
															<td  ></td>
														</tr>

														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='150' >Business E-mail:</td>
															<td  >urweb@msn.com</td>
														</tr>
														
														
														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='150' >Fax Number:</td>
															<td  ></td>
														</tr>
														
														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='150' >Website:</td>
															<td  >http://www.google.com</td>
														</tr>
														
														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='150' >Active:</td>
															<td  >False</td>
														</tr>";
												}
												?>
								</table>
					<br>
	
								<table width="100%" cellpadding="5" cellspacing="0" border="1" bordercolor="#000066">
								<Tr bgcolor="#000066"><td colspan="2" class="whitebold">Company Information</td></Tr>

									<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='180'>Company Name:</td>
															<td >1stweb</td>
														</tr> 
														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='180' >Business Type:</td>
															<td >Trading Company|Buying Office|Agent|Distributor/Wholesaler|Government ministry/Bureau/Commission</td>
														</tr>
														
																												
														
														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='180' >Street Address1:</td>
															<td ></td>
														</tr>
														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='180' >Street Address2:</td>
															<td ></td>
														</tr>
														
														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='180' >Street Address3:</td>
															<td ></td>
														</tr>
														
														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='180' >City:</td>
															<td ></td>
														</tr>

														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='180' >Province</td>
															<td ></td>
														</tr>

														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='180' >Zip Postal Code</td>
															<td ></td>
														</tr>

														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='180' >Phone:</td>
															<td ></td>
														</tr>

														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='180'  >Mobile:</td>
															<td ></td>
														</tr>

														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='180' >Fax:</td>
															<td ></td>
														</tr>
						
														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='180' >Num Of Employess:</td>
															<td >51 - 100 People</td>
														</tr>
														
														
														
														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='180' >Year Established:</td>
															<td >1995</td>
														</tr>
														
														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='180'  >Certificates:</td>
															<td ></td>
														</tr>
														
														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='180' >Company Introduction:</td>
															<td >www.google.com</td>
														</tr>
														
														<Tr class='currentData' bgcolor='#ffffff'>
														<td class='adminvalues' width='180' >Key Products:</td>
															<td ></td>
														</tr>

								</table>

			</td>

		</tr>
		<tr>
		
		</tr>
</table>
</body>
</html>
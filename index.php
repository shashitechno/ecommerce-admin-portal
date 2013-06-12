
<!DOCTYPE HTML PUBLIC "-/W3C/DTD HTML 4.01 Transitional/EN"
"http:/www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>World Biggest B2B Portal .:: Admin Control Panel ::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="/style.css" rel="stylesheet" type="text/css">
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
<script language="javascript" type="text/javascript">
	function validate(theform)
	{
		if(theform.MemberID.value == "")
		{
			alert ("Please Enter the LOGIN ID");
			theform.MemberID.focus();
			return false;
		
		}

		else if(theform.Password.value == "")
		{
			alert ("Please Enter Your Password ");
			theform.Password.focus();
			return false;
		
		}

	}
	function check(){
		document.getElementById('MemberID').focus();
	}
</script>
</head>
<body onLoad="check()">
	<table width="1003" border="0" align="center" cellspacing="0">
		<Tr  align="center">
			<Td colspan="2">
				<table border="0" cellpadding="5" cellspacing="0" style="vertical-align:top">
					<Tr align="center">
						<Td  align="center" width="361"><h2>Admin Panel</h2></Td>
					</Tr>
			  </table>
			</td>
		</Tr>
		<Tr>
			<Td height='24' background='images/headCap.gif' align='right'></td>
		</Tr>
		<tr align="center">
			<td>
				<div style="margin-top:20px; ">
					<table border="0" cellpadding="0" cellspacing="0" >
						<Tr>
							<Td width="16" height="24"><img src="images/1.gif"></Td>
							<Td background="images/2.gif" class="style2" style="font-weight:bold ">Administrator Control Panel</Td>
							<Td width="16" height="24"><img src="images/3.gif"></Td>
						</Tr>
						<Tr>
							<Td background="images/7.gif"></Td>
							<Td valign="top" background="images/9.gif">
							<form action="login.php" method="post" onsubmit="return validate(this);">
								<div align="left" style="margin-top:15px ">

								<table width="200" align="left">
									<tr>
								
										<td ><?php
										  if(isset($_GET['err']))
										  {
										  if($_GET['err']==1)
										  {
										     echo "<font color=red>Wrong Username Or Password</font>";
											 
										  }
										  }
										  ?>
											<label class="style2">Login:</label>
											<input size="30" id="MemberID" name="username"/>
										</td>
									</tr>
									<tr>
										<td>
											<label class="style2">Password:</label><br />
											<input size="30" type="password"  id="Password" name="password"/>
										</td>
									</tr>
									<tr align="center">
										<td>
											<input type="submit"  id="Submit" name="Submit" value="   Enter   "/>
										</td>
									</tr>
								</table>
								
								</div>
							</form>
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
</table>
</body>
</html>
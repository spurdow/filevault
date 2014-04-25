<?php
session_start();

if(isset($_POST['myusername'])&&isset($_POST['mypassword'])){
	if($_POST['myusername']=='admin'&&$_POST['mypassword']=='Password123'){
		
		$_SESSION['name'] = $_POST['myusername'];
		$_SESSION['pass'] = $_POST['mypassword'];
		header("Location: src/"); 
	}else
	{
		echo 'wrong credintials';
	}
}

?>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="index.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>DEMO LOGIN </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>


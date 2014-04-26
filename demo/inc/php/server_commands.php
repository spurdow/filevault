<?php 
	include 'dbconnect.php';

	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
	mysql_select_db($database) or die(mysql_error());


	function getBalance(){
		$sql = "SELECT * FROM demopaypalaccount ";

		$result = mysql_query($sql);
		if($result){
			$row = mysql_fetch_assoc($result);

		}
		return $row;

	}

	mysql_close($conn);
?>
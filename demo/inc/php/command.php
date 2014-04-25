<?php
include 'dbconnect.php';


//Make MYSQL connection
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($database) or die(mysql_error());

//insert a dummy history
$sql='INSERT INTO demopaypal(ID,
				UID,
				DateTime,
				Type,
				Name,
				Address,
				EmailT,
				EmailF,
				Status,
				Tamount,
				Famount,
				Namount,
				Iamount,
				Currency,
				ItemTitle,
				Description,
				Extra1,
				Extra2)	
		VALUES ( 0,
				 "'.$_POST['utn'].'", 
				 "'.date('Y-m-d h:i:s',strtotime($_POST['Pdate'])).'",
				 "'.$_POST['typ'].'",
				 "'.$_POST['nme'].'",
				 "'.$_POST['add'].'",
				 "'.$_POST['emlt'].'",
				 "'.$_POST['emlf'].'",
				 "'.$_POST['sta'].'",
				 "'.$_POST['tam'].'",
				 "'.$_POST['fam'].'",
				 "'.$_POST['nam'].'",
				 "'.$_POST['iam'].'",
				 "CAD",
				 "'.$_POST['it'].'",
				 "'.$_POST['it'].'",
				 ".",
				 "." )';

// Insert a row of information
mysql_query($sql) or die(mysql_error());

mysql_close($conn);
?>
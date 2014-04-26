<?php
	include '../inc/php/dbconnect.php';
	//Make MYSQL connection
	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
	mysql_select_db($database) or die(mysql_error());

	
	switch(@$_GET['cmd']){
		case 'search'  : include('search.php'); break;
		case 'reports' : include('reports.php');break;
		case 'history' : include('history.php');break;
		default : include 'account_content.php'; break;
	}

	mysql_close($conn);
?>
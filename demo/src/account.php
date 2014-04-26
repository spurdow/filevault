<?php

  session_start();
  if(!isset($_SESSION['name']) || !isset($_SESSION['pass'])){
		header("location: ../");
	}

  include('../inc/php/server_commands.php');
  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../thms/css/paypalaccounts.css" />
    <link rel="stylesheet" type="text/css" href="../thms/css/accountcontent.css" />
    <link rel="stylesheet" type="text/css" href="../thms/css/topmenu.css" />
    <script type="text/javascript" src="../inc/js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="../inc/js/account.js"></script>
    <script type="text/javascript" src="../inc/js/topmenu.js"></script>

<title></title>
</head>
<?php include 'topmenu.php'; ?>
<body>
	<div class="container">
    	<?php include 'accounttopmenu1.php'; ?>
        <?php include 'contents.php'; ?>
        <?php include 'footer2.php'; ?>
    </div>
</body>
</html>
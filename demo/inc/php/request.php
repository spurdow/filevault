<?php
include 'dbconnect.php';
//Make MYSQL connection
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($database) or die(mysql_error());

if($_POST["cmd"]=="getdata"){
	echo getdata();
}

if($_POST["cmd"]=="account"){
	echo getaccount();
}

if($_POST["cmd"]=="loadaccount"){
	echo loadaccount();
}

if($_POST["cmd"]=="newaccount"){
	echo newaccount($_POST['id']);
}


if($_POST["cmd"]=="edit"){
	echo editaccount();
}

if($_POST["cmd"]=="editall"){
	echo editall($_POST["c"]);
}

if($_POST['cmd']=='edit_balance'){
	echo editBalance($_POST['money']);
}

mysql_close($conn);

function getdata(){
		$data = '';
		$sql='SELECT * FROM demopaypal';
		// Insert a row of information
		$result = mysql_query($sql) or die(mysql_error());
		
		$x = 1;
		if(!$result){
				return 15;
			}
		else{
				while($row = mysql_fetch_array($result))
		  		{
					$data .= '<tr>';
                    $data .= '<td><input type="checkbox"/></td>';
                    $data .= '<td><input class="erow" id="date'.$x.'"  value="'.$row['DateTime'].'"/></td>';
                    $data .= '<td></td>';
                    $data .= '<td><input class="erow" id="type'.$x.'" value="'.$row['Type'].'"/></td>';
                    $data .= '<td><textarea id="name'.$x.'" class="erow" style="font-family:Arial, Helvetica, sans-serif">'.$row['Name'].'</textarea></td>';
                    $data .= '<td><input class="erow" id="status'.$x.'" value="'.$row['Status'].'"/></td>';
                    $data .= '<td><a class="details" id="'.$row['ID'].'">Details</a></td>';
                    $data .= '<td></td>';
                    $data .= '<td><input class="erow" id="tamount'.$x.'" value="'.$row['Tamount'].'"/></td>';
                    $data .= '</tr>';
					$x = $x+1;
		  		}
				
			return $data;
			}
}

function loadaccount(){
		$data = '';
		$sql='SELECT * FROM demopaypalaccount WHERE ID="'.$_POST['id'].'"';
		// Insert a row of information
		$result = mysql_query($sql) or die(mysql_error());
		
		if(!$result){
				return 15;
			}
		else{
				while($row = mysql_fetch_array($result))
		  		{
					$data = $row;
		  		}
				
			return json_encode($data);
			}
}

function getaccount(){
		$data = '';
		$sql='SELECT * FROM demopaypal WHERE ID="'.$_POST['id'].'"';
		// Insert a row of information
		$result = mysql_query($sql) or die(mysql_error());
		
		if(!$result){
				return 15;
			}
		else{
				while($row = mysql_fetch_array($result))
		  		{
					$data = $row;
		  		}
				
			return json_encode($data);
			}
}


function editaccount(){
		$data = '';
		$sql="UPDATE demopaypal SET
					Address ='".$_POST['add']."',
					UID = '".$_POST['utn']."',
					`Name` = '".$_POST['nme']."',
					EmailF = '".$_POST['emlf']."',
					EmailT = '".$_POST['emlt']."',
					Tamount = '".$_POST['tam']."',
					Famount = '".$_POST['fam']."',
					Namount = '".$_POST['nam']."',
					Iamount = '".$_POST['iam']."',
					ItemTitle = '".$_POST['it']."',
					DateTime = '".$_POST['pdate']."',
					Extra1 = '".$_POST['ptime']."',
					`Status` = '".$_POST['sta']."',
					Description = '".$_POST['desc']."'
				WHERE ID = 1";
		// Insert a row of information
		mysql_query($sql) or die(mysql_error());
}

function editall($c){
		$data = '';
		$sql="UPDATE demopaypal SET
					`Name` = '".$_POST['nme']."',
					Tamount = '".$_POST['tam']."',
					Type = '".$_POST['typ']."',
					DateTime = '".$_POST['pdate']."',
					`Status` = '".$_POST['sta']."'
				WHERE ID = ".$c;
		// Insert a row of information
		mysql_query($sql) or die(mysql_error());
}


function newaccount($id){
		$data = '';
		$sql="UPDATE demopaypalaccount SET
					FullName = '".$_POST['nme']."',
					Paypalbalance = '".$_POST['bal']."',
					Email = '".$_POST['eml']."',
					Company = '".$_POST['com']."'
				WHERE ID = ".$id;
		// Insert a row of information
		mysql_query($sql) or die(mysql_error());
}

function editBalance(){
	$args = func_get_args();
	$money = $args[0];

	$sql = "UPDATE demopaypalaccount SET Paypalbalance = '" . $money . "'";

	$result = mysql_query($sql) ;
	if($result)
		echo json_encode(array('status'=> 'success','money'=>$money));
	else
		echo json_encode(array('status' => 'error'));
}

 ?>
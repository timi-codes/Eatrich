<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start(); // Our custom secure way of starting a PHP session.


$name='SELECT myid,ambLevel FROM members WHERE inviteid IN (SELECT myid FROM members WHERE inviteid="'.$_SESSION['myid'].'"AND reg_status="paid") AND reg_status="paid"';

$result = $mysqli->query($name);

$totalcash=0;
$numLb=0;
$numSb=0;
$numRb=0;
$numNb=0;

if ($result->num_rows!=0) {
	while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
		 $ambLevel=$rs["ambLevel"];
		if ($ambLevel=="LB") {
			$numLb+=1;
		}elseif ($ambLevel=="SB") {
			$numSb+=1;
		}elseif ($ambLevel=="RB") {
			$numRb+=1;
		}elseif ($ambLevel=="NB") {
			$numNb+=1;
		}  
	}

	$totalcash=($numLb*2000) + ($numSb*8000) + ($numRb*20000) + ($numNb*80000);

	$insert_stmt = $mysqli->prepare('UPDATE members SET totalcash = ? WHERE myid="'.$_SESSION['myid'].'"');
    $insert_stmt->bind_param('s', $totalcash);
    // Execute the prepared query.
    $insert_stmt->execute();
}


$weldone=$_POST["num"];
if ($weldone=="indirect") {
	echo $result->num_rows;
}

$mysqli->close();

?>
<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start(); // Our custom secure way of starting a PHP session.


header("Access-Control-Allow-Origin: *");
$name='SELECT myid, firstname, lastname, username, email, phone, ambLevel  FROM members WHERE inviteid="'.$_SESSION['myid'].'" AND reg_status="NYP"';
$result = $mysqli->query($name);
$outp=" ";

if ($result->num_rows!=0) {
    $outp.="<table class='table table-bordered'><tr> 
			<tr> 
			<th> Name</th> 
			<th> Email </th> 
			<th> Phone </th> 
			</tr>";
	while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
		$id=$rs["myid"];
		$fname=$rs["firstname"];
		$lname=$rs["lastname"];
	    $username=$rs["username"];
	    $ambLevel=$rs["ambLevel"];
	    $phone=$rs["phone"];
	    $email=$rs["email"];

	    $outp.="<tr>
			   <td>".$fname." ".$lname."</td>
			   <td>".$email."</td>
			   <td>".$phone."</td>
			   </tr>";
	}
	$outp.="</table>";
}

$weldone=$_POST["num"];
if ($weldone=="unactivatedlist") {
	echo $outp;
}

$mysqli->close();

?>
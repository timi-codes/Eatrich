<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start(); // Our custom secure way of starting a PHP session.

header("Access-Control-Allow-Origin: *");

$name='SELECT myid, firstname, lastname, username, email, phone, ambLevel  FROM members WHERE inviteid="'.$_SESSION['myid'].'" AND reg_status="paid"';
$result = $mysqli->query($name);

if ($result->num_rows!=0) {
    $outp="<table class='table table-bordered'><tr> 
			<th># Eatrich Id</th> 
			<th> Name <br> Email </th> 
			<th> N5k </th> 
			<th> N20k </th> 
			<th> N50k </th> 
	 		<th> N200k</th> 
	 		<th> N500k </th> 
			<th> Phone </th></tr> ";
	while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
		$id=$rs["myid"];
		$fname=$rs["firstname"];
		$lname=$rs["lastname"];
	    $username=$rs["username"];
	    $ambLevel=$rs["ambLevel"];
	    $phone=$rs["phone"];
	    $email=$rs["email"];

	    $outp.="<tr>
			   <td>".$id."</td>
				<td>".$fname." ".$lname."<br/>".$email."<br/></td>";

				if ($ambLevel=='LB') {
				 	$outp.='<td><img src="image/ck_ico1.png" align="middle"/></td>
						 	<td></td>
						 	<td></td>
						 	<td></td>
						 	<td></td>' ;
				 }elseif ($ambLevel=="SB") {
				 	$outp.='<td></td>
				 	        <td><img src="image/ck_ico1.png" align="middle"/></td>
						 	<td></td>
						 	<td></td>
						 	<td></td>' ;
				}elseif ($ambLevel =="RB") {
				 	$outp.='<td></td>
				 			<td></td>
				 			<td><img src="image/ck_ico1.png" align="middle"/></td>
				 	        <td></td>
				 	        <td></td>' ;
				}elseif ($ambLevel=="NB") {
				 	$outp.='<td></td>
						 	<td></td>
						 	<td></td>
						 	<td><img src="image/ck_ico1.png" align="middle"/></td>
						 	<td></td>' ;
				}elseif ($ambLevel=="IB") {
				 	$outp.='<td></td>
						 	<td></td>
						 	<td></td>
						 	<td></td>
						 	<td><img src="image/ck_ico1.png" align="middle"/></td>' ;
				}
				$outp.="<td>".$phone."</td>
			</tr>";}
	$outp.="</table>";
}

$weldone=$_POST["num"];
if ($weldone=="numofdirect") {
	$num=$result->num_rows;
	echo $num;
}

$listnumba=$_POST["num"];
if ($listnumba=="listofdirect") {
	echo $outp;
}
$mysqli->close();

?>
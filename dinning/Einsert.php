<!--IT23164826
     DISANAYAKA E.S-->

<?php

	require 'config.php';
	
	$FirstName=$_POST["firstName"];
	$LastName=$_POST["lastName"];
	$NIC=$_POST["NIC"];
	$MobileNo=$_POST["MobileNumber"];
	$Email=$_POST["email"];
	$Password=$_POST["password"];
	
	$Sql="INSERT INTO user VALUES('','$FirstName','$LastName','$NIC','$MobileNo','$Email','$Password')";

	if($con->query($Sql)==TRUE)
	{
		echo "Successful Creation";
	}
	else
	{
		echo "error".$con->error;
	}
	include 'Eread.php';

	$con->close();

?>

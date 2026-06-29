<!--IT23164826
     DISANAYAKA E.S-->
	 <?php
    require 'config.php';
	$userId=$_POST["userId"];
	$FirstName=$_POST["firstName"];
	$LastName=$_POST["lastName"];
	$MobileNo=$_POST["MobileNumber"];
	$Email=$_POST["email"];
	$Password=$_POST["password"];
    

    if(empty($userId)||empty($FirstName)||empty($LastName)||empty($MobileNo)||empty($Email)||empty($Password))
    {
        echo "Please update all columns";
    }
    else{
            $sql="UPDATE user SET FirstName='$FirstName',LastName='$LastName',MobileNo='$MobileNo',Email='$Email',password='$Password' WHERE UserId='$userId'";
            if($con->query($sql))
		    {
                 echo "updated successfully";
            }
               else
                 {
				 echo "not updated";}
	}
	$con->close();
?>

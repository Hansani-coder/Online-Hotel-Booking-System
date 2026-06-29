<!--IT23157446 B.A.L.M.U. Bogoda Arachchi-->
<?php
	require 'config.php';

	if(isset($_POST["login"]))
	{
		$userID= $_POST["username"];
		$password= $_POST["password"];
		
		$sql="SELECT UserId,password FROM user WHERE UserId='$userID' AND password='$password'";
		
		$result=mysqli_query($con,$sql);
		
		if ($result)
		{
			if($row=mysqli_fetch_assoc($result))
			{
				session_start();
				$_SESSION["TheLogin"]=true;
				$_SESSION["Login1"]=$userID;
				
				header("Location:header.php?Home");
				exit();
			}
		}
		
		header("Location:login.php?Error");
		exit();
	}
	
	?>
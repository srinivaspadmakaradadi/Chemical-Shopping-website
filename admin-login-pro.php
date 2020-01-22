<?php
session_start();
require 'db.php';

 $user = $_POST['email'];
   $password = $_POST['password'];

   



$sql = "SELECT * from adm where mailid ='$user' AND password ='$password'";
	$result   =  mysqli_query($conn,$sql);
	$rowcount = mysqli_num_rows($result);
	if($rowcount  > 0)
	{
		$row = mysqli_fetch_array($result);

    $_SESSION['admin'] = $_POST['email'];
		header("Location:admin/admin.php");
	}
	else
	{
	   header("Location:adminlogin.php?login==invalid");
	}

?>
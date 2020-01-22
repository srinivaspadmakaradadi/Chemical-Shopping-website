<?php
session_start();
require_once("db.php");

if(isset($_POST['submit']))
{
   $user = $_POST['email'];
   $password = $_POST['password'];



$sql = "SELECT * FROM registration where email_id ='$user' AND password = '$password'";
	$result   =  mysqli_query($conn,$sql);
	$rowcount = mysqli_num_rows($result);
	if($rowcount > 0)
	{
		$row = mysqli_fetch_array($result);

    $_SESSION['user'] = $_POST['email'];
		header("Location:Dashboard.php");
	}
	else
	{
	   header("Location:login.php?login==invalid");
	}
}
?>
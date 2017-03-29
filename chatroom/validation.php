<?php
	session_start();
	include("config.php");
	$user=$_POST['username'];
	$sql="SELECT username from users where username='$user'";
	$res=mysqli_query($db,$sql);
	if(!$res)
	{
		echo "error";
	}
	else
	{
		if(mysqli_num_rows($res))
		{
			echo "success in searching";
			$_SESSION['username']=$user;
			header("Location: home.php");
		}
		else
		{
			echo "failed in searching";
		}
	}
?>
<?php
	session_start();
	include("config.php");
	$msg=$_POST['msg'];
	if(!empty($msg))
	{
		$user=$_SESSION['username'];
		$sql="INSERT into chats (username,chat,time_stamp) values ('$user','$msg',now())";
		$res=mysqli_query($db,$sql);
		if(!$res)
		{
			echo "error";
		}
		else
		{
			echo "success";
		}
	}
?>
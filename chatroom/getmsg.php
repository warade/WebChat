<?php
	session_start();
	include("config.php");
	$array=array();
	$sql="SELECT chat,username from chats";
	$res=mysqli_query($db,$sql);
	if(!$res)
	{
		echo "error";
	}
	else
	{
		if(mysqli_num_rows($res))
		{
			while($data=mysqli_fetch_object($res))
			{
				$array[]=array('chat'=>$data->chat,'username'=>$data->username);
			}
			foreach ($array as $key => $value) {
				if(!strcmp($value['username'], $_SESSION['username']))
				{
					echo "<div id='msg1_ofactive'>"."<small id='username_inmsg_ofactive'>@".$value['username']."</small><br>".$value['chat']."</div>\n";
				}
				else
				{
					echo "<div id='msg1'>"."<small id='username_inmsg'>@".$value['username']."</small><br>".$value['chat']."</div>\n";
				//echo "".$value['chat']."\n";
				}
			}
		}
	}
?>
<?php
session_start();
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		chatroom
	</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		    <!-- jQuery -->
	    <script src="jquery.js"></script>
	     <!-- Bootstrap Core JavaScript -->
	    <script src="bootstrap.min.js"></script>
	  	<script type="text/javascript" src="required.js"></script>
</head>
<body>
	<div id="wrapper">
		<header id="user"><?php echo "".$_SESSION['username']; ?></header>
		<a href="logout.php"><button id="logout_btn" class="btn btn-danger">Logout</button></a>
		<div id="chatwrapper">
			<div id="chats">
				<!-- chats will be loaded here by jquery.ajax-->
			</div>

			<form id="sub_msgform">
				<button type="button" id="refresh" class="btn btn-primary">Refresh</button>
				<textarea id="inp_msg" rows="5" cols="50" ></textarea> 
				<button type="button" id="sub_msg_btn" class="btn btn-primary">send</button>
			</form>
		</div>
		
	</div>
	<hr>
	<div id="footer">
		<footer><h2>Had fun????</h2><h1>CHATROOM..Chat with your friends..!</h1></footer>
	</div>
</body>
</html>
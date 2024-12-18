<?php
session_start();
if(!(isset($_SESSION['username'])))
{
	header("location:home.php");
}
session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
	Purplicious by Adonis Ronquillo for Free Website Templates
	www.freewebsitetemplat.es / www.doni.us
	Images by Image Base http://imagebase.davidniblack.com/
	Released under the Creative Commons Attribution 3.0 License.
-->

<head>

<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Event Management</title>
		<link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		


  
        <style type="text/css">
<!--
.style1 {color: #98ae5b}
-->
        </style>
<body>
	<div id="outer">
		<div id="header">
			<div id="nav">
				
		    </div>
		</div>
		<div id="banner">
			<img src="images/016_DJ_indian-wedding-room-900x600.jpg" width="1180" height="320" alt="" />
				
				<div id="logo">
					<h2><a href="#">Event management </a></h2>
				</div>				
		</div>
		<div id="main" style="height:400px;">
		<br />
<p align="center" class="style1">You have been logged out</p>

<p align="center"><span class="style1">click here to</span> <a href="home.php">Login</a></p>

</div>
</div>
		 </div>
	</div>
		<div style="margin: 1em 0 3em 0; text-align: center;">
		</div>
</body>
</html>
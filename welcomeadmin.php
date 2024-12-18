<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
	Purplicious by Adonis Ronquillo for Free Website Templates
	www.freewebsitetemplat.es / www.doni.us
	Images by Image Base http://imagebase.davidniblack.com/
	Released under the Creative Commons Attribution 3.0 License.
-->

<head>
<style>
.back
{
margin-left:1020px;
}
</style>
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Purplicious</title>
		<link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		


  
<body>
	<div id="outer">
		<div id="header">
			<div id="nav">
			<ul>
			<li><a href="welcomeadmin.php">Home</a></li>
			<li><a href="adminservices.php">Services</a></li>
			<li><a href="viewuser.php">User</a></li>
			<li><a href="vieworders.php">Order</a></li>
			<li><a href="fedback.php">Feedback</a></li>
			<li><a href="viewvendor.php">View Vendor</a></li>
            
			</ul>
				
		    </div>
		</div>
		<div id="banner">
			<img src="images/016_DJ_indian-wedding-room-900x600.jpg" width="1180" height="320" alt="" />
				
				<div id="logo">
					<h2><a href="#">Event management </a></h2>
				</div>				
		</div>
		<div id="main" style="height:400px">
		<?php
		echo "<font color=#330033>Welcome"." ".$_SESSION['nm']."</font>";
		echo "<p>";
		$currentdate=date("l,d F Y");
		echo "<font color=#330033>".$currentdate."</font>";
		echo"</p>";
		echo "<a href='logout.php'>"."".""." "." "."logout"."</a>";
		

		?>
		</div>
		 </div>
	</div>
		<div style="margin: 1em 0 3em 0; text-align: center;">
	<a href="welcomeadmin.php">Home</a>|
		<a href="adminservices.php">Services</a>|
			<a href="viewuser.php">User</a>|
			<a href="vieworders.php">Order</a>|
			<a href="fedback.php">Feedback</a>
		
</div>
</body>
</html>
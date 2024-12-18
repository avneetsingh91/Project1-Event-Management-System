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
		<title>Purplicious</title>
		<link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		

<style type="text/css">
.tab2
{
margin-left:400px;
}
.a:hover
	{
		color:#30C;
		text-decoration:none;
	}
	a
	{
		text-decoration:none;
	}
</style>
  
<body>
	<div id="outer">
		<div id="header">
			<div id="nav">
			<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="adminservices.php">Services</a></li>
			<li><a href="viewuser.php">User</a></li>
			<li><a href="vieworders.php">Order</a></li>
			<li><a href="gallery.php">Photogallery</a></li>
			</ul>
				
		    </div>
		</div>
		<div id="banner">
			<img src="images/pic02.jpg" width="1180" height="320" alt="" />
				
				<div id="logo">
					<h2><a href="#">Event management </a></h2>
				</div>				
		</div>
		<div id="main" style="height:500px">
		<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("project1");

$query="select * from contact";
$rid=mysql_query($query) or die(mysql_error());
echo "<table style='border:solid 2px #000000' class='tab2'>";
echo "<tr><th colspan='1'>Id</th>&nbsp;&nbsp;<th colspan='1'>Name</th><th colspan='1'>Email</th><th colspan='1'>Type</th></tr>";
while($res=mysql_fetch_array($rid))
{
echo "<tr><td>".$res['id']."</td><td>".$res['name']."</td><td>".$res['email']."</td><td>".$res['query']."</td><td></tr>";
}
?>
</div>
		
		</div>
			
			
		
		<div style="margin: 1em 0 3em 0; text-align: center;">
			 <a href="home.php" class="a">HOME </a>|<a href="" class="a">CONTACT US </a>|<a href="" class="a">ABOUT US </a>|<a href="" class="a">SERVICES</a>|<br />
		
	<!--%@##-->Design by Mca students.. <a href="http://www.freewebtemplates.com/">Free Website Templates</a>.<!--##@%--></div>
</body>
</html>
		
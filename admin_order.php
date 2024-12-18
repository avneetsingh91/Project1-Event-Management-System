<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
	Purplicious by Adonis Ronquillo for Free Website Templates
	www.freewebsitetemplat.es / www.doni.us
	Images by Image Base http://imagebase.davidniblack.com/
	Released under the Creative Commons Attribution 3.0 License.
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Purplicious</title>
<link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="style.css" />

<style type="text/css">
.tab2 {
	margin-left: 200px;
}
.a:hover {
	color: #30C;
	text-decoration: none;
}
a {
	text-decoration: none;
}
</style>

</head>
<body>
<div id="outer">
	<div id="header">
		<div id="nav">
			<ul>
				<li><a href="welcomeadmin.php">Home</a></li>
				<li><a href="adminservices.php">Services</a></li>
				<li><a href="viewuser.php">User</a></li>
				<li><a href="vieworders.php">Order</a></li>
				<li><a href="feedback.php">Feedback</a></li>
			</ul>
		</div>
	</div>
	<div id="banner">
		<img src="images/pic02.jpg" width="1180" height="320" alt="" />
		<div id="logo">
			<h2><a href="#">Event management </a></h2>
		</div>
	</div>
	<div id="main" style="height:400px; background:#306;">
		<?php
			$id = $_REQUEST['a'];
			$con = mysqli_connect("localhost", "root", "", "project1");

			$query = "SELECT * FROM order_master WHERE orderid='$id'";
			$rid = mysqli_query($con, $query) or die(mysqli_error());

			echo "<table border='12' align='center' width='900' class='tab2' style='color:red;'>";
			echo "<tr><th>Orderid</th><th>servicename</th><th>subservicename</th><th>status</th><th>Vendor Email</th></tr>";

			while ($res = mysqli_fetch_array($rid)) {
				echo "<tr><td>".$res['orderid']."</td><td>".$res['servicename']."</td><td>".$res['sername']."</td><td>".$res['pending']."</td><td>".$res['vemail']."</td></tr>";
			}
		?>
	</div>
	<br class="clear" />
</div>
</body>
</html>

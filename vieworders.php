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
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Event Management</title>
		<link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		

<style type="text/css">

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
			<li><a href="fedback.php">Feedback</a></li>
		</ul>
				
		    </div>
		</div>
		<div id="banner">
			<img src="images/016_DJ_indian-wedding-room-900x600.jpg" width="1180" height="320" alt="" />
				
				<div id="logo">
					<h2><a href="#">Event management </a></h2>
				</div>				
		</div>&nbsp;
     <center>   <h2>View Order</h2><hr/></center>
<br/>
		<?php
$con = mysqli_connect("localhost","root","","project1");

$query="select * from order_detail";
$rid=mysqli_query($con,$query) or die(mysqli_error());
echo "<center><table border='2' class='tab2' style=color:black>";
echo "<tr><th>Orderid</th><th>Eventname</th><th>eventdate</th><th>eventlocation</th><th>eventgathering</th><th>Amount</th><th>clientname</th><th>Delete</th></tr>";
while($res=mysqli_fetch_array($rid))
{
	;
echo "<tr><td><a href='admin_order.php?a=".$res['orderid']."'>".$res['orderid']."</a></td><td>".$res['eventname']."</td><td>".$res['eventdate']."</td><td>".$res['eventlocation']."</td><td>".$res['eventgathering']."</td><td>".$res['total']."</td><td>".$res['clientname']."</td><td><a href='delete1.php?id=".$res['orderid']."'>Delete"."</a></td></tr>";
}
echo"</table></center>";
?>
</div>
		
		</div>
			
			
		
</body>
</html>
		
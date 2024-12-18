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
			<li><a href="welcomeadmin.php">Home</a></li>
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
<?php 
echo "<a href='welcomeadmin.php' class='back'>"."<<"." "."Back"."</a>";
   ?>
				</div>				
		</div>
<div>&nbsp;
     <center>   <h2>View User</h2><hr/></center>
<br/>            	<?php
$con = mysqli_connect("localhost","root","","project1");

$query="select * from  reg";
$rid=mysqli_query($con,$query) or die(mysqli_error());
echo "<center><table border='2' class='tab2' style=color:black>";
echo "<tr><th>firstname</th><th>lastname</th><th>username</th><th>Address</th><th>pincode</th><th>phoneno.</th>	<th>Delete</th></tr>";
while($res=mysqli_fetch_array($rid))
{

echo "<tr><td>".$res['fname']."</td><td>".$res['lname']."</td><td>".$res['uname']."</td><td>".$res['address']."</td><td>".$res['pcode']."</td><td>".$res['pno']."</td><td><a href='delete.php?id=".$res['regid']."'>Delete"."</a></td></tr>";
}

?>

</div>
		
			
		</div>
        
	</body>
</html>
		
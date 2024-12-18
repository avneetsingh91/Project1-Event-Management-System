<?php

mysql_connect("localhost","root","");
mysql_select_db("project1");
$a=$_POST['username'];
$b=$_POST['password'];
$query="select * from admin where username='$a' and password='$b'";
$rid=mysql_query($query) or die(mysql_error());
$res=mysql_fetch_array($rid);
$count=mysql_num_rows($rid);
if($count==1)
{
session_start();
$_SESSION['id']=$res['adminid'];
$_SESSION['nm']=$res['username'];
}
else
{
echo "<script type='text/javascript'>";
echo "alert('please check your username and password')";
echo "</script>";
}
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
		<title>Event Management</title>
		<link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		


  
<body>
	<div id="outer">
		<div id="header">
			<div id="nav">
			<ul>
			<a href="home.php">Home</a>
                        </li>
                        <li>
                            <a href="mail.php">Contact us    </a>
                        </li>
                        
                        <li><a href="feedback.php">Feedback</a>
                        </li>
                        
                        <li class="last">
                            <a href="adminservices2.php">Services</a>
                        </li></ul>
		
				
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
		echo "Welcome"." ".$_SESSION['nm'];
		echo "<p>";
		$currentdate=date("l,d F Y");
		echo $currentdate;
		echo"</p>";
		echo "<a href='logout.php'>"."".""." "." "."logout"."</a>";
		
echo "<a href='admin.php' class='back'>"."<<"." "."Back"."</a>";

		?>
		</div>
		 </div>
	</div>
		<div style="margin: 1em 0 3em 0; text-align: center;">
			 <a href="home.html" class="a">HOME </a>|<a href="" class="a">CONTACT US </a>|<a href="" class="a">ABOUT US </a>|<a href="" class="a">SERVICES</a>|<br />
		
</div>
</body>
</html>
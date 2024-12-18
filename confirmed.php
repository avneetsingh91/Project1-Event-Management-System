<?php
session_start();
if(!(isset($_SESSION['username'])))
{
	header("location:home.php");
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
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Purplicious</title>
		<link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		


    <style>
	.a:hover
	{
		color:#30C;
		text-decoration:none;
	}
	a
	{
		text-decoration:none;
	}
	.ii
	{
	margin:100px 200px 0px 0px;
	}
	.hoho
	{
	color:#330000;
    margin-left:400px;
	margin-top:0px;
	}
	</style>
		

	    <style type="text/css">
<!--
.style2 {color: #98ae5b}
-->
        </style>
</head>
	<body>
		<div id="outer">
			<div id="header">
				<div id="nav">

					<ul>
						<li class="first active">
							<a href="icon.php">Home</a>
						</li>
						</ul>					<br class="clear" />
				</div>
			</div>
			<div id="banner">
				<img src="images/016_DJ_indian-wedding-room-900x600.jpg" width="1180" height="320" alt="" />
				
					<div id="logo">
						<h2><a href="#">Event management </a></h2>
					</div>				
			</div>
			<div id="main">
			<br />	
						
  <tr>
  <td>
    <p align="center">&nbsp;</p>
    <form name="form1" method="post" action="">
	  <p align="center">&nbsp;</p>
	 
    </form>
	<p>
	  <?php
	  $e=$_SESSION['orderid'];
	$a=$_SESSION['eventname'];
	$b=$_SESSION['eventdate'];
	echo "Date".$b;
	$c=$_SESSION['eventlocation'];
	$d=$_SESSION['eventgathering'];
	$f=$_SESSION['total'];
	$g=$_SESSION['clientname'];
	$con=mysql_connect("localhost","root","");
  if(!$con)
  {
  	die("error is" .mysql_error());
	}
	else
	{
	if(!(mysql_select_db("project1",$con)))
	{
		die("error is" .mysql_error());
	}
	else if(!(mysql_query("insert into order_detail values('$e','$a','$b','$c','$d','$f','$g')")))
	{
		die("error is" .mysql_error());
	}
	else
	{
	
		echo "order is booked";
		
	}
	
	mysql_close($con);
	}
	?>
	
	
	<?php
	$p=$_SESSION['sub_service'];
	$q=$_SESSION['orderid'];
	$con=mysql_connect("localhost","root","");
  if(!$con)
  {
  	die("error is" .mysql_error());
	}
	else
	{
	mysql_select_db("project1",$con);
	foreach($p as $x)
	{
	$result=mysql_query("select servicename from subservices where ss_name='$x'");
	if($row=mysql_fetch_array($result))
	{
		$sername=$row['servicename'];
	}
	
	mysql_query("insert into order_master values('$q','$x','pending','$sername','-----')");
	
	}
	mysql_close($con);
	}
	?>
	
	</p>
	<form name="form2" method="post" action="logout.php">
	  <label>
	    <div align="center">
	      <input type="submit" name="Submit" value="logout">
	      </div>
	  </label>
	  </form>
  <!--<p class="hoho style2">Your service has been added to the cart...</p>
 
     <div align="center">
       <p><input type="submit" name="Submit" value="MoreServices" >
        </p>
       
   <p><a href="bookorder.php"><strong>next </strong></a> </p>
   </div>
 
 </form>-->
		
             <br class="clear" />
			</div>
			
		</div>
		<div style="margin: 1em 0 3em 0; text-align: center;">
		</div>
</body>
</html>
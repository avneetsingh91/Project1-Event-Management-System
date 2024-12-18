<?php
session_start();
if(!(isset($_SESSION['username'])))
{
	header("location:home.php");
}
?>	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
		<title>Event Manageent</title>
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
.style3 {color: #000000}
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
 <td></p>
    <p>&nbsp;</p>
    <p><span class="style2">orderid:-</span>
      <?php
	$con=mysql_connect("localhost","root","");
  if(!$con)
  {
  	die("error is" .mysql_error());
	}
	else
	{
	mysql_select_db("project1",$con);

	$result=mysql_query("select MAX(orderid) from order_detail");
	if($row=mysql_fetch_array($result))
	{
	
	if($row['MAX(orderid)']!="")
	{


		$id=$row['MAX(orderid)'];
		
		$id=$id+1;
		echo $id;
		$_SESSION['orderid']=$id;
	}
	else
	{

		$id=1;
		echo $id;
		$_SESSION['orderid']=$id;
	}
	}
	}
	?>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style2">&nbsp;Event name:- </span>&nbsp;<span class="style3">&nbsp;&nbsp;
	<?php 
	echo $_SESSION['eventname'];
	?>
&nbsp;</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style2">client name:-</span> 
<?php
 $con=mysql_connect("localhost","root","");
  if(!$con)
  {
  	die("error is" .mysql_error());
	}
	else
	{
	mysql_select_db("project1",$con);
	$r=$_SESSION['username'];
	$result=mysql_query("select * from reg where uname='$r'");
	if($row=mysql_fetch_array($result))
	{
         echo $row['fname']. " ".$row['lname'];
	}
	$x=$row['fname'].$row['lname'];
	$_SESSION['clientname']=$x;
	}
	
?></p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style2">location:-</span><span class="style3">
      <?php
	echo $_SESSION['eventlocation'];
	?>
    </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style2">&nbsp;event date:- </span>
    <span class="style3">
    <?php
echo $_SESSION['eventdate'];
?>
    </span></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p> <?php
	$tot=0;
	echo "<center><table width='700' height='94' border='1' class=a>
                <tr><th>Sub_Service name</th>
					<th>sub_service price</th>
					<th>service name</th>
                	</tr>";
	$a=$_SESSION['sub_service'];
	foreach($a as $x)
	{
		
  $con=mysql_connect("localhost","root","");
  if(!$con)
  {
  	die("error is" .mysql_error());
	}
	else
	{
	mysql_select_db("project1",$con);
	$result=mysql_query("select * from subservices where ss_name='$x'");
	
	
	if($row=mysql_fetch_array($result))
	{
		$tot=$tot+$row['ss_price'];
		echo "<tr><td>".$x."</td><td>".$row['ss_price']."</td><td>".$row['servicename']."</td></tr>";
	}
	}
	
	}
	$_SESSION['total']=$tot;
	echo "<tr><td colspan=3 align=center>Price=".$tot."</td></tr>";
	
     echo "</table>";
	?>
	
    <a href="confirmed.php"> next </a>
    <td width="4"  bgcolor="#c67ba7" valign="top" align="center">&nbsp;</td>
  </tr>
 
             <br class="clear" />
			</div>
			
		</div>
		<div style="margin: 1em 0 3em 0; text-align: center;">
			 		</div>
</body>
</html>
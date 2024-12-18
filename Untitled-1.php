<?php
mysql_connect("localhost","root","");
mysql_select_db("project1");
$i=$_REQUEST['id'];
$query="select * from order_detail where id='$i'";
$rid=mysql_query($query);

if($_SERVER['REQUEST_METHOD']=='POST')
{
$query1="update order_detail set ";

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
		

<body>
	<div id="outer">
		<div id="header">
			<div id="nav">
			<ul>
            <li class="first active">
                            <a href="home.php">Home</a>
                        </li>
                        <li>
                            <a href="mail.php">contact us    </a>
                        </li>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li><a href="feedback.php">feedback</a>
                        </li>
                        <li class="last">
                            <a href="home1.php">Register</a>
                        </li>
                        <li class="last">
                            <a href="adminservices2.php">Services</a>
                        </li>
            
			</ul>
				
		    </div>
		</div>
		<div id="banner">
			<img src="images/pic02.jpg" width="1180" height="320" alt="" />
				
				<div id="logo">
				<h2><a href="#">Event management </a></h2>
				</div>				
		</div>
		<div id="main" style="height:400px">
		<?php
		?>
		</div>
		
		<br class="clear" />
			
			
		
		<div style="margin: 1em 0 3em 0; text-align: center;">
			 <a href="home.php" class="a">HOME </a>|<a href="" class="a">CONTACT US </a>|<a href="" class="a">ABOUT US </a>|<a href="" class="a">SERVICES</a>|<br />
		
</div>
</body>
</html>
		